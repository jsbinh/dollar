<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class AdminController extends AppController {

    public function index(){
        $this->redirect(array('controller' => 'admin/index', 'action' => 'index'));
    }
}