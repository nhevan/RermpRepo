<?php
App::uses('AppModel', 'Model');
/**
 * Femalemember Model
 *
 * @property Familymember $Familymember
 * @property Relationshipstatus $Relationshipstatus
 * @property Baselinedata $Baselinedata
 */
class Femalemember extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'baselinedata_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Familymember' => array(
			'className' => 'Familymember',
			'foreignKey' => 'familymember_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Relationshipstatus' => array(
			'className' => 'Relationshipstatus',
			'foreignKey' => 'relationshipstatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Baselinedatum' => array(
			'className' => 'Baselinedatum',
			'foreignKey' => 'baselinedata_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
