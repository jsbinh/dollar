<?php
class PercentsController extends AppController {

    //public $uses = array('User', 'Percent');

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
            'conditions' => array(
                'delete_flg' => 0,
            ),
            'order' => array('Percent.date' => 'desc')
        );
        $this->set('percents', $this->paginate());
	}

    public function admin_add() {
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
        App::import('Model', 'User');
        $this->User = new User();
        $this->layout = 'backend';
        $users = $this->User->getAllUser();

        if($this->request->is('post') || $this->request->is('put')){
            $data = $this->request->data;
            if(strtotime($data['Percent']['date']) == strtotime(date('Y-m-d'))){
                //update balance of user
                $this->User->updateBalance($data['Percent']['date'], $data['Percent']['percent']);
            }

            $this->Percent->create();
            if($this->Percent->save($data)){
                $this->Session->setFlash('Add new percent successful', 'success');
                $this->redirect(array('controller'=>'Percents', 'action'=>'index'));
            }
        }

        $this->set('users', $users);
        $this->render('admin_detail');
    }

	public function admin_edit($id) {
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

        if(empty($id)){
            $this->Session->setFlash('Have not this id', 'error');
            $this->redirect(array('controller'=>'Percents', 'action'=>'index'));
        }
        App::import('Model', 'User');
        $this->User = new User();
		$this->layout = 'backend';

        $balance = $this->Percent->findById($id);

        if($this->request->is('post') || $this->request->is('put')){
            //delete old balance
            $this->User->updateEditBalance($balance['Percent']['date'], $balance['Percent']['percent']);

            $data = $this->request->data;
            $this->Percent->id = $id;
            $this->Percent->set($data);
            if($this->Percent->save($data)){
                //add new balance
                $this->User->updateBalance($data['Percent']['date'], $data['Percent']['percent']);
    
                $this->Session->setFlash('Update percent successful', 'success');
                $this->redirect(array('controller'=>'Percents', 'action'=>'index'));
            }
        }
        $this->request->data = $balance;
        $users = $this->User->getAllUser();
        $this->set('users', $users);
		$this->render('admin_detail');
	}

    public function admin_delete($id) {
        if($this->Percent->updateAll(array('Percent.delete_flg' => 1), array('Percent.id' => $id))) {
            $this->Session->setFlash('Delete successful', 'success');
            $this->redirect(array('controller'=>'Percents', 'action'=>'index'));
        }else{
            $this->Session->setFlash('Delete error!', 'error');
            $this->redirect(array('controller'=>'Percents', 'action'=>'index'));
        }
    }
}