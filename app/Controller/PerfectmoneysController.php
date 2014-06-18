<?php
class PerfectmoneysController extends AppController {

    public $uses = array('Perfectmoney', 'User');

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
            'order' => array('Perfectmoney.date' => 'desc')
        );
        $this->set('perfectmoneys', $this->paginate());
    }

    public function add(){
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Users', 'action'=>'login'));
        }
        $user_session = $this->Session->read('user');
        if($this->request->is('put') || $this->request->is('post')){
            $this->request->data['Perfectmoney']['user_id'] = $user_session['User']['id'];
            $this->request->data['Perfectmoney']['date'] = date('Y-m-d H:i:s');

            $user = $this->User->findById($user_session['User']['id']);
            //update total_invested
            $this->User->updateTotalInvested($user, $this->request->data['Perfectmoney']['amount']);

            $this->Perfectmoney->create();
            if($this->Perfectmoney->save($this->request->data)){
                $this->Session->setFlash('Payment Perfectmoney successful', 'success');
                $this->redirect(array('controller'=>'Members', 'action'=>'index'));
            }
        }
    }

}