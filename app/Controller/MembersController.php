<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class MembersController extends AppController {
	public $uses = array('Percent', 'User');

	public function index(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
		$user_session = $this->Session->read('user');
		//get top 10 percent
        $percents = $this->Percent->find('all', array(
            'conditions' => array(
                'delete_flg' =>0
            ),
            'limit' => 10,
            'order' => array('Percent.date' => 'desc')
        ));
        $user = $this->User->findById($user_session['User']['id']);
        $this->set('percents', $percents);
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