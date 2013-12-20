<?php
App::uses('AppModel', 'Model');
/**
 * Litter Model
 * @property Puppy $Puppy
 */
class Litter extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'litter_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Puppy' => array(
			'className' => 'Puppy',
			'dependent' => false,
		)
	);

	public $validate = array(
		'mom' => array(
            'notEmpty' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Veuillez choisir un projet',
	            'required' => true,
	            'allowEmpty' => false
	        ),
        ),
        'dad' => array(
            'notEmpty' => array(
	            'rule' => 'notEmpty',
	            'message' => 'Veuillez choisir un projet',
	            'required' => true,
	            'allowEmpty' => false
	        ),
        )
	);
}
