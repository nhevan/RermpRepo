<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 * @property PaginatorComponent $Paginator
 */
class EmployeesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * info method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function info($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$employee = $this->Employee->find('first', $options);
		
		$this->loadModel('Account');
		$options = array('recursive'=>-1,'conditions' => array('Account.refId'=> $id,'Account.accounttype_id'=>6));
		$accountinfo = $this->Account->find('all',$options);
		
		$this->set(compact('employee','accountinfo'));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		}
		$unions = $this->Employee->Union->find('list');
		$this->set(compact('unions'));
	}

/**
 * add method
 *
 * @return void
 */
	public function addEmployee() {
		if ($this->request->is('post')) {
			$this->request->data['Employee']['isActive'] = 1;	//All newly created Employee is set to active by default
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {

		            $this->request->data['Employeemetum']['employee_id'] = $this->Employee->id;
		            $this->Employee->Employeemetum->save($this->request->data);
		            
		            $this->request->data['Salarystatus']['cash'] = 0;
		            $this->request->data['Salarystatus']['saving'] = 0;
		            $this->request->data['Salarystatus']['employee_id'] = $this->Employee->id;
		            $this->request->data['Salarystatus']['updated_on'] = date('Y-m-d H:m:s');
		            $this->Employee->Salarystatus->save($this->request->data);
		            
		            $this->loadModel('Account');
		            $this->request->data['Account']['refId'] = $this->Employee->id;
		            $this->request->data['Account']['balance'] = 0;
		            $this->request->data['Account']['accounttype_id'] = 6;
		            $this->Account->save($this->request->data);
		            

				$this->Session->setFlash(__('The employee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		}
		$this->loadModel('Division');
		$Divisions = $this->Division->recursive = -1;
		$Divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		$unions = $this->Employee->Union->find('list');
		$this->set(compact('unions','Divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
		$unions = $this->Employee->Union->find('list');
		$this->set(compact('unions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('The employee has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function fetchEmployeesWithAccount() {
		$this->layout = 'ajax';
		$tmp = $this->data;
		$UnionId = (int)$this->data['Union'];
		$this->Employee->recursive = -1;
		$Employees = $this->Employee->findAllByUnionId($UnionId);
		$this->loadModel('Account');
		$this->Account->recursive = -1;
		$accounts = $this->Account->findAllByAccounttypeId(6); // looking for employee type account
		
		$this->set(compact('Employees','accounts'));
	}
	public function unionEmployees($unionId = null,$unionName = null) {
		$limit = 5;
		$this->Paginator->settings = array(
			'conditions' => array('Employee.union_id' => $unionId),
	        'limit' => $limit,
	        'order' => array(
	            'Employee.name' => 'asc'
            )
	    );
	    
		$this->Employee->recursive = 1;
		$this->set('employees', $this->Paginator->paginate());
		$this->set('unionId',$unionId);
		$this->set('unionName',$unionName);
		$this->set('limit',$limit);
	}
	
	public function upazillaEmployees($upazillaId = null) {
		$unions = $this->Employee->Union->Upazilla->Union->findAllByUpazillaId($upazillaId);	
		$this->set('unions',$unions);
		
		$this->Employee->Union->Upazilla->recursive = -1;
		$up = $this->Employee->Union->Upazilla->findById($upazillaId);
		$UpazillaName = $up['Upazilla']['name'];
		$unionIdList = array();
		
		foreach($unions as $union){
			array_push($unionIdList, $union['Union']['id']);
		}
		
		$limit = 5;
		$this->Paginator->settings = array(
			'conditions' => array('Employee.union_id' => $unionIdList),
	        'limit' => $limit,
	        'order' => array(
	            'Employee.name' => 'asc'
            )
	    );
	    
		$this->Employee->recursive = 1;
		$this->set('employees', $this->Paginator->paginate());
		$this->set('upazillaId',$upazillaId);
		$this->set('limit',$limit);
		$this->set('UpazillaName',$UpazillaName);
		$this->set('up',$up);
	}
	public function districtEmployees($districtId = null) {
	
		$this->Employee->Union->Upazilla->Behaviors->load('Containable');
		$this->Employee->Union->Upazilla->contain('Union','Union.Upazilla.District');
		$upazillas = $this->Employee->Union->Upazilla->findAllByDistrictId($districtId);	
		
		$unionT = array();
		$unions = array();
		foreach($upazillas as $upazilla){
		/*
		echo("<pre>");
		
		var_dump($upazilla);
		echo("</pre>");
		*/
		
			$this->Employee->Union->Upazilla->Union->Behaviors->load('Containable');
			$this->Employee->Union->Upazilla->Union->contain('Employee');
			//$this->Employee->Union->Upazilla->Union->recursive = -1;
			$tmp = $this->Employee->Union->Upazilla->Union->findAllByUpazillaId((int)$upazilla['Upazilla']['id']);
			array_push($unions,$tmp);
		}
		
		//$unions = $this->Employee->Union->Upazilla->Union->findAllByUpazillaId($upazillaId);	
		//$this->set('unions',$unions);
		
		$this->Employee->Union->Upazilla->District->recursive = -1;
		$up = $this->Employee->Union->Upazilla->District->findById($districtId);
		$DistrictName = $up['District']['name'];

		$unionIdList = array();
		
		foreach($unions as $union){
			
			foreach($union as $U){
				
				array_push($unionIdList, $U['Union']['id']);
			}
			
		}
		
		$limit = 5;
		$this->Employee->Behaviors->load('Containable');
		$this->Employee->contain('Employeemetum','Union','Union.Upazilla','Union.Upazilla.District');
		$this->Paginator->settings = array(
			'conditions' => array('Employee.union_id' => $unionIdList),
	        'limit' => $limit,
	        'contain' => array('Union.Upazilla'),
	        'order' => array(
	            'Employee.name' => 'asc'
            )
	    );
	    
		//$this->Employee->recursive = 1;
		$this->set('employees', $this->Paginator->paginate());
		$this->set('districtId',$districtId);
		$this->set('limit',$limit);
		$this->set('DistrictName',$DistrictName);
		//$this->set('up',$up);
	}
	
	public function divisionEmployees($divisionId = null) {
	
		$this->Employee->Union->Upazilla->District->Behaviors->load('Containable');
		$this->Employee->Union->Upazilla->District->contain('Upazilla','Upazilla.Union');
		$districts = $this->Employee->Union->Upazilla->District->findAllByDivisionId($divisionId);	
		
		$unionT = array();
		$unions = array();
		foreach($districts as $district ){
			foreach($district['Upazilla'] as $upazilla){			
				$this->Employee->Union->Upazilla->Union->Behaviors->load('Containable');
				$this->Employee->Union->Upazilla->Union->contain('Employee');
				$tmp = $this->Employee->Union->Upazilla->Union->findAllByUpazillaId((int)$upazilla['id']);
				array_push($unions,$tmp);
			}
		}

		$this->Employee->Union->Upazilla->District->Division->recursive = -1;
		$data = $this->Employee->Union->Upazilla->District->Division->findById($divisionId);
		$DivisionName = $data['Division']['name'];

		$unionIdList = array();
		
		foreach($unions as $union){
			
			foreach($union as $U){
				
				array_push($unionIdList, $U['Union']['id']);
			}
			
		}
		
		$this->Employee->bindModel(array(
		    'belongsTo' => array(
		        'Upazilla' => array(
		            'foreignKey' => false,
		            'conditions' => array('Upazilla.id = Union.upazilla_id')
		        ),
		        'District' => array(
		            'foreignKey' => false,
		            'conditions' => array('District.id = Upazilla.district_id')
		        ),
		        'Salarystatus' => array(
		            'foreignKey' => false,
		            'conditions' => array('Salarystatus.employee_id = Employee.id')
		        ),
		        'Employeemetum' => array(
		            'foreignKey' => false,
		            'associationForeignKey'=>'employee_id',
		            'conditions' => array('Employeemetum.employee_id = Employee.id')
		        ),

		    )
		));
		
		
		$this->Employee->Behaviors->load('Containable');
		$this->Employee->contain(array(
			'Union'=>array('fields'=>array('id','name')),
			'Upazilla'=>array('fields'=>array('id','name')), 
			'District'=>array('fields'=>array('id','name')),
			'Salarystatus'=>array('fields'=>array('id','cash','saving')),

		));

		
		$this->Employee->virtualFields['UpazillaName'] = $this->Employee->Union->Upazilla->virtualFields['vName'];
		$this->Employee->virtualFields['DistrictName'] = $this->Employee->District->virtualFields['vName'];
		$this->Employee->virtualFields['cash'] = $this->Employee->Salarystatus->virtualFields['vCash'];
		$this->Employee->virtualFields['saving'] = $this->Employee->Salarystatus->virtualFields['vSaving'];
		$this->Employee->virtualFields['FullName'] = 'CONCAT(Employee.name, ", ", Employeemetum.name)';
		

		
		$limit = 20;
		$this->Paginator->settings = array(
			'contain' => array(
				'Union',
				'Upazilla'=>array('fields'=>array('id','name')),			
				'Employeemetum'=>array('fields'=>array('name'))
			),
			'conditions' => array('Employee.union_id' => $unionIdList),
	        'limit' => $limit,
	        'recursive'=>-2,
	        'order' => array(
	            'Employee.name' => 'asc'
            )
	    );
		$this->set('employees', $this->Paginator->paginate());
		$this->set('divisionId',$divisionId);
		$this->set('limit',$limit);
		$this->set('DivisionName',$DivisionName);
	}
	
	
	
	}
