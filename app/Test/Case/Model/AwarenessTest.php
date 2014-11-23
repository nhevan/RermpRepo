<?php
App::uses('Awareness', 'Model');

/**
 * Awareness Test Case
 *
 */
class AwarenessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.awareness',
		'app.baselinedata'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Awareness = ClassRegistry::init('Awareness');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Awareness);

		parent::tearDown();
	}

}
