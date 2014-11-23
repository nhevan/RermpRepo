<?php
App::uses('AppModel', 'Model');
/**
 * Awareness Model
 *
 * @property Baselinedata $Baselinedata
 */
class Awareness extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Baselinedatum' => array(
			'className' => 'Baselinedatum',
			'foreignKey' => 'baselinedata_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
