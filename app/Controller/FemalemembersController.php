<?php
App::uses('AppController', 'Controller');
/**
 * Femalemembers Controller
 *
 * @property Femalemember $Femalemember
 * @property PaginatorComponent $Paginator
 */
class FemalemembersController extends AppController {

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
		$this->Femalemember->recursive = 0;
		$this->set('femalemembers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Femalemember->exists($id)) {
			throw new NotFoundException(__('Invalid femalemember'));
		}
		$options = array('conditions' => array('Femalemember.' . $this->Femalemember->primaryKey => $id));
		$this->set('femalemember', $this->Femalemember->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Femalemember->create();
			if ($this->Femalemember->save($this->request->data)) {
				$this->Session->setFlash(__('The femalemember has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The femalemember could not be saved. Please, try again.'));
			}
		}
		$familymembers = $this->Femalemember->Familymember->find('list');
		$relationshipstatuses = $this->Femalemember->Relationshipstatus->find('list');
		$baselinedatas = $this->Femalemember->Baselinedatum->find('list');
		$this->set(compact('familymembers', 'relationshipstatuses', 'baselinedatas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Femalemember->exists($id)) {
			throw new NotFoundException(__('Invalid femalemember'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Femalemember->save($this->request->data)) {
				$this->Session->setFlash(__('The femalemember has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The femalemember could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Femalemember.' . $this->Femalemember->primaryKey => $id));
			$this->request->data = $this->Femalemember->find('first', $options);
		}
		$familymembers = $this->Femalemember->Familymember->find('list');
		$relationshipstatuses = $this->Femalemember->Relationshipstatus->find('list');
		$baselinedatas = $this->Femalemember->Baselinedatum->find('list');
		$this->set(compact('familymembers', 'relationshipstatuses', 'baselinedatas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Femalemember->id = $id;
		if (!$this->Femalemember->exists()) {
			throw new NotFoundException(__('Invalid femalemember'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Femalemember->delete()) {
			$this->Session->setFlash(__('The femalemember has been deleted.'));
		} else {
			$this->Session->setFlash(__('The femalemember could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
