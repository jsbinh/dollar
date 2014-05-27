<?php
App::uses('AppModel', 'Model');

class Withdraw extends AppModel {
	public $useTable = 'withdraws';

	public $validate = array(
  		'email' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty')
            ),
            'email' => array(
                'rule' => array('email'),
            )
        ),
        'amount' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty')
            )
        ),
    );

	public function customValidate() {
        $validate = array(
            'email' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                    'message' => __('Email is not empty!'),
                ),
                'email' => array(
                    'rule' => array('email'),
                    'message' => __('Email syntax error!'),
                )
            ),
            'amount' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                    'message' => __('Amount is not empty!'),
                )
            ),
        );
        $this->validate = $validate;
        return $this->validates();
    }
}
