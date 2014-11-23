<?php
App::uses('Relationshipstatus', 'Model');

/**
 * Relationshipstatus Test Case
 *
 */
class RelationshipstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.relationshipstatus',
		'app.femalemember',
		'app.familymember',
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
		'app.incometype',
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
		$this->Relationshipstatus = ClassRegistry::init('Relationshipstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Relationshipstatus);

		parent::tearDown();
	}

}
