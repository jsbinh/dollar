<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class AdminController extends AppController {

    public function index(){
        $flg = false;
        if($user = $this->Session->read('user')){
            $user = $this->Session->read('user');
            if($user['User']['username'] == 'admin' || $user['User']['username'] == 'Admin'){
                $flg = true;
            }
        }
        if(!$this->Session->read('user') || !$flg){
            $this->redirect(array('controller'=>'Users', 'action'=>'login'));
        }
    }
}