<?php
App::uses('Salarystatus', 'Model');

/**
 * Salarystatus Test Case
 *
 */
class SalarystatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salarystatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Salarystatus = ClassRegistry::init('Salarystatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salarystatus);

		parent::tearDown();
	}

}
