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

	public function listLitters() {
		$litters = $this->find('all', array(
			'contain'=>array('Mom', 'Dad'),
			'order'=>array('litter_id DESC'),
			'joins' => array(
        		array(
		            'table' => 'adults',
		            'alias' => 'Mom',
		            'type' => 'INNER',
		            'conditions' => array(
		                'Mom.adult_id = Litter.mom'
		            )
				),
				array(
		            'table' => 'adults',
		            'alias' => 'Dad',
		            'type' => 'INNER',
		            'conditions' => array(
		                'Dad.adult_id = Litter.dad'
		            )
				)
        	),	
        	'fields' => array('Mom.*', 'Dad.*', 'Litter.*')
		));

    	$list = array();
    	foreach ($litters as $l) {
    		$list[$l['Litter']['litter_id']] = $l['Mom']['name'].' x '.$l['Dad']['name'].' ('.date('n/j/Y g:i a', strtotime($l['Litter']['dob'])).')';
    	}
    	return $list;
	}
}
