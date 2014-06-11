<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class MembersController extends AppController {
	public function index(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		$this->set('user', $this->Session->read('user'));
	}

	public function paysuccess(){
		$this->Session->setFlash('PerfectMoney payment successful', 'success');
		$this->redirect(array('controller'=>'Members', 'action'=>'index'));
	}

	public function payerror(){
		$this->Session->setFlash('PerfectMoney payment error', 'error');
		$this->redirect(array('controller'=>'Members', 'action'=>'index'));
	}
}