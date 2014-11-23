<?php
/**
 * AwarenessFixture
 *
 */
class AwarenessFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'childrenSchooling' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hospitalLocation' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hospitalFee' => array('type' => 'integer', 'null' => true, 'default' => null),
		'oreSalinePreparation' => array('type' => 'integer', 'null' => true, 'default' => null),
		'washingHands' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ideaOfNutritiona;Food' => array('type' => 'integer', 'null' => true, 'default' => null),
		'poultryDiseaseRelatedService' => array('type' => 'integer', 'null' => true, 'default' => null),
		'commonDisease' => array('type' => 'integer', 'null' => true, 'default' => null),
		'LocationLocalNGOoffice' => array('type' => 'integer', 'null' => true, 'default' => null),
		'CanReadWrite' => array('type' => 'integer', 'null' => true, 'default' => null),
		'awareOfSamallBussiness' => array('type' => 'integer', 'null' => true, 'default' => null),
		'KnowledgeOfFeeForMoneyTransfer' => array('type' => 'integer', 'null' => true, 'default' => null),
		'baselinedata_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_awareness_baselinedata1_idx' => array('column' => 'baselinedata_id', 'unique' => 0)
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
			'childrenSchooling' => 1,
			'hospitalLocation' => 1,
			'hospitalFee' => 1,
			'oreSalinePreparation' => 1,
			'washingHands' => 1,
			'ideaOfNutritiona;Food' => 1,
			'poultryDiseaseRelatedService' => 1,
			'commonDisease' => 1,
			'LocationLocalNGOoffice' => 1,
			'CanReadWrite' => 1,
			'awareOfSamallBussiness' => 1,
			'KnowledgeOfFeeForMoneyTransfer' => 1,
			'baselinedata_id' => 1
		),
	);

}
