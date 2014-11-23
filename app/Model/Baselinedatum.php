<?php
App::uses('AppModel', 'Model');
/**
 * Baselinedatum Model
 *
 * @property Baseline $Baseline
 * @property Employee $Employee
 * @property Relationshipstatuses $Relationshipstatuses
 */
class Baselinedatum extends AppModel {

/**
 * Display field
 *
 * @var string
 */

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Baseline' => array(
			'className' => 'Baseline',
			'foreignKey' => 'baseline_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Relationshipstatus' => array(
			'className' => 'Relationshipstatus',
			'foreignKey' => 'relationshipstatuses_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
