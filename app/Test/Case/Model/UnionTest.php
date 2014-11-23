<?php
App::uses('Union', 'Model');

/**
 * Union Test Case
 *
 */
class UnionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.union',
		'app.upazilla',
		'app.user',
		'app.usertype',
		'app.district',
		'app.division',
		'app.account',
		'app.transaction',
		'app.employee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Union = ClassRegistry::init('Union');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Union);

		parent::tearDown();
	}

}
