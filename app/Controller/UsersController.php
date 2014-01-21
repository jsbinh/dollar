<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function index(){

	}

	public function register() {
		if($this->request->is('POST') || $this->request->is('PUT')){			
			if($this->User->customValidate()){
				if($this->User->save($this->request->data)){
					$this->Session->setFlash('Register successful!');
					$this->redirect(array('register'));
				}
			}
		}
	}

	public function login() {
		if($this->request->is('post') || $this->request->is('put')){
			$data = $this->request->data;

			$users = $this->User->find('first', array(
				'conditions' => array(
					'User.username' => $data['User']['username'],
					'User.password' => $data['User']['password']
				),
			));
			if(!empty($users)){
				$this->Session->write('user', $users);
				$this->redirect(array('controller'=>'Users', 'action'=>'member'));
			}else{
				$this->redirect(array('controller'=>'Home', 'action'=>'index'));
			}
		}
	}

	public function forgotPassword() {

	}

	public function member(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}

	}

	public function profile(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		$user = $this->Session->read('user');
		

		$this->set('user', $user);
	}

	public function tools(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
	}

	public function history(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
	}

	public function withdraw() {
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
	}

	public function referrals(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
	}

	public function logout(){
		$this->Session->delete('user');
		$this->redirect(array('controller'=>'Home', 'action'=>'index'));
	}
}
