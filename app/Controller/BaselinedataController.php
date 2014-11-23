<?php
App::uses('AppController', 'Controller');
/**
 * Baselinedata Controller
 *
 * @property Baselinedatum $Baselinedatum
 * @property PaginatorComponent $Paginator
 */
class BaselinedataController extends AppController {

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
		$this->Baselinedatum->recursive = 0;
		$this->set('baselinedata', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Baselinedatum->exists($id)) {
			throw new NotFoundException(__('Invalid baselinedatum'));
		}
		$options = array('conditions' => array('Baselinedatum.' . $this->Baselinedatum->primaryKey => $id));
		$this->set('baselinedatum', $this->Baselinedatum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Baselinedatum->create();
			if ($this->Baselinedatum->save($this->request->data)) {
				$this->Session->setFlash(__('The baselinedatum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baselinedatum could not be saved. Please, try again.'));
			}
		}
		$baselines = $this->Baselinedatum->Baseline->find('list');
		$employees = $this->Baselinedatum->Employee->find('list');
		$relationshipstatuses = $this->Baselinedatum->Relationshipstatus->find('list');
		$this->set(compact('baselines', 'employees', 'relationshipstatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Baselinedatum->exists($id)) {
			throw new NotFoundException(__('Invalid baselinedatum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Baselinedatum->save($this->request->data)) {
				$this->Session->setFlash(__('The baselinedatum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baselinedatum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Baselinedatum.' . $this->Baselinedatum->primaryKey => $id));
			$this->request->data = $this->Baselinedatum->find('first', $options);
		}
		$baselines = $this->Baselinedatum->Baseline->find('list');
		$employees = $this->Baselinedatum->Employee->find('list');
		$relationshipstatuses = $this->Baselinedatum->Relationshipstatus->find('list');
		$this->set(compact('baselines', 'employees', 'relationshipstatuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Baselinedatum->id = $id;
		if (!$this->Baselinedatum->exists()) {
			throw new NotFoundException(__('Invalid baselinedatum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Baselinedatum->delete()) {
			$this->Session->setFlash(__('The baselinedatum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The baselinedatum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
