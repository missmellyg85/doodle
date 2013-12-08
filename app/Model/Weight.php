<?php
App::uses('AppModel', 'Model');
/**
 * Weight Model
 *
 * @property Puppy $Puppy
 */
class Weight extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'weight_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Puppy' => array(
			'className' => 'Puppy',
			'foreignKey' => 'puppy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
