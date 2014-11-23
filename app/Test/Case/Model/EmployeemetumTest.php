<?php
App::uses('Employeemetum', 'Model');

/**
 * Employeemetum Test Case
 *
 */
class EmployeemetumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employeemetum',
		'app.employee',
		'app.salarystatuses',
		'app.baseline',
		'app.baselinedata',
		'app.relationshipstatuses',
		'app.awareness'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Employeemetum = ClassRegistry::init('Employeemetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employeemetum);

		parent::tearDown();
	}

}
