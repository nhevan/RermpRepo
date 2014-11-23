<?php
App::uses('AppController', 'Controller');
/**
 * Relationshipstatuses Controller
 *
 * @property Relationshipstatus $Relationshipstatus
 * @property PaginatorComponent $Paginator
 */
class RelationshipstatusesController extends AppController {

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
		$this->Relationshipstatus->recursive = 0;
		$this->set('relationshipstatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Relationshipstatus->exists($id)) {
			throw new NotFoundException(__('Invalid relationshipstatus'));
		}
		$options = array('conditions' => array('Relationshipstatus.' . $this->Relationshipstatus->primaryKey => $id));
		$this->set('relationshipstatus', $this->Relationshipstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relationshipstatus->create();
			if ($this->Relationshipstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The relationshipstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationshipstatus could not be saved. Please, try again.'));
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
		if (!$this->Relationshipstatus->exists($id)) {
			throw new NotFoundException(__('Invalid relationshipstatus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Relationshipstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The relationshipstatus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationshipstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Relationshipstatus.' . $this->Relationshipstatus->primaryKey => $id));
			$this->request->data = $this->Relationshipstatus->find('first', $options);
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
		$this->Relationshipstatus->id = $id;
		if (!$this->Relationshipstatus->exists()) {
			throw new NotFoundException(__('Invalid relationshipstatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Relationshipstatus->delete()) {
			$this->Session->setFlash(__('The relationshipstatus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The relationshipstatus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
