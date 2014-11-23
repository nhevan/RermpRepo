<?php
App::uses('Incometype', 'Model');

/**
 * Incometype Test Case
 *
 */
class IncometypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.incometype',
		'app.income',
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
		$this->Incometype = ClassRegistry::init('Incometype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Incometype);

		parent::tearDown();
	}

}
