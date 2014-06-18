<?php
class OkpaysController extends AppController {

    public function index(){

    }

    public function add(){
        if(!$this->Session->read('user')){
            $this->redirect(array('controller'=>'Users', 'action'=>'login'));
        }
        $user = $this->Session->read('user');
        if($this->request->is('put') || $this->request->is('post')){
            $this->request->data['Okpay']['user_id'] = $user['User']['id'];
            $this->request->data['Okpay']['date'] = date('Y-m-d H:i:s');

            $this->Okpay->create();
            if($this->Okpay->save($this->request->data)){
                $this->Session->setFlash('Payment Okpay successful', 'success');
                $this->redirect(array('controller'=>'Members', 'action'=>'index'));
            }
        }
    }

}