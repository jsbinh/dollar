<?php

App::uses('AppController', 'Controller');

class WithdrawsController extends AppController {
	public $uses = array('Withdraw');

	public function index(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		if($this->request->is('PUT') || $this->request->is('post')){
			$data = $this->request->data;
			if($this->Withdraw->customValidate()){
				pr($data);exit;
			}
		}
	}
}
