<?php
App::uses('Femalemember', 'Model');

/**
 * Femalemember Test Case
 *
 */
class FemalememberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.femalemember',
		'app.familymember',
		'app.relationshipstatus',
		'app.baselinedata',
		'app.baseline',
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
		'app.relationshipstatuses',
		'app.employeemetum',
		'app.salarystatuses',
		'app.awareness'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Femalemember = ClassRegistry::init('Femalemember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Femalemember);

		parent::tearDown();
	}

}
