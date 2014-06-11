<?php
App::uses('AppModel', 'Model');

class Neteller extends AppModel {
	public $useTable = 'netellers';

	public $validate = array(
  		'acount_number' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty')
            ),
        ),
        'transaction_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty')
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
            'acount_number' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                    'message' => __('Account number is not empty!'),
                ),
            ),
            'transaction_id' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                    'message' => __('Transaction id is not empty!'),
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
