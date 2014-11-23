<?php
App::uses('AppModel', 'Model');
/**
 * Division Model
 *
 * @property District $District
 */
class Division extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'division_id',
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
