<?php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        if(isset($this->params->named['add_success'])){
            $this->set('flash_message', 'The user has been added successfully!');
        } elseif (isset($this->params->named['delete_success'])){
            $this->set('flash_message', 'The user has been deleted successfully.');
        } elseif (isset($this->params->named['delete_fail'])){
            $this->set('flash_message', 'The user could not be deleted. Please try again.');
        }
    
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                return $this->redirect(array('action' => 'index', 'add_success'=>true));
            }
            $this->set('flash_message', 'The user could not be saved. Please try again.');
        }


    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            return $this->redirect(array('action' => 'index', 'delete_success'=>true));
        }
        return $this->redirect(array('action' => 'index', 'delete_fail'=>true));
    }
    
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            //$this->Session->setFlash('Invalid username or password, try again');
            $this->set('failed_login', true);
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
?>