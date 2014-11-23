<?php
App::uses('Upazilla', 'Model');

/**
 * Upazilla Test Case
 *
 */
class UpazillaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.upazilla',
		'app.user',
		'app.usertype',
		'app.district',
		'app.division',
		'app.account',
		'app.transaction',
		'app.union'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Upazilla = ClassRegistry::init('Upazilla');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Upazilla);

		parent::tearDown();
	}

}
