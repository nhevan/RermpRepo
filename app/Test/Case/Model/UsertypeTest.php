<?php
App::uses('Usertype', 'Model');

/**
 * Usertype Test Case
 *
 */
class UsertypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usertype',
		'app.user',
		'app.district',
		'app.transaction',
		'app.upazilla'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usertype = ClassRegistry::init('Usertype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usertype);

		parent::tearDown();
	}

}
