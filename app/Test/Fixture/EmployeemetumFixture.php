<?php
/**
 * EmployeemetumFixture
 *
 */
class EmployeemetumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fatherHusband' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'birthRegNo' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DOB' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'village' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'loanAmount' => array('type' => 'integer', 'null' => true, 'default' => null),
		'loanPurpose' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'paidTillDate' => array('type' => 'float', 'null' => true, 'default' => null),
		'savingsTillDate' => array('type' => 'float', 'null' => true, 'default' => null),
		'savingTillDatePerBank' => array('type' => 'float', 'null' => true, 'default' => null),
		'salarystatuses_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'baseline_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_employeemeta_employee1_idx' => array('column' => 'employee_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'fatherHusband' => 'Lorem ipsum dolor sit amet',
			'NID' => 'Lorem ipsum dolor sit amet',
			'employee_id' => 1,
			'birthRegNo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'DOB' => '2014-08-27 00:31:03',
			'village' => 'Lorem ipsum dolor sit amet',
			'loanAmount' => 1,
			'loanPurpose' => 'Lorem ipsum dolor sit amet',
			'paidTillDate' => 1,
			'savingsTillDate' => 1,
			'savingTillDatePerBank' => 1,
			'salarystatuses_id' => 1,
			'baseline_id' => 1
		),
	);

}
