<?php
App::uses('AppModel', 'Model');
/**
 * Incometype Model
 *
 * @property Income $Income
 */
class Incometype extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Income' => array(
			'className' => 'Income',
			'foreignKey' => 'incometype_id',
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
