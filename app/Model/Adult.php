<?php
App::uses('AppModel', 'Model');
/**
 * Adult Model
 *
 * @property litter $dad_litter
 * @property litter $mom_litter
 */
class Adult extends AppModel {
	var $actsAs = array('Containable');
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'adult_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasOne = array(
		'Litter' => array(
			'className' => 'litters',
			'foreignKey' => 'mom'),
		'Litter' => array(
			'className' => 'litters',
			'foreignKey' => 'dad')
		);

	public $hasMany = array(
		'adults_pictures' => array(
			'className' => 'adults_pictures',
        )
    );

    public function listMoms() {
    	return $this->find(
    		'list', 
    		array(
    			'conditions'=>array(
    				'!is_male'
    			)
    		)
    	);
    }

    public function listDads() {
    	return $this->find(
    		'list', 
    		array(
    			'conditions'=>array(
    				'is_male'
    			)
    		)
    	);
    }
}
