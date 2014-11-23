<?php
/**
 * FamilymemberFixture
 *
 */
class FamilymemberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sex' => array('type' => 'integer', 'null' => true, 'default' => null),
		'age' => array('type' => 'integer', 'null' => true, 'default' => null),
		'occupation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'education' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'monthlyIncome' => array('type' => 'integer', 'null' => true, 'default' => null),
		'height' => array('type' => 'integer', 'null' => true, 'default' => null),
		'weight' => array('type' => 'integer', 'null' => true, 'default' => null),
		'isUnderWeight' => array('type' => 'integer', 'null' => true, 'default' => null),
		'armMeasure' => array('type' => 'integer', 'null' => true, 'default' => null),
		'isMalnourished' => array('type' => 'integer', 'null' => true, 'default' => null),
		'isStunded' => array('type' => 'integer', 'null' => true, 'default' => null),
		'anyDisease' => array('type' => 'integer', 'null' => true, 'default' => null),
		'doctorVisited' => array('type' => 'integer', 'null' => true, 'default' => null),
		'remarks' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'relation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'sex' => 1,
			'age' => 1,
			'occupation' => 'Lorem ipsum dolor sit amet',
			'education' => 'Lorem ipsum dolor sit amet',
			'monthlyIncome' => 1,
			'height' => 1,
			'weight' => 1,
			'isUnderWeight' => 1,
			'armMeasure' => 1,
			'isMalnourished' => 1,
			'isStunded' => 1,
			'anyDisease' => 1,
			'doctorVisited' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'relation' => 'Lorem ipsum dolor sit amet'
		),
	);

}
