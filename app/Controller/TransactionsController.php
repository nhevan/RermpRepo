<?php
App::uses('AppController', 'Controller');
/**
 * Transactions Controller
 *
 * @property Transaction $Transaction
 * @property PaginatorComponent $Paginator
 */
class TransactionsController extends AppController {

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
		$this->Transaction->recursive = 0;
		$this->set('transactions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transaction->exists($id)) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		$options = array('conditions' => array('Transaction.' . $this->Transaction->primaryKey => $id));
		$this->set('transaction', $this->Transaction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transaction->create();
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$users = $this->Transaction->User->find('list');
		//$employees = $this->Transaction->Employee->find('list');
		$accounts = $this->Transaction->Account->find('list');
		$this->set(compact('users', 'accounts'));
	}
	
/**
 * transfer Money to Division method
 *
 * @return void
 */
	public function transferMoneyToDivision() {
		if ($this->request->is('post')) {
			$this->request->data['Transaction']['datetime'] = date('Y-m-d H:m:s'); //TIME OF TRANSACTION
			$this->request->data['Transaction']['user_id'] = 1; //CURRENT USER ID
			$this->request->data['Transaction']['account_from'] = 9; //set the account id according to current USER level, like district levl account or watevr
			$tmp = $this->request->data['Transaction']['account_id'];
			$targetAccount = $this->Transaction->Account->findById($tmp);
			$sourceAccount = $this->Transaction->Account->findById($this->request->data['Transaction']['account_from']);
			$availableBalance = $sourceAccount['Account']['balance'];
			if((int)$availableBalance < (int)$this->request->data['Transaction']['amount']){
				$this->Session->setFlash(__('The transaction could not be initiated because of INSUFFICIENT fund.'));
				return $this->redirect(array('action' => 'transferMoneyToDivision'));
			}
			$newBalance = (int)$targetAccount['Account']['balance'] + (int)$this->request->data['Transaction']['amount'];
			$this->request->data['Transaction']['previous_balance'] = $targetAccount['Account']['balance'];
			$this->request->data['Transaction']['current_balance'] = $newBalance;
			
			$this->Transaction->Account->id = $this->request->data['Transaction']['account_from'];
			$this->Transaction->Account->saveField('balance',$availableBalance - (int)$this->request->data['Transaction']['amount']);
			
			$this->Transaction->Account->id = $tmp;
			$this->Transaction->Account->saveField('balance',$newBalance);
			
			$this->Transaction->create(); //creating Income transaction
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
			
			$this->Transaction->create(); //creating Expenditure transaction
			$this->request->data['Transaction']['account_from'] = $this->request->data['Transaction']['account_id'];
			$this->request->data['Transaction']['account_id'] = 9;
			$this->request->data['Transaction']['type'] = 2;
			$this->request->data['Transaction']['previous_balance'] = $availableBalance;
			$this->request->data['Transaction']['current_balance'] = $availableBalance - (int)$this->request->data['Transaction']['amount'];

			
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The expenditure transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$users = $this->Transaction->User->find('list');
		//$employees = $this->Transaction->Employee->find('list');
		$this->Transaction->Account->recursive = -1;
		$accounts = $this->Transaction->Account->findAllByAccounttypeId(2); // looking for division type account
		
		$this->loadModel('Division');
		$this->Division->recursive = -1;
		$divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('users', 'accounts','divisions'));
	}
	
/**
 * transfer Money to District method
 *
 * @return void
 */
	public function transferMoneyToDistrict() {
		if ($this->request->is('post')) {
			$this->request->data['Transaction']['datetime'] = date('Y-m-d H:m:s'); //TIME OF TRANSACTION
			$this->request->data['Transaction']['user_id'] = 1; //CURRENT USER ID
			$this->request->data['Transaction']['account_from'] = 9; //set the account id according to current USER level, like district levl account or watevr
			$tmp = $this->request->data['Transaction']['account_id'];
			$targetAccount = $this->Transaction->Account->findById($tmp);
			$sourceAccount = $this->Transaction->Account->findById($this->request->data['Transaction']['account_from']);
			$availableBalance = $sourceAccount['Account']['balance'];
			if((int)$availableBalance < (int)$this->request->data['Transaction']['amount']){
				$this->Session->setFlash(__('The transaction could not be initiated because of INSUFFICIENT fund.'));
				return $this->redirect(array('action' => 'transferMoneyToDivision'));
			}
			$newBalance = (int)$targetAccount['Account']['balance'] + (int)$this->request->data['Transaction']['amount'];
			$this->request->data['Transaction']['previous_balance'] = $targetAccount['Account']['balance'];
			$this->request->data['Transaction']['current_balance'] = $newBalance;
			
			$this->Transaction->Account->id = $this->request->data['Transaction']['account_from'];
			$this->Transaction->Account->saveField('balance',$availableBalance - (int)$this->request->data['Transaction']['amount']);
			
			$this->Transaction->Account->id = $tmp;
			$this->Transaction->Account->saveField('balance',$newBalance);
			
			$this->Transaction->create(); //creating Income transaction
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
			
			$this->Transaction->create(); //creating Expenditure transaction
			$this->request->data['Transaction']['account_from'] = $this->request->data['Transaction']['account_id'];
			$this->request->data['Transaction']['account_id'] = 9;
			$this->request->data['Transaction']['type'] = 2;
			$this->request->data['Transaction']['previous_balance'] = $availableBalance;
			$this->request->data['Transaction']['current_balance'] = $availableBalance - (int)$this->request->data['Transaction']['amount'];

			
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The expenditure transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$users = $this->Transaction->User->find('list');
		
		
		$this->loadModel('Division');
		$this->Division->recursive = -1;
		$divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('users','divisions'));
	}
	
/**
 * transfer Money to Upazilla method
 *
 * @return void
 */
	public function transferMoneyToUpazilla() {
		if ($this->request->is('post')) {
			$this->request->data['Transaction']['datetime'] = date('Y-m-d H:m:s'); //TIME OF TRANSACTION
			$this->request->data['Transaction']['user_id'] = 1; //CURRENT USER ID
			$this->request->data['Transaction']['account_from'] = 9; //set the account id according to current USER level, like district levl account or watevr
			$tmp = $this->request->data['Transaction']['account_id'];
			$targetAccount = $this->Transaction->Account->findById($tmp);
			$sourceAccount = $this->Transaction->Account->findById($this->request->data['Transaction']['account_from']);
			$availableBalance = $sourceAccount['Account']['balance'];
			if((int)$availableBalance < (int)$this->request->data['Transaction']['amount']){
				$this->Session->setFlash(__('The transaction could not be initiated because of INSUFFICIENT fund.'));
				return $this->redirect(array('action' => 'transferMoneyToDivision'));
			}
			$newBalance = (int)$targetAccount['Account']['balance'] + (int)$this->request->data['Transaction']['amount'];
			$this->request->data['Transaction']['previous_balance'] = $targetAccount['Account']['balance'];
			$this->request->data['Transaction']['current_balance'] = $newBalance;
			
			$this->Transaction->Account->id = $this->request->data['Transaction']['account_from'];
			$this->Transaction->Account->saveField('balance',$availableBalance - (int)$this->request->data['Transaction']['amount']);
			
			$this->Transaction->Account->id = $tmp;
			$this->Transaction->Account->saveField('balance',$newBalance);
			
			$this->Transaction->create(); //creating Income transaction
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
			
			$this->Transaction->create(); //creating Expenditure transaction
			$this->request->data['Transaction']['account_from'] = $this->request->data['Transaction']['account_id'];
			$this->request->data['Transaction']['account_id'] = 9;
			$this->request->data['Transaction']['type'] = 2;
			$this->request->data['Transaction']['previous_balance'] = $availableBalance;
			$this->request->data['Transaction']['current_balance'] = $availableBalance - (int)$this->request->data['Transaction']['amount'];

			
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The expenditure transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$users = $this->Transaction->User->find('list');
		
		
		$this->loadModel('Division');
		$this->Division->recursive = -1;
		$divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('users','divisions'));
	}
	
	
/**
 * transfer Money to Union method
 *
 * @return void
 */
	public function transferMoneyToUnion() {
		if ($this->request->is('post')) {
			$this->request->data['Transaction']['datetime'] = date('Y-m-d H:m:s'); //TIME OF TRANSACTION
			$this->request->data['Transaction']['user_id'] = 1; //CURRENT USER ID
			$this->request->data['Transaction']['account_from'] = 9; //set the account id according to current USER level, like district levl account or watevr
			$tmp = $this->request->data['Transaction']['account_id'];
			$targetAccount = $this->Transaction->Account->findById($tmp);
			$sourceAccount = $this->Transaction->Account->findById($this->request->data['Transaction']['account_from']);
			$availableBalance = $sourceAccount['Account']['balance'];
			if((int)$availableBalance < (int)$this->request->data['Transaction']['amount']){
				$this->Session->setFlash(__('The transaction could not be initiated because of INSUFFICIENT fund.'));
				return $this->redirect(array('action' => 'transferMoneyToDivision'));
			}
			$newBalance = (int)$targetAccount['Account']['balance'] + (int)$this->request->data['Transaction']['amount'];
			$this->request->data['Transaction']['previous_balance'] = $targetAccount['Account']['balance'];
			$this->request->data['Transaction']['current_balance'] = $newBalance;
			
			$this->Transaction->Account->id = $this->request->data['Transaction']['account_from'];
			$this->Transaction->Account->saveField('balance',$availableBalance - (int)$this->request->data['Transaction']['amount']);
			
			$this->Transaction->Account->id = $tmp;
			$this->Transaction->Account->saveField('balance',$newBalance);
			
			$this->Transaction->create(); //creating Income transaction
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
			
			$this->Transaction->create(); //creating Expenditure transaction
			$this->request->data['Transaction']['account_from'] = $this->request->data['Transaction']['account_id'];
			$this->request->data['Transaction']['account_id'] = 9;
			$this->request->data['Transaction']['type'] = 2;
			$this->request->data['Transaction']['previous_balance'] = $availableBalance;
			$this->request->data['Transaction']['current_balance'] = $availableBalance - (int)$this->request->data['Transaction']['amount'];

			
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The expenditure transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$users = $this->Transaction->User->find('list');
		
		
		$this->loadModel('Division');
		$this->Division->recursive = -1;
		$divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('users','divisions'));
	}
	
/**
 * transfer Money to Employee method
 *
 * @return void
 */
	public function transferMoneyToEmployee() {
		if ($this->request->is('post')) {
			$this->request->data['Transaction']['datetime'] = date('Y-m-d H:m:s'); //TIME OF TRANSACTION
			$this->request->data['Transaction']['user_id'] = 1; //CURRENT USER ID
			$this->request->data['Transaction']['account_from'] = 9; //set the account id according to current USER level, like district levl account or watevr
			$tmp = $this->request->data['Transaction']['account_id'];
			$targetAccount = $this->Transaction->Account->findById($tmp);
			$sourceAccount = $this->Transaction->Account->findById($this->request->data['Transaction']['account_from']);
			$availableBalance = $sourceAccount['Account']['balance'];
			if((int)$availableBalance < (int)$this->request->data['Transaction']['amount']){
				$this->Session->setFlash(__('The transaction could not be initiated because of INSUFFICIENT fund.'));
				return $this->redirect(array('action' => 'transferMoneyToDivision'));
			}
			$newBalance = (int)$targetAccount['Account']['balance'] + (int)$this->request->data['Transaction']['amount'];
			$this->request->data['Transaction']['previous_balance'] = $targetAccount['Account']['balance'];
			$this->request->data['Transaction']['current_balance'] = $newBalance;
			
			$this->Transaction->Account->id = $this->request->data['Transaction']['account_from'];
			$this->Transaction->Account->saveField('balance',$availableBalance - (int)$this->request->data['Transaction']['amount']);
			
			$this->Transaction->Account->id = $tmp;
			$this->Transaction->Account->saveField('balance',$newBalance);
			
			$this->Transaction->create(); //creating Income transaction
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
			
			$this->Transaction->create(); //creating Expenditure transaction
			$this->request->data['Transaction']['account_from'] = $this->request->data['Transaction']['account_id'];
			$this->request->data['Transaction']['account_id'] = 9;
			$this->request->data['Transaction']['type'] = 2;
			$this->request->data['Transaction']['previous_balance'] = $availableBalance;
			$this->request->data['Transaction']['current_balance'] = $availableBalance - (int)$this->request->data['Transaction']['amount'];

			
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The expenditure transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$users = $this->Transaction->User->find('list');
		
		
		$this->loadModel('Division');
		$this->Division->recursive = -1;
		$divisions = $this->Division->find('all',array('fields'=>array('id','name')));
		
		$this->set(compact('users','divisions'));
	}
	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transaction->exists($id)) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transaction->save($this->request->data)) {
				$this->Session->setFlash(__('The transaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transaction.' . $this->Transaction->primaryKey => $id));
			$this->request->data = $this->Transaction->find('first', $options);
		}
		$users = $this->Transaction->User->find('list');
		//$employees = $this->Transaction->Employee->find('list');
		$accounts = $this->Transaction->Account->find('list');
		$this->set(compact('users','accounts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Transaction->delete()) {
			$this->Session->setFlash(__('The transaction has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transaction could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
