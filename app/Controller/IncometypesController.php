<?php
App::uses('AppController', 'Controller');
/**
 * Incometypes Controller
 *
 * @property Incometype $Incometype
 * @property PaginatorComponent $Paginator
 */
class IncometypesController extends AppController {

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
		$this->Incometype->recursive = 0;
		$this->set('incometypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Incometype->exists($id)) {
			throw new NotFoundException(__('Invalid incometype'));
		}
		$options = array('conditions' => array('Incometype.' . $this->Incometype->primaryKey => $id));
		$this->set('incometype', $this->Incometype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Incometype->create();
			if ($this->Incometype->save($this->request->data)) {
				$this->Session->setFlash(__('The incometype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incometype could not be saved. Please, try again.'));
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
		if (!$this->Incometype->exists($id)) {
			throw new NotFoundException(__('Invalid incometype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Incometype->save($this->request->data)) {
				$this->Session->setFlash(__('The incometype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incometype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Incometype.' . $this->Incometype->primaryKey => $id));
			$this->request->data = $this->Incometype->find('first', $options);
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
		$this->Incometype->id = $id;
		if (!$this->Incometype->exists()) {
			throw new NotFoundException(__('Invalid incometype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Incometype->delete()) {
			$this->Session->setFlash(__('The incometype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The incometype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
