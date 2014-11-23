<?php
App::uses('Baselinedatum', 'Model');

/**
 * Baselinedatum Test Case
 *
 */
class BaselinedatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.baselinedatum',
		'app.baseline',
		'app.baselinedata',
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
		'app.employeemetum',
		'app.relationshipstatuses'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Baselinedatum = ClassRegistry::init('Baselinedatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Baselinedatum);

		parent::tearDown();
	}

}
