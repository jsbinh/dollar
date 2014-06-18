<?php
class EgopaysController extends AppController {

    public $uses = array('Egopay', 'User');

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
            'order' => array('Egopay.date' => 'desc')
        );
        $this->set('egopays', $this->paginate());
    }

    public function add(){
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Users', 'action'=>'login'));
        }
        $user_session = $this->Session->read('user');
        if($this->request->is('put') || $this->request->is('post')){
            $this->request->data['Egopay']['user_id'] = $user_session['User']['id'];
            $this->request->data['Egopay']['date'] = date('Y-m-d H:i:s');

            $user = $this->User->findById($user_session['User']['id']);
            //update total_invested
            $this->User->updateTotalInvested($user, $this->request->data['Egopay']['amount']);

            $this->Egopay->create();
            if($this->Egopay->save($this->request->data)){
                $this->Session->setFlash('Payment egopay successful', 'success');
                $this->redirect(array('controller'=>'Members', 'action'=>'index'));
            }
        }
    }

}