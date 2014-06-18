<?php
class SolidtrustsController extends AppController {

    public $uses = array('Solidtrust', 'User');

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
            //     'approved' => 1,
            // ),
            'order' => array('Solidtrust.date' => 'desc')
        );
        $this->set('solidtrusts', $this->paginate());
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
        $solid = $this->Solidtrust->find('first', array(
            'conditions' => array(
                'Solidtrust.id' => $id
            )
        ));

        if(!empty($solid)){
            if($this->Solidtrust->updateAll(array('Solidtrust.approved' => 1), array('Solidtrust.id'=>$id))){
                $this->User->updateTotalInvested($user, $solid['Solidtrust']['amount']);
                $this->Session->setFlash('Approved solidtrust!', 'success');
                $this->redirect(array('controller'=>'Solidtrusts', 'action' => 'index'));
            }
        }
    }
}