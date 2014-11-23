<?php
App::uses('AppController', 'Controller');
/**
 * Unions Controller
 *
 * @property Union $Union
 * @property PaginatorComponent $Paginator
 */
class UnionsController extends AppController {

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
		$this->Union->recursive = 0;
		$this->set('unions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Union->exists($id)) {
			throw new NotFoundException(__('Invalid union'));
		}
		$options = array('conditions' => array('Union.' . $this->Union->primaryKey => $id));
		$this->set('union', $this->Union->find('first', $options));
	}
	
/**
 * overview method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function overview($id = null) {
		if (!$this->Union->exists($id)) {
			throw new NotFoundException(__('Invalid union'));
		}
		$options = array('conditions' => array('Union.' . $this->Union->primaryKey => $id));
		
		$unionDetail = $this->Union->find('first', $options);
		$this->set('union', $unionDetail);
		
		$this->Union->Upazilla->recursive = -1;
		$upazillaDetail = $this->Union->Upazilla->findById($unionDetail['Upazilla']['id']);
		$this->set('upazilla', $upazillaDetail);
		
		$this->Union->Upazilla->District->recursive = -1;
		$districtDetail = $this->Union->Upazilla->District->findById($upazillaDetail['Upazilla']['district_id']);
		$this->set('district', $districtDetail);
		
		$this->Union->Upazilla->District->Division->recursive = -1;
		$divisionDetail = $this->Union->Upazilla->District->Division->findById($districtDetail['District']['division_id']);
		$this->set('division', $divisionDetail);
		
		$this->loadModel('Account');
		$options = array('recursive'=>-1,'conditions' => array('Account.refId'=> $id,'Account.accounttype_id'=>5));
		$accountinfo = $this->Account->find('all',$options);
		$this->set('accountinfo', $accountinfo);
		
		$this->Union->Employee->Behaviors->load('Containable');
		$this->Union->Employee->contain('Salarystatus');
		$employees = $this->Union->Employee->findAllByUnionId($id);
		$this->set('employees', $employees);		
	}	

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Union']['creationTime'] = date('Y-m-d H:m:s');
			$this->request->data['Union']['createdBy'] = 1;
			$this->Union->create();
			if ($this->Union->save($this->request->data)) {
				$this->Session->setFlash(__('The union has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The union could not be saved. Please, try again.'));
			}
		}
		$upazillas = $this->Union->Upazilla->find('list');
		$this->Union->Upazilla->District->Division->recursive = -1;
		$divisions = $this->Union->Upazilla->District->Division->find('all',array('fields'=>array('id','name')));
		$this->set(compact('upazillas','divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Union->exists($id)) {
			throw new NotFoundException(__('Invalid union'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Union->save($this->request->data)) {
				$this->Session->setFlash(__('The union has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The union could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Union.' . $this->Union->primaryKey => $id));
			$this->request->data = $this->Union->find('first', $options);
		}
		$upazillas = $this->Union->Upazilla->find('list');
		$this->set(compact('upazillas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Union->id = $id;
		if (!$this->Union->exists()) {
			throw new NotFoundException(__('Invalid union'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Union->delete()) {
			$this->Session->setFlash(__('The union has been deleted.'));
		} else {
			$this->Session->setFlash(__('The union could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function fetchUnions() {
		$this->layout = 'ajax';
		$UpazillaId = $this->data['Upazilla'];
		$this->Union->recursive = -1;
		$Unions = $this->Union->findAllByUpazillaId($UpazillaId);
		$this->set(compact('Unions'));
	}
	public function fetchUnionsWithAccounts() {
		$this->layout = 'ajax';
		$tmp = $this->data;
		$UpazillaId = (int)$this->data['Upazilla'];
		$this->Union->recursive = -1;
		$Unions = $this->Union->findAllByUpazillaId($UpazillaId);
		$this->loadModel('Account');
		$this->Account->recursive = -1;
		$accounts = $this->Account->findAllByAccounttypeId(5); // looking for union type account
		
		$this->set(compact('Unions','accounts','tmp','UpazillaId'));
	}
	}
