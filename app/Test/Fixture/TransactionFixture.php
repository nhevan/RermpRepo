<?php
/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

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
		'reference' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'integer', 'null' => true, 'default' => '1', 'comment' => '1 represents Income
2 represents Expenditure'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'account_to' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'account_from' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_transactions_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_transactions_accounts1_idx' => array('column' => 'account_to', 'unique' => 0),
			'fk_transactions_employee1_idx' => array('column' => 'employee_id', 'unique' => 0),
			'fk_transactions_accountfrom_idx' => array('column' => 'account_from', 'unique' => 0)
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
			'datetime' => '2014-08-27 06:12:14',
			'year' => 1,
			'month' => 1,
			'reference' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'type' => 1,
			'user_id' => 1,
			'account_to' => 1,
			'employee_id' => 1,
			'account_from' => 1
		),
	);

}
