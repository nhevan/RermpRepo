<?php
App::uses('Baseline', 'Model');

/**
 * Baseline Test Case
 *
 */
class BaselineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.baseline',
		'app.baselinedata',
		'app.employee',
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
		$this->Baseline = ClassRegistry::init('Baseline');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Baseline);

		parent::tearDown();
	}

}
