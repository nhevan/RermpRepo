<?php
App::uses('AppModel', 'Model');
/**
 * Employeemetum Model
 *
 * @property Employee $Employee
 * @property Baseline $Baseline
 */
class Employeemetum extends AppModel {

public $virtualFields = array(
    'vFName' => 'Employeemetum.name'
);

/**
 * Validation rules
 *
 * @var array
 */
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
