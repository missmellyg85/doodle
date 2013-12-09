<?php
App::uses('AppController', 'Controller');
/**
 * Litters Controller
 *
 * @property Litter $Litter
 */
class LittersController extends AppController {
	public function beforefilter() {
		parent::beforefilter();
		$this->set('header', 'Available Litters');
        $this->Auth->allow('available');
	}

	public function available() {

		$litters = $this->Litter->find('all', array(
			'conditions'=>array('is_active'=>1),
			'contain'=>array('Puppy', 'Mom'),
			'order'=>array('litter_id desc'), 
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
        	'fields' => array('Mom.*', 'Dad.*')
		));


		$puppy_ids = array();
		for($i = 0; $i < sizeof($litters); $i++) {
			foreach($litters[$i]['Puppy'] as $puppy){
				if($puppy['is_male']){
					$litters[$i]['Males'][] = $puppy;
				} else {
					$litters[$i]['Females'][] = $puppy;
				}
			}
		}


		//debug($litters);

		$this->loadModel('Weight');
		$this->loadModel('PuppiesPictures');

		$pictures = array();
		
		for($i = 0; $i < sizeof($litters); $i++) {
			for($j = 0; $j < sizeof($litters[$i]['Puppy']); $j++){
				$weights = $this->Weight->find('all', array(
					'conditions'=>array('puppy_id'=>$litters[$i]['Puppy'][$j]['puppy_id']),
					'order'=>array('dateadded DESC'),
					'recursive'=>-1));
				$litters[$i]['Puppy'][$j]['Weights'] = $weights;

				$pics = $this->PuppiesPictures->find('all', array(
					'conditions'=>array('puppy_id'=>$litters[$i]['Puppy'][$j]['puppy_id'], 'is_active'=>1),
					'order'=>array('is_main desc','filename'),
					'recursive'=>-1));
				$pictures[$litters[$i]['Puppy'][$j]['puppy_id']] = $pics;

			}
		}

		$this->set('litters', $litters);
		$this->set('pictures', $pictures);
	}

}
