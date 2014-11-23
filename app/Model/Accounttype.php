<?php
App::uses('AppModel', 'Model');
/**
 * Accounttype Model
 *
 * @property Account $Account
 */
class Accounttype extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'accounttype_id',
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
