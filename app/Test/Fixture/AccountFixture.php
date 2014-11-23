<?php
/**
 * AccountFixture
 *
 */
class AccountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'accountNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bankName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'balance' => array('type' => 'integer', 'null' => true, 'default' => null),
		'district_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'union_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'accounttype_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_accounts_districts1_idx' => array('column' => 'district_id', 'unique' => 0),
			'fk_accounts_unions1_idx' => array('column' => 'union_id', 'unique' => 0),
			'fk_accounts_accountType1_idx' => array('column' => 'accounttype_id', 'unique' => 0)
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
			'accountNo' => 'Lorem ipsum dolor sit amet',
			'bankName' => 'Lorem ipsum dolor sit amet',
			'balance' => 1,
			'district_id' => 1,
			'union_id' => 1,
			'accounttype_id' => 1,
			'employee_id' => 1
		),
	);

}
