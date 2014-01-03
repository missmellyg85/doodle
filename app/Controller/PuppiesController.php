<?php
App::uses('AppController', 'Controller');
/**
 * Puppies Controller
 *
 * @property Puppy $Puppy
 */
class PuppiesController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view','past');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Puppy->recursive = 0;
		$this->set('puppies', $this->paginate());
		$this->set('header', $this->Puppy->color);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Puppy->id = $id;
		if (!$this->Puppy->exists()) {
			throw new NotFoundException(__('Invalid puppy'));
		}
		$this->set('puppy', $this->Puppy->read(null, $id));
	}


	public function past() {

	}

	public function add() {
		$this->loadModel('Litter');
		$this->set('litters', $this->Litter->listLitters());
	}

	public function addMany() {
		if ($this->request->is('post')) {
			$puppies = $this->params->data['Puppy'];
			$lid = $this->params->data['litters'];

			$puppies = Hash::insert($puppies, '{n}.litter_id', $lid);
			
			if ($this->Puppy->saveMany($puppies, array('validate'=>'true'))) {
                return $this->redirect(array('controller'=>'litters', 'action' => 'view', 'add_success'=>true, $lid));
            }
		}

		$this->loadModel('Litter');
		$this->set('litters', $this->Litter->listLitters());
	}
}