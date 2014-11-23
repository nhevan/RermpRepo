<?php
/**
 * AttendanceFixture
 *
 */
class AttendanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'datetime' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'year' => array('type' => 'integer', 'null' => true, 'default' => null),
		'month' => array('type' => 'integer', 'null' => true, 'default' => null),
		'days_present' => array('type' => 'integer', 'null' => true, 'default' => null),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_attendance_employee1_idx' => array('column' => 'employee_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'datetime' => '2014-08-27 00:02:46',
			'year' => 1,
			'month' => 1,
			'days_present' => 1,
			'employee_id' => 1
		),
	);

}
