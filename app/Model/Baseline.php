<?php
App::uses('AppModel', 'Model');
/**
 * Baseline Model
 *
 * @property Baselinedata $Baselinedata
 */
class Baseline extends AppModel {

	public $displayField = 'fiscalYear';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Baselinedata' => array(
			'className' => 'Baselinedata',
			'foreignKey' => 'baseline_id',
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
