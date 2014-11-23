<?php
App::uses('Attendance', 'Model');

/**
 * Attendance Test Case
 *
 */
class AttendanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendance',
		'app.employee',
		'app.income'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attendance = ClassRegistry::init('Attendance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attendance);

		parent::tearDown();
	}

}
