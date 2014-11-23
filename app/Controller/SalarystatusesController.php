<?php
App::uses('AppController', 'Controller');
/**
 * Salarystatuses Controller
 *
 * @property Salarystatus $Salarystatus
 * @property PaginatorComponent $Paginator
 */
class SalarystatusesController extends AppController {

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
		$this->Salarystatus->recursive = 0;
		$this->set('salarystatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Salarystatus->exists($id)) {
			throw new NotFoundException(__('Invalid salarystatus'));
		}
		$options = array('conditions' => array('Salarystatus.' . $this->Salarystatus->primaryKey => $id));
		$this->set('salarystatus', $this->Salarystatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Salarystatus->create();
			if ($this->Salarystatus->save($this->request->data)) {
				$this->Session->setFlash(__('The salarystatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salarystatus could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Salarystatus->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Salarystatus->exists($id)) {
			throw new NotFoundException(__('Invalid salarystatus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Salarystatus->save($this->request->data)) {
				$this->Session->setFlash(__('The salarystatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salarystatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Salarystatus.' . $this->Salarystatus->primaryKey => $id));
			$this->request->data = $this->Salarystatus->find('first', $options);
		}
		$employees = $this->Salarystatus->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Salarystatus->id = $id;
		if (!$this->Salarystatus->exists()) {
			throw new NotFoundException(__('Invalid salarystatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Salarystatus->delete()) {
			$this->Session->setFlash(__('The salarystatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The salarystatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
