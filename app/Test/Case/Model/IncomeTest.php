<?php
App::uses('Income', 'Model');

/**
 * Income Test Case
 *
 */
class IncomeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.income',
		'app.incometype',
		'app.attendance',
		'app.employee',
		'app.union',
		'app.upazilla',
		'app.user',
		'app.usertype',
		'app.district',
		'app.division',
		'app.account',
		'app.accounttype',
		'app.transaction',
		'app.baselinedatum',
		'app.baseline',
		'app.baselinedata',
		'app.relationshipstatuses',
		'app.awareness',
		'app.employeemetum',
		'app.salarystatuses'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Income = ClassRegistry::init('Income');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Income);

		parent::tearDown();
	}

}
