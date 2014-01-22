<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

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
		if($this->request->is('post') || $this->request->is('put')){
			$data = $this->request->data;
			$user = $this->User->find('first', array(
				'conditions'=> array(
					'User.username' => trim($data['User']['username']),
					'User.email' => trim($data['User']['email'])
				)
			));

			if(empty($user)){
				$this->Session->setFlash('Username or email not avalid!');
			}else{
				$password = rand(1000000000,9999999999);
				if($this->User->updateAll(array('User.password'=>$password), array('User.id'=>$user['User']['id']))){
					$this->_sendEmai($user, $password);
					$this->Session->setFlash('Newpassword sent to your email!');
				}
			}
		}
	}

	public function _sendEmai($data, $password){
		$send_to_email = Configure::read('send_to_email');		
		$Email = new CakeEmail('default');
      	$subject = 'PROFITDOLLAR200.com - Your New Password';
      	$content = 
      		'Hello '.$data['User']['username'].'!<br><br>'.
      		'Your new password is: '. $password. '<br><br>'.
      		'Support PDS';
      		
        $Email->emailFormat('html')
                ->to($data['User']['email'])               
                ->from($send_to_email)
                ->subject($subject)
                ->send(nl2br($content));
        $Email->reset();
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
		
		if($this->request->is('POST') || $this->request->is('PUT')){
			$data = $this->request->data;
			if($data['User']['solidtrustpay'] == 'none'){
				$data['User']['solidtrustpay'] = 0;
			}
			if($data['User']['egopay'] == 'none'){
				$data['User']['egopay'] = 0;
			}
			if($data['User']['perfectmoney'] == 'none'){
				$data['User']['perfectmoney'] = 0;
			}
			if($data['User']['neteller'] == 'none'){
				$data['User']['neteller'] = 0;
			}
			if(!empty($data['User']['newpassword'])){
				$data['User']['password'] = $data['User']['newpassword'];
			}
			if($this->User->save($data)){
				$this->Session->setFlash('Update successful', 'success');
				$this->redirect(array('action'=>'profile'));
			}else{
				$this->Session->setFlash('Update error', 'error');
			}
		}else{
			$this->request->data = $this->Session->read('user');
		}
	}

	public function registerPartner(){
		if(!$this->Session->read('user'))
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
	
		if($this->request->is('POST') || $this->request->is('PUT')){
			$data = $this->request->data;			
			if($this->User->save($data)){
				$this->Session->setFlash('Update successful', 'success');
				$this->redirect(array('action'=>'profile'));
			}else{
				$this->Session->setFlash('Update error', 'error');
			}
		}else{
			$this->request->data = $this->Session->read('user');
		}
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
