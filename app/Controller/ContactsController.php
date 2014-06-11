<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {
	public function index(){
		if($this->request->is('post') || $this->request->is('put')){
			if($this->Contact->customValidate()){
				if($this->Contact->save($this->request->data)){
					$this->_sendEmail($this->request->data);
					$this->Session->setFlash('Send message successful', 'success');
					$this->redirect(array('action'=>'index'));
				}
			}
		}
	}

	public function _sendEmail($data){
		$send_to_email = Configure::read('send_to_email');
		$Email = new CakeEmail('default');
      	$subject = 'Contact from forexpam.com';
      	$content = 
      		'Name: '.$data['Contact']['name'].'<br>'.
      		'Email: '.$data['Contact']['email'].'<br>'.
      		'Message: '.$data['Contact']['note'].'<br>';
        $Email->emailFormat('html')
                ->to($send_to_email)
                ->replyTo($send_to_email)
                ->from($send_to_email)
                ->subject($subject)
                ->send(nl2br($content));
        $Email->reset();
	}

}
