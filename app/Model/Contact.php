<?php
App::uses('AppModel', 'Model');

class Contact extends AppModel {
	public $useTable = 'contacts';

	public $validate = array(
            'name' => array(
				'notEmpty' => array(
                    'rule' => array('notEmpty') 
                )
			),
			'email' => array(
				'notEmpty' => array(
                    'rule' => array('notEmpty') 
                )
			),
			'note' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty') 
                )
            ),
        );
	
	public function customValidate() {
        $validate = array(
            'name' => array(
				'required' => array(
                    'rule' => 'notEmpty',                    
                    'message' => __('Name is not empty!'),
                ),				
			),
			'email' => array(
				'required' => array(
                    'rule' => 'notEmpty',                    
                    'message' => __('Email is not empty!'),
                ),
				'email' => array(
                    'rule' => array('email'),
                    'message' => __('Not format email!'),                    
                ),
			),
			'note' => array(
                'required' => array(
                    'rule' => 'notEmpty',                    
                    'message' => __('Message is not empty!'),
                ),                
            ),
        );
        $this->validate = $validate;
        return $this->validates();
    }
}
