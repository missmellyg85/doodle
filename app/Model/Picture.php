<?php
App::uses('AppModel', 'Model');
/**
 * Picture Model
 *
 * @property adults_pictures $pictures_adults
 */
class Picture extends AppModel {
	var $actsAs = array('Containable');
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
	public $hasMany = array(
		'adults_pictures' => array(
                'className'=>'adults_pictures',
            )
	);
}
