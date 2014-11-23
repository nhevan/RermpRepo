<?php
App::uses('Transaction', 'Model');

/**
 * Transaction Test Case
 *
 */
class TransactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transaction',
		'app.user',
		'app.usertype',
		'app.district',
		'app.division',
		'app.account',
		'app.union',
		'app.upazilla',
		'app.employee',
		'app.attendance',
		'app.income',
		'app.incometype',
		'app.baselinedatum',
		'app.baseline',
		'app.baselinedata',
		'app.relationshipstatus',
		'app.femalemember',
		'app.familymember',
		'app.employeemetum',
		'app.salarystatus',
		'app.accounttype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transaction = ClassRegistry::init('Transaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transaction);

		parent::tearDown();
	}

}
