<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class MembersController extends AppController {
	public $uses = array('Percent');

	public function index(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		$user => $this->Session->read('user');
		//get top 10 percent
        $percents => $this->Percent->find('all', array(
            'conditions' => array(
                
            )
        ));

		$this->set('user', $user);
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