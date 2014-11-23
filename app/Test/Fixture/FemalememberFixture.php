<?php
/**
 * FemalememberFixture
 *
 */
class FemalememberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'isMarried' => array('type' => 'integer', 'null' => true, 'default' => null),
		'isPregnent' => array('type' => 'integer', 'null' => true, 'default' => null),
		'isLactating' => array('type' => 'integer', 'null' => true, 'default' => null),
		'liveWithHusband' => array('type' => 'integer', 'null' => true, 'default' => null),
		'familymember_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'relationshipstatus_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'baselinedata_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_Femalemembers_familymembers1_idx' => array('column' => 'familymember_id', 'unique' => 0),
			'fk_Femalemembers_relationshipstatus1_idx' => array('column' => 'relationshipstatus_id', 'unique' => 0)
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
			'isMarried' => 1,
			'isPregnent' => 1,
			'isLactating' => 1,
			'liveWithHusband' => 1,
			'familymember_id' => 1,
			'relationshipstatus_id' => 1,
			'baselinedata_id' => 1
		),
	);

}
