<?php
App::uses('AppController', 'Controller');
/**
 * Awarenesses Controller
 *
 * @property Awareness $Awareness
 * @property PaginatorComponent $Paginator
 */
class AwarenessesController extends AppController {

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
		$this->Awareness->recursive = 0;
		$this->set('awarenesses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Awareness->exists($id)) {
			throw new NotFoundException(__('Invalid awareness'));
		}
		$options = array('conditions' => array('Awareness.' . $this->Awareness->primaryKey => $id));
		$this->set('awareness', $this->Awareness->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Awareness->create();
			if ($this->Awareness->save($this->request->data)) {
				$this->Session->setFlash(__('The awareness has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The awareness could not be saved. Please, try again.'));
			}
		}
		$baselinedatas = $this->Awareness->Baselinedatum->find('list');
		$this->set(compact('baselinedatas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Awareness->exists($id)) {
			throw new NotFoundException(__('Invalid awareness'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Awareness->save($this->request->data)) {
				$this->Session->setFlash(__('The awareness has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The awareness could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Awareness.' . $this->Awareness->primaryKey => $id));
			$this->request->data = $this->Awareness->find('first', $options);
		}
		$baselinedatas = $this->Awareness->Baselinedatum->find('list');
		$this->set(compact('baselinedatas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Awareness->id = $id;
		if (!$this->Awareness->exists()) {
			throw new NotFoundException(__('Invalid awareness'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Awareness->delete()) {
			$this->Session->setFlash(__('The awareness has been deleted.'));
		} else {
			$this->Session->setFlash(__('The awareness could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
