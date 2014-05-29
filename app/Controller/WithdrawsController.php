<?php

App::uses('AppController', 'Controller');

class WithdrawsController extends AppController {
	public $uses = array('Withdraw');

	public function index(){
		$user = $this->Session->read('user');
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		if($this->request->is('PUT') || $this->request->is('post')){
			$data = $this->request->data;
			if($this->Withdraw->customValidate()){
				foreach ($data as $key => $value) {
					if(!empty($value['email']) && !empty($value['amount'])){
						$value['user_id'] = $user['User']['id'];
						$value['withdraw_date'] = date('Y-m-d H:i:s', time());
						$this->Withdraw->create();
						$this->Withdraw->save($value);
					}
				}
				$this->redirect(array('controller'=>'Withdraws', 'action'=>'index'));
			}
		}
	}
}
