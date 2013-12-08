<?php
App::uses('AppModel', 'Model');
/**
 * PuppiesPictures Model
 *
 * @property adult $litter_mom
 * @property adult $litter_dad
 * @property Puppy $Puppy
 */
class PuppiesPictures extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'picture_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'puppy' => array(
			'className' => 'puppy',
			'foreignKey' => 'fk_picture_puppy',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
