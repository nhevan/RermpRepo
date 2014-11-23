<?php
App::uses('AppModel', 'Model');
/**
 * Union Model
 *
 * @property Upazilla $Upazilla
 * @property Account $Account
 * @property Employee $Employee
 */
class Union extends AppModel {


public $virtualFields = array(
    'vName' => 'Union.name'
);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Upazilla' => array(
			'className' => 'Upazilla',
			'foreignKey' => 'upazilla_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'union_id',
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
