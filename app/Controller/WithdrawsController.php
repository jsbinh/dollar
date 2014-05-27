<?php

App::uses('AppController', 'Controller');

class WithdrawsController extends AppController {

	public function index(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		if($this->request->is('PUT') || $this->request->is('post')){
			pr($this->request->data);exit;
		}
	}
}
