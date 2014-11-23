<?php
App::uses('AppController', 'Controller');
/**
 * Attendances Controller
 *
 * @property Attendance $Attendance
 * @property PaginatorComponent $Paginator
 */
class AttendancesController extends AppController {

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
		$this->Attendance->recursive = 0;
		$this->set('attendances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
		$this->set('attendance', $this->Attendance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attendance->create();
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Attendance->Employee->find('list');
		$this->set(compact('employees'));
	}
	
/**
 * assign new attendance method
 *
 * @return void
 */
	public function assign($id = null) {
		if ($this->request->is('post')) {
			$this->request->data['Attendance']['employee_id']=$id;
			$this->request->data['Attendance']['datetime'] = date('Y-m-d H:m:s');
			
			$this->loadModel('Salarystatus');
			$totalIncome = $this->request->data['Attendance']['days_present'] * 150;
			$cash = .6 * $totalIncome;
			$saving = .4 * $totalIncome;
			$data = $this->Salarystatus->findByEmployeeId($id);
			$previousCash = $data['Salarystatus']['cash'];
			$previousSaving = $data['Salarystatus']['saving'];
			$this->Salarystatus->id = $data['Salarystatus']['id'];
			$this->Salarystatus->saveField('cash',$previousCash+$cash);
			$this->Salarystatus->saveField('saving',$previousSaving+$saving);
			
			$this->Attendance->create();
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved.'));
				return $this->redirect(array('action' => 'info','controller'=>'employees',$id));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Attendance->Employee->find('list');
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
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
			$this->request->data = $this->Attendance->find('first', $options);
		}
		$employees = $this->Attendance->Employee->find('list');
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
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendance->delete()) {
			$this->Session->setFlash(__('The attendance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attendance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
