<?php
App::uses('AppController', 'Controller');
/**
 * Adults Controller
 *
 * @property Adult $Adult
 */
class AdultsController extends AppController {
	public function beforefilter() {
        $this->Auth->allow('index');

	}

	public function index() {
		$moms = $this->Adult->find('all', array(
			'conditions'=>array('is_male'=>0)
			)
		);
		$dads = $this->Adult->find('all', array(
			'conditions'=>array('is_male'=>1)
			)
		);
		
		$this->set('moms', $moms);
		$this->set('dads', $dads);
	}

}
