<?php
App::uses('AppController', 'Controller');
/**
 * Divisions Controller
 *
 * @property Division $Division
 * @property PaginatorComponent $Paginator
 */
class DivisionsController extends AppController {

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
		$this->Division->recursive = 0;
		$this->set('divisions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Division->exists($id)) {
			throw new NotFoundException(__('Invalid division'));
		}
		$options = array('conditions' => array('Division.' . $this->Division->primaryKey => $id));
		$this->set('division', $this->Division->find('first', $options));
	}

/**
 * overview method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function overview($id = null) {
		if (!$this->Division->exists($id)) {
			throw new NotFoundException(__('Invalid district'));
		}
		$options = array('conditions' => array('Division.' . $this->Division->primaryKey => $id));
		
		$this->set('division', $this->Division->find('first', $options));
		
		$this->Division->Behaviors->load('Containable');
		$this->Division->contain('District','District.Upazilla','District.Upazilla.Union','District.Upazilla.Union.Employee','District.Upazilla.Union.Employee.Salarystatus');
		$divisionDetail = $this->Division->find('first', $options);
		$this->set('division',$divisionDetail );
		
		$this->loadModel('Account');
		$options = array('recursive'=>-1,'conditions' => array('Account.refId'=> $id,'Account.accounttype_id'=>2));
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
			$this->request->data['Division']['createdby'] = 1;	//MUST BE CHANGED
			$this->Division->create();
			if ($this->Division->save($this->request->data)) {
				$this->Session->setFlash(__('The division has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The division could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Division->exists($id)) {
			throw new NotFoundException(__('Invalid division'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Division->save($this->request->data)) {
				$this->Session->setFlash(__('The division has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The division could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Division.' . $this->Division->primaryKey => $id));
			$this->request->data = $this->Division->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Division->id = $id;
		if (!$this->Division->exists()) {
			throw new NotFoundException(__('Invalid division'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Division->delete()) {
			$this->Session->setFlash(__('The division has been deleted.'));
		} else {
			$this->Session->setFlash(__('The division could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
