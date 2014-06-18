<?php
class NetellersController extends AppController {

    public $uses = array('Neteller', 'User');

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
            'order' => array('Neteller.date' => 'desc')
        );
        $this->set('netellers', $this->paginate());
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
        $neteller = $this->Neteller->find('first', array(
            'conditions' => array(
                'Neteller.id' => $id
            )
        ));

        if(!empty($neteller)){
            if($this->Neteller->updateAll(array('Neteller.approved' => 1), array('Neteller.id'=>$id))){
                $this->User->updateTotalInvested($user, $neteller['Neteller']['amount']);
                $this->Session->setFlash('Approved neteller!', 'success');
                $this->redirect(array('controller'=>'Netellers', 'action' => 'index'));
            }
        }
    }
}