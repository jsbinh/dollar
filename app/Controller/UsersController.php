<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function index(){

	}

	public function register() {

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

	}

	public function profile(){
		
	}

	public function tools(){

	}

	public function history(){
		
	}

	public function withdraw() {

	}

	public function referrals(){
		
	}

	public function logout(){
		$this->Session->delete('user');
		$this->redirect(array('controller'=>'Home', 'action'=>'index'));
	}
}
