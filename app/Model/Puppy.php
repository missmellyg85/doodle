<?php
App::uses('AppModel', 'Model');
/**
 * Puppy Model
 *
 * @property Litter $Litter
 * @property Weight $Weight
 */
class Puppy extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'puppy_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Litter' => array(
			'className' => 'Litter',
			'foreignKey' => 'litter_id',
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
		'Weight' => array(
			'className' => 'Weight',
			'foreignKey' => 'puppy_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PuppiesPictures' => array(
			'className' => 'PuppiesPictures',
			'foreignKey' => 'puppy_id',
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
