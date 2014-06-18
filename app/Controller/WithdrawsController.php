<?php

App::uses('AppController', 'Controller');

class WithdrawsController extends AppController {
	public $uses = array('Withdraw', 'User');

	public function index(){
		if(!$this->Session->read('user')){
			$this->redirect(array('controller'=>'Users', 'action'=>'login'));
		}
        $user_session = $this->Session->read('user');
        $user = $this->User->find('first', array(
            'conditions' => array(
                'User.delete_flg' => 0,
                'User.id' => $user_session['User']['id']
            )
        ));

		if($this->request->is('put') || $this->request->is('post')){
			$data = $this->request->data;

			foreach ($data as $key => $value) {
				if(!empty($value['account']) && !empty($value['amount'])){
					$value['user_id'] = $user['User']['id'];
					$value['withdraw_date'] = date('Y-m-d H:i:s', time());
                    $this->User->updateTotalPayment($user['User']['id'], $value['amount']);

					$this->Withdraw->create();
					if($this->Withdraw->save($value)){
                        $this->Session->setFlash('Withdraw successful', 'success');
                        $this->redirect(array('controller'=>'Withdraws', 'action'=>'index'));
                    }
				}else{
                    $this->Session->setFlash('Balance must more than $0', 'error');
                    $this->redirect(array('controller'=>'Withdraws', 'action'=>'index'));
                }
			}
		}

        $this->set('user', $user);
    }

    public function admin_index(){
    	$this->layout = 'backend';
        $flg = false;
        if($user = $this->Session->read('user')){
            $user = $this->Session->read('user');
            if($user['User']['username'] == 'admin' || $user['User']['username'] == 'Admin'){
                $flg = true;
            }
        }
        if(!$this->Session->read('user') || !$flg){
            $this->redirect(array('controller' => 'users', 'action' => 'logout'));
        }

        $this->paginate = array(
            'limit' => 20,
            // 'conditions' => array(
            //     'delete_flg' => 0,
            // ),
            'order' => array('Withdraw.date' => 'desc')
        );
        $this->set('withdraws', $this->paginate());
    }
}
