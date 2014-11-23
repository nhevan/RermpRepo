<?php
App::uses('AppController', 'Controller');
/**
 * Districts Controller
 *
 * @property District $District
 * @property PaginatorComponent $Paginator
 */
class DistrictsController extends AppController {

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
		$this->District->recursive = 0;
		$this->set('districts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->District->exists($id)) {
			throw new NotFoundException(__('Invalid district'));
		}
		$options = array('conditions' => array('District.' . $this->District->primaryKey => $id));
		$this->set('district', $this->District->find('first', $options));
	}


/**
 * overview method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function overview($id = null) {
		if (!$this->District->exists($id)) {
			throw new NotFoundException(__('Invalid district'));
		}
		$options = array('conditions' => array('District.' . $this->District->primaryKey => $id));
		
		$this->set('district', $this->District->find('first', $options));
		
		$this->District->Behaviors->load('Containable');
		$this->District->contain('Upazilla','Upazilla.Union.Employee','Upazilla.Union.Employee.Salarystatus','Division');
		$districtDetail = $this->District->find('first', $options);
		$this->set('district',$districtDetail );
		
		$this->loadModel('Account');
		$options = array('recursive'=>-1,'conditions' => array('Account.refId'=> $id,'Account.accounttype_id'=>3));
		$accountinfo = $this->Account->find('all',$options);
		$this->set('accountinfo', $accountinfo);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['District']['user_id'] = 1;
			$this->District->create();
			if ($this->District->save($this->request->data)) {
				$this->Session->setFlash(__('The district has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The district could not be saved. Please, try again.'));
			}
		}
		$users = $this->District->User->find('list');
		$divisions = $this->District->Division->find('list');
		$this->set(compact('users', 'divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->District->exists($id)) {
			throw new NotFoundException(__('Invalid district'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->District->save($this->request->data)) {
				$this->Session->setFlash(__('The district has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The district could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('District.' . $this->District->primaryKey => $id));
			$this->request->data = $this->District->find('first', $options);
		}
		$users = $this->District->User->find('list');
		$divisions = $this->District->Division->find('list');
		$this->set(compact('users', 'divisions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->District->id = $id;
		if (!$this->District->exists()) {
			throw new NotFoundException(__('Invalid district'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->District->delete()) {
			$this->Session->setFlash(__('The district has been deleted.'));
		} else {
			$this->Session->setFlash(__('The district could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function fetchDistricts() {
		$this->layout = 'ajax';
		$DivisionId = $this->data['Division'];
		$this->District->recursive = -1;
		$Districts = $this->District->findAllByDivisionId($DivisionId);
		$this->set(compact('Districts'));
	}
	
	public function fetchDistrictsWithAccounts() {
		$this->layout = 'ajax';
		$tmp = $this->request->data['Division'];
		
		$DivisionId = $tmp;
		$this->District->recursive = -1;
		$Districts = $this->District->findAllByDivisionId($DivisionId);
		
		$this->loadModel('Account');
		$this->Account->recursive = -1;
		$accounts = $this->Account->findAllByAccounttypeId(3); // looking for district type account
		
		
		$this->set(compact('Districts','accounts'));
	}
	
	
	}
