<?php
class OkpaysController extends AppController {

    public $uses = array('Okpay', 'User');

    public function index(){

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
            'order' => array('Okpay.date' => 'desc')
        );
        $this->set('okpays', $this->paginate());
    }

    public function add(){
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Users', 'action'=>'login'));
        }
        $user_session = $this->Session->read('user');
        if($this->request->is('put') || $this->request->is('post')){
            $this->request->data['Okpay']['user_id'] = $user_session['User']['id'];
            $this->request->data['Okpay']['date'] = date('Y-m-d H:i:s');

            $this->Okpay->create();
            if($this->Okpay->save($this->request->data)){
                $this->Session->setFlash('Your request has been sent to administrators', 'success');
                $this->redirect(array('controller'=>'Members', 'action'=>'index'));
            }
        }
    }


    public function admin_approved($id, $user_id) {

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

        $user = $this->User->findById($user_id);
        $okpay = $this->Okpay->find('first', array(
            'conditions' => array(
                'Okpay.id' => $id
            )
        ));

        if(!empty($okpay)){
            if($this->Okpay->updateAll(array('Okpay.approved' => 1), array('Okpay.id'=>$id))){
                $this->User->updateTotalInvested($user, $okpay['Okpay']['amount']);
                $this->Session->setFlash('Approved Okpay!', 'success');
                $this->redirect(array('controller'=>'Okpays', 'action' => 'index'));
            }
        }else{
            $this->redirect(array('controller'=>'Okpays', 'action' => 'index'));
        }
    }

}