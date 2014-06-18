<?php
class BalancesController extends AppController {

    public function index(){

    }

    public function admin_index() {
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
            'order' => array('Balance.date' => 'desc')
        );
        $this->set('balances', $this->paginate());
    }

    public function add(){
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Users', 'action'=>'login'));
        }
        $user = $this->Session->read('user');
        if($this->request->is('put') || $this->request->is('post')){
            $this->request->data['Balance']['user_id'] = $user['User']['id'];
            $this->request->data['Balance']['date'] = date('Y-m-d H:i:s');

            $this->Balance->create();
            if($this->Balance->save($this->request->data)){
                $this->Session->setFlash('Payment balance successful', 'success');
                $this->redirect(array('controller'=>'Members', 'action'=>'index'));
            }
        }
    }

}