<?php
App::uses('AppModel', 'Model');
/**
 * Income Model
 *
 * @property Incometype $Incometype
 * @property Attendance $Attendance
 */
class Income extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Incometype' => array(
			'className' => 'Incometype',
			'foreignKey' => 'incometype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Attendance' => array(
			'className' => 'Attendance',
			'foreignKey' => 'attendance_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
