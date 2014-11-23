<?php
App::uses('AppController', 'Controller');
/**
 * Incomes Controller
 *
 * @property Income $Income
 * @property PaginatorComponent $Paginator
 */
class IncomesController extends AppController {

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
		$this->Income->recursive = 0;
		$this->set('incomes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		$options = array('conditions' => array('Income.' . $this->Income->primaryKey => $id));
		$this->set('income', $this->Income->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Income->create();
			if ($this->Income->save($this->request->data)) {
				$this->Session->setFlash(__('The income has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income could not be saved. Please, try again.'));
			}
		}
		$incometypes = $this->Income->Incometype->find('list');
		$attendances = $this->Income->Attendance->find('list');
		$this->set(compact('incometypes', 'attendances'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Income->save($this->request->data)) {
				$this->Session->setFlash(__('The income has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Income.' . $this->Income->primaryKey => $id));
			$this->request->data = $this->Income->find('first', $options);
		}
		$incometypes = $this->Income->Incometype->find('list');
		$attendances = $this->Income->Attendance->find('list');
		$this->set(compact('incometypes', 'attendances'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Income->id = $id;
		if (!$this->Income->exists()) {
			throw new NotFoundException(__('Invalid income'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Income->delete()) {
			$this->Session->setFlash(__('The income has been deleted.'));
		} else {
			$this->Session->setFlash(__('The income could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
