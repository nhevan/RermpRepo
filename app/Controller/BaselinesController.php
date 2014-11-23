<?php
App::uses('AppController', 'Controller');
/**
 * Baselines Controller
 *
 * @property Baseline $Baseline
 * @property PaginatorComponent $Paginator
 */
class BaselinesController extends AppController {

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
		$this->Baseline->recursive = 0;
		$this->set('baselines', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Baseline->exists($id)) {
			throw new NotFoundException(__('Invalid baseline'));
		}
		$options = array('conditions' => array('Baseline.' . $this->Baseline->primaryKey => $id));
		$this->set('baseline', $this->Baseline->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Baseline->create();
			if ($this->Baseline->save($this->request->data)) {
				$this->Session->setFlash(__('The baseline has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baseline could not be saved. Please, try again.'));
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
		if (!$this->Baseline->exists($id)) {
			throw new NotFoundException(__('Invalid baseline'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Baseline->save($this->request->data)) {
				$this->Session->setFlash(__('The baseline has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baseline could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Baseline.' . $this->Baseline->primaryKey => $id));
			$this->request->data = $this->Baseline->find('first', $options);
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
		$this->Baseline->id = $id;
		if (!$this->Baseline->exists()) {
			throw new NotFoundException(__('Invalid baseline'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Baseline->delete()) {
			$this->Session->setFlash(__('The baseline has been deleted.'));
		} else {
			$this->Session->setFlash(__('The baseline could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
