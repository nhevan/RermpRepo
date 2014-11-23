<?php
App::uses('AppModel', 'Model');
/**
 * Relationshipstatus Model
 *
 * @property Femalemember $Femalemember
 */
class Relationshipstatus extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Femalemember' => array(
			'className' => 'Femalemember',
			'foreignKey' => 'relationshipstatus_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Baselinedatum' => array(
			'className' => 'Baselinedatum',
			'foreignKey' => 'relationshipstatus_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
