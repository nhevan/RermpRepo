<?php
/**
 * IncomeFixture
 *
 */
class IncomeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => null),
		'incometype_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'attendance_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_employeeIncome_employeeIncomeType1_idx' => array('column' => 'incometype_id', 'unique' => 0),
			'fk_employeeIncome_attendance1_idx' => array('column' => 'attendance_id', 'unique' => 0)
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
			'amount' => 1,
			'incometype_id' => 1,
			'attendance_id' => 1
		),
	);

}
