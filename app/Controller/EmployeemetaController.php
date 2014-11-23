<?php
App::uses('AppController', 'Controller');
/**
 * Employeemeta Controller
 *
 * @property Employeemetum $Employeemetum
 * @property PaginatorComponent $Paginator
 */
class EmployeemetaController extends AppController {

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
		$this->Employeemetum->recursive = 0;
		$this->set('employeemeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employeemetum->exists($id)) {
			throw new NotFoundException(__('Invalid employeemetum'));
		}
		$options = array('conditions' => array('Employeemetum.' . $this->Employeemetum->primaryKey => $id));
		$this->set('employeemetum', $this->Employeemetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employeemetum->create();
			if ($this->Employeemetum->save($this->request->data)) {
				$this->Session->setFlash(__('The employeemetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeemetum could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Employeemetum->Employee->find('list');
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
		if (!$this->Employeemetum->exists($id)) {
			throw new NotFoundException(__('Invalid employeemetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employeemetum->save($this->request->data)) {
				$this->Session->setFlash(__('The employeemetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeemetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeemetum.' . $this->Employeemetum->primaryKey => $id));
			$this->request->data = $this->Employeemetum->find('first', $options);
		}
		$employees = $this->Employeemetum->Employee->find('list');
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
		$this->Employeemetum->id = $id;
		if (!$this->Employeemetum->exists()) {
			throw new NotFoundException(__('Invalid employeemetum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeemetum->delete()) {
			$this->Session->setFlash(__('The employeemetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employeemetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
