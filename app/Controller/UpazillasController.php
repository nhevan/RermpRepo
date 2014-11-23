<?php
App::uses('AppController', 'Controller');
/**
 * Upazillas Controller
 *
 * @property Upazilla $Upazilla
 * @property PaginatorComponent $Paginator
 */
class UpazillasController extends AppController {

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
		$this->Upazilla->recursive = 0;
		$this->set('upazillas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Upazilla->exists($id)) {
			throw new NotFoundException(__('Invalid upazilla'));
		}
		$options = array('conditions' => array('Upazilla.' . $this->Upazilla->primaryKey => $id));
		$this->set('upazilla', $this->Upazilla->find('first', $options));
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function overview($id = null) {
		if (!$this->Upazilla->exists($id)) {
			throw new NotFoundException(__('Invalid upazilla'));
		}
		$options = array('conditions' => array('Upazilla.' . $this->Upazilla->primaryKey => $id));
		
		$this->Upazilla->Behaviors->load('Containable');
		$this->Upazilla->contain('Union.Employee','Union.Employee.Salarystatus','District','District.Division');
		$upazillaDetail = $this->Upazilla->find('first', $options);
		$this->set('upazilla',$upazillaDetail );
		
		$this->loadModel('Account');
		$options = array('recursive'=>-1,'conditions' => array('Account.refId'=> $id,'Account.accounttype_id'=>4));
		$accountinfo = $this->Account->find('all',$options);
		$this->set('accountinfo', $accountinfo);
		
		/*$this->Upazilla->District->recursive = -1;
		$districtDetail = $this->Upazilla->District->findById($upazillaDetail['Upazilla']['district_id']);
		$this->set('district', $districtDetail);
		
		$this->Upazilla->District->Division->recursive = -1;
		$divisionDetail = $this->Upazilla->District->Division->findById($districtDetail['District']['division_id']);
		$this->set('division', $divisionDetail);
		
		
		
		
		
		$employees = array();
		
		foreach($upazillaDetail['Union'] as $union){
			$this->Upazilla->Union->Employee->Behaviors->load('Containable');
			$this->Upazilla->Union->Employee->contain('Salarystatus');
			$tmp = $this->Upazilla->Union->Employee->findAllById((int)$union['id']);
			array_push($employees,$tmp);
		}
		//$employees = $this->Upazilla->Union->Employee->find('all',$ops);
		$this->set('employees', $employees);*/
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Upazilla']['user_id'] = 1; //MUST CHANGE THIS VALUE FROM 1 TO APPROPRIATE USER ID
			$this->Upazilla->create();
			if ($this->Upazilla->save($this->request->data)) {
				$this->Session->setFlash(__('The upazilla has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upazilla could not be saved. Please, try again.'));
			}
		}
		$users = $this->Upazilla->User->find('list');
		$districts = $this->Upazilla->District->find('list');
		$this->Upazilla->District->Division->recursive = -1;
		$divisions = $this->Upazilla->District->Division->find('all',array('fields'=>array('id','name')));
		$this->set(compact('users', 'districts','divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Upazilla->exists($id)) {
			throw new NotFoundException(__('Invalid upazilla'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Upazilla->save($this->request->data)) {
				$this->Session->setFlash(__('The upazilla has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upazilla could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Upazilla.' . $this->Upazilla->primaryKey => $id));
			$this->request->data = $this->Upazilla->find('first', $options);
		}
		$users = $this->Upazilla->User->find('list');
		$districts = $this->Upazilla->District->find('list');
		$this->set(compact('users', 'districts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Upazilla->id = $id;
		if (!$this->Upazilla->exists()) {
			throw new NotFoundException(__('Invalid upazilla'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Upazilla->delete()) {
			$this->Session->setFlash(__('The upazilla has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upazilla could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function fetchUpazillas() {
		$this->layout = 'ajax';
		$DistrictId = $this->data['District'];
		$this->Upazilla->recursive = -1;
		$Upazillas = $this->Upazilla->findAllByDistrictId($DistrictId);
		$this->set(compact('Upazillas'));
	}
	
	public function fetchUpazillasWithAccounts() {
		$this->layout = 'ajax';
		$DistrictId = $this->data['District'];
		$this->Upazilla->recursive = -1;
		$Upazillas = $this->Upazilla->findAllByDistrictId($DistrictId);
		$this->loadModel('Account');
		$this->Account->recursive = -1;
		$accounts = $this->Account->findAllByAccounttypeId(4); // looking for upazilla type account
		
		$this->set(compact('Upazillas','accounts'));
	}
	}
