<?php
App::uses('Employee', 'Model');

/**
 * Employee Test Case
 *
 */
class EmployeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.attendance',
		'app.income',
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
		$this->Employee = ClassRegistry::init('Employee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employee);

		parent::tearDown();
	}

}
