<?php
App::uses('AppController', 'Controller');
/**
 * Familymembers Controller
 *
 * @property Familymember $Familymember
 * @property PaginatorComponent $Paginator
 */
class FamilymembersController extends AppController {

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
		$this->Familymember->recursive = 0;
		$this->set('familymembers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Familymember->exists($id)) {
			throw new NotFoundException(__('Invalid familymember'));
		}
		$options = array('conditions' => array('Familymember.' . $this->Familymember->primaryKey => $id));
		$this->set('familymember', $this->Familymember->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Familymember->create();
			if ($this->Familymember->save($this->request->data)) {
				$this->Session->setFlash(__('The familymember has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The familymember could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Familymember->Employee->find('list');
		$baselines = $this->Familymember->Baseline->find('list');
		$this->set(compact('employees', 'baselines'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Familymember->exists($id)) {
			throw new NotFoundException(__('Invalid familymember'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Familymember->save($this->request->data)) {
				$this->Session->setFlash(__('The familymember has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The familymember could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Familymember.' . $this->Familymember->primaryKey => $id));
			$this->request->data = $this->Familymember->find('first', $options);
		}
		$employees = $this->Familymember->Employee->find('list');
		$baselines = $this->Familymember->Baseline->find('list');
		$this->set(compact('employees', 'baselines'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Familymember->id = $id;
		if (!$this->Familymember->exists()) {
			throw new NotFoundException(__('Invalid familymember'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Familymember->delete()) {
			$this->Session->setFlash(__('The familymember has been deleted.'));
		} else {
			$this->Session->setFlash(__('The familymember could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
