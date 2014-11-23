<?php
App::uses('Familymember', 'Model');

/**
 * Familymember Test Case
 *
 */
class FamilymemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.familymember',
		'app.femalemember'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Familymember = ClassRegistry::init('Familymember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Familymember);

		parent::tearDown();
	}

}
