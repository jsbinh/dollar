<?php

App::uses('AppController', 'Controller');

class PaymentsController extends AppController {

	public $uses = array('Withdraw');

	public function index(){

		$withdraw = $this->Withdraw->find('all', array(
			 'order' => array('Withdraw.withdraw_date' => 'desc')
		));

        $this->set('withdraw', $withdraw);
	}
}
