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

            $this->Perfectmoney->create();
            if($this->Perfectmoney->save($this->request->data)){
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
        $perfect = $this->Perfectmoney->find('first', array(
            'conditions' => array(
                'Perfectmoney.id' => $id
            )
        ));

        if(!empty($perfect)){
            if($this->Perfectmoney->updateAll(array('Perfectmoney.approved' => 1), array('Perfectmoney.id'=>$id))){
                $this->User->updateTotalInvested($user, $perfect['Perfectmoney']['amount']);
                $this->Session->setFlash('Approved Perfectmoney!', 'success');
                $this->redirect(array('controller'=>'Perfectmoneys', 'action' => 'index'));
            }
        }else{
            $this->redirect(array('controller'=>'Perfectmoneys', 'action' => 'index'));
        }
    }

}