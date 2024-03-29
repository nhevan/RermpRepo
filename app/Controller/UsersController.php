<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$usertypes = $this->User->Usertype->find('list');
		$this->set(compact('usertypes'));
	}
/**
 * add Division user method
 *
 * @return void
 */
	public function addDivisionUser() {
		if ($this->request->is('post')) {
			$this->request->data['User']['user_id'] = 1;		 //MUST CHANGE
			$this->request->data['User']['usertype_id'] = 4;	 //MUST CHANGE
			$this->request->data['User']['creationTime'] = date('Y-m-d H:m:s');
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The Division level user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$usertypes = $this->User->Usertype->find('list');
		$this->loadModel('Division');
		$Divisions = $this->Division->recursive = -1;
		$Divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('usertypes','Divisions'));
		
	}


/**
 * add District user method
 *
 * @return void
 */
	public function addDistrictUser() {
		if ($this->request->is('post')) {
			$this->request->data['User']['user_id'] = 1;		 //MUST CHANGE
			$this->request->data['User']['usertype_id'] = 3;	 //MUST CHANGE
			$this->request->data['User']['creationTime'] = date('Y-m-d H:m:s');
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The District level user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$usertypes = $this->User->Usertype->find('list');
		$this->loadModel('Division');
		$Divisions = $this->Division->recursive = -1;
		$Divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('usertypes','Divisions'));
	}

/**
 * add Upazilla user method
 *
 * @return void
 */
	public function addUpazillaUser() {
		if ($this->request->is('post')) {
			$this->request->data['User']['user_id'] = 1;		 //MUST CHANGE
			$this->request->data['User']['usertype_id'] = 5;	 //MUST CHANGE
			$this->request->data['User']['creationTime'] = date('Y-m-d H:m:s');
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The Upazilla level user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$usertypes = $this->User->Usertype->find('list');
		$this->loadModel('Division');
		$Divisions = $this->Division->recursive = -1;
		$Divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('usertypes','Divisions'));
	}
	
/**
 * add Union user method
 *
 * @return void
 */
	public function addUnionUser() {
		if ($this->request->is('post')) {
			$this->request->data['User']['user_id'] = 1;		 //MUST CHANGE
			$this->request->data['User']['usertype_id'] = 6;	 //MUST CHANGE
			$this->request->data['User']['creationTime'] = date('Y-m-d H:m:s');
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The Union level user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$usertypes = $this->User->Usertype->find('list');
		$this->loadModel('Division');
		$Divisions = $this->Division->recursive = -1;
		$Divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('usertypes','Divisions'));
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$usertypes = $this->User->Usertype->find('list');
		$this->set(compact('usertypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
