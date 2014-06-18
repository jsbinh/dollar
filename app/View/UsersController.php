<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {

    public $uses = array('User');

	public function index(){
        $this->redirect(array('action' => 'member'));
	}

	public function admin_index(){
		$this->layout = 'backend';

        $this->paginate = array(
            'conditions' => array(
            	'delete_flg' => 0,
            ),
            'limit' => 25,
            'order' => array('User.id' => 'asc')
        );
        $this->set('users', $this->paginate());

	}

    public function admin_edit($id) {
        $this->layout = 'backend';

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;
            $this->User->set($this->request->data);

            //if ($this->User->customValidate()) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('Update user successful'), 'success');
                    $this->redirect(array('controller'=>'Users', 'action'=>'index'));
                } else {
                    echo 2;exit;
                    $this->Session->setFlash(__('Update user error'), 'error');
                }
            //}
        }

        $this->request->data = $this->User->findById($id);


        $this->render('detail');
    }

    public function admin_delete($id) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            return $this->redirect(array('action' => 'index'));
        }

        if ($this->User->updateAll(array('User.delete_flg' => 1))) {
            $this->Session->setFlash('Delete successful', 'success');
            $this->redirect(array('controller'=>'Users', 'action'=>'index'));
        }
        $this->Session->setFlash('Delete error!', 'error');
        $this->redirect(array('controller'=>'Users', 'action'=>'index'));
    }

	public function admin_login(){
		$this->layout = false;
        if ($this->request->is('post') || $this->request->is('put')) {
            $data = $this->request->data;
            pr($data);
            $user = $this->User->find('first', array(
                'conditions' => array(
                    'User.username' => trim($data['User']['username']),
                    'User.password' => trim($data['User']['password']),
                )
            ));
            if(empty($user)){

            }else{
                $this->Session->write('user', $user);
                $this->redirect(array('controller' => 'Index', 'action' => 'index'));
            }
        }
	}

	public function admin_logout(){
        $this->Session->destroy();
        $this->redirect('login');
	}

	public function admin_changepassword() {
		$this->layout = 'backend';
	}


	public function register() {
		if($this->request->is('POST') || $this->request->is('PUT')){
			if($this->User->customValidate()){
				$this->User->create();
				if($this->User->save($this->request->data)){
					$this->_sendEmailRegister($this->request->data);
					$this->Session->setFlash('Register successful!', 'success');
					$this->redirect(array('register'));
				}
			}
		}
	}

	public function _sendEmailRegister($data){
		$send_to_email = Configure::read('send_to_email');
		$Email = new CakeEmail('default');
      	$subject = 'Forexpam.com - Your Account';
      	$content =
      		'Hello '. $data['User']['username'] .',

			Thank you for registration on our site.

			Your login information:

			Login: '.$data['User']['username'].'
			Password: '.$data['User']['password'].'

			You can login here: <a href="http://forexpam.com">http://forexpam.com

			Contact us immediately if you did not authorize this registration.

			Thank you.';

        $Email->emailFormat('html')
                ->to($data['User']['email'])
                ->from($send_to_email)
                ->subject($subject)
                ->send(nl2br($content));
        $Email->reset();
	}

	public function login() {
		if($this->request->is('post') || $this->request->is('put')){
			$data = $this->request->data;

			$users = $this->User->find('first', array(
				'conditions' => array(
					'User.username' => trim($data['User']['username']),
					'User.password' => trim($data['User']['password'])
				),
			));
			if(!empty($users)){
				$this->Session->write('user', $users);
				$this->redirect(array('controller'=>'Members', 'action'=>'index'));
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
					$this->_sendEmail($user, $password);
					$this->Session->setFlash('Newpassword sent to your email!');
				}
			}
		}
	}

	public function _sendEmail($data, $password){
		$send_to_email = Configure::read('send_to_email');
		$Email = new CakeEmail('default');
      	$subject = 'Forexpam.com - Your New Password';
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
            if($data['User']['okpay'] == 'none'){
                $data['User']['okpay'] = 0;
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
		}
		$user = $this->Session->read('user');
		$this->request->data = $this->User->findById($user['User']['id']);
	}

	public function registerPartner(){
		if(!$this->Session->read('user'))
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));

		if($this->request->is('PUT') || $this->request->is('post')){
			$data = $this->request->data;
			if($this->User->save($data)){
				$this->Session->setFlash('Update successful', 'success');
				$this->redirect(array('action'=>'registerPartner'));
			}else{
				$this->Session->setFlash('Update error', 'error');
			}
		}
		$user = $this->Session->read('user');
		$this->request->data = $this->User->findById($user['User']['id']);
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

	public function referrals(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
	}

	public function logout(){
		$this->Session->delete('user');
		$this->redirect(array('controller'=>'Home', 'action'=>'index'));
	}

	public function saveNeteller(){
		if($this->request->is('post') || $this->request->is('put')){
			App::import('Model', 'Neteller');
			$this->Neteller = new Neteller();

			$user = $this->Session->read('user');
			$result = array(
                'user_id' => $user['User']['id'],
				'account_number' => $this->request->data['User']['account_number'],
				'transaction_id' => $this->request->data['User']['transaction_id'],
				'amount' => $this->request->data['User']['amount'],
                'date' => date('Y-m-d H:i:s')
			);

			if($this->Neteller->save($result)){
                $this->Session->setFlash('Update Neteller payment successful!', 'success');
                $this->redirect(array('controller'=>'Members', 'action' => 'index'));
            }
		}
	}

    public function saveSolidtrust(){
        if($this->request->is('post') || $this->request->is('put')){
            App::import('Model', 'Solidtrust');
            $this->Solidtrust = new Solidtrust();

            $user = $this->Session->read('user');
            $result = array(
                'user_id' => $user['User']['id'],
                'account_number' => $this->request->data['User']['account_number'],
                'transaction_id' => $this->request->data['User']['transaction_id'],
                'amount' => $this->request->data['User']['amount'],
                'date' => date('Y-m-d H:i:s')
            );

            if($this->Solidtrust->save($result)){
                $this->Session->setFlash('Update Solidtrust payment successful!', 'success');
                $this->redirect(array('controller'=>'Members', 'action' => 'index'));
            }
        }
    }
}