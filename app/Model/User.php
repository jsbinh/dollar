<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
	public $useTable = 'users';

	public $validate = array(
            'username' => array(
				'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
			),
			'password' => array(
				'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
			),
			'email' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty')
                )
            ),
        );

	public function customValidate() {
        $validate = array(
            'username' => array(
				'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Username is not empty!'),
                ),
				'unique' => array(
                    'rule' => array('isUniqueUsername'),
                    'message' => __('Username is used'),
                    'on' => 'create'
                ),
			),
			'password' => array(
				'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Password is not empty!'),
                ),
				'confirm' => array(
                    'rule' => array('isConfirmPassword'),
                    'message' => __('Confirm password is not equal!'),
                ),
			),
			'email' => array(
                'required' => array(
                    'rule' => 'notEmpty',
                    'message' => __('Email is not empty!'),
                ),
                'rule1' => array(
                    'rule' => 'email',
                    'message' => __('Not format email!'),
                ),
                'rule2' => array(
                    'rule' => array('ischeckExistEmail'),
                    'message' => __('Email existed'),
                    //'on' => 'create'
                ),
                'rule3' => array(
                    'rule' => array('isConfirmEmail'),
                    'message' => __('Confirm email is not equal!'),
                    'on' => 'create'
                ),
            ),
        );
        $this->validate = $validate;
        return $this->validates();
    }

    /**
     * check validate unique username
     * @author BinhHoang
     * */
    public function isUniqueUsername(){
    	if(!empty($this->data['User']['username'])){
    		$username = $this->data['User']['username'];

    		$user = $this->find('first', array(
    			'conditions' => array(
    				'User.username' => $username,
    			)
    		));
    		if(empty($user)){
    			return true;
    		}else{
    			return false;
    		}
    	}
    	return false;
    }

    /**
     * check validate confirm password
     * @author BinhHoang
     * */
    public function isConfirmPassword(){
    	if(empty($this->data['User']['confirm_password'])){
    		return false;
    	}
    	if(!empty($this->data['User']['confirm_password']) && !empty($this->data['User']['password'])){
    		if($this->data['User']['confirm_password'] == $this->data['User']['password']){
    			return true;
    		}else{
    			return false;
    		}
    	}
    }

    /**
     * check exist email
     * @author BinhHoang
     * */
    public function ischeckExistEmail(){
    	if(!empty($this->data['User']['email'])){
    		$email = $this->data['User']['email'];
    		$user = $this->find('first', array(
    			'conditions' => array(
    				'User.email' => $email,
    			)
    		));
    		if(empty($user)){
    			return true;
    		}else{
    			return false;
    		}
    	}
    	return false;
    }

    /**
     * check validate confirm email
     * @author BinhHoang
     * */
    public function isConfirmEmail(){
    	if(empty($this->data['User']['confirm_email'])){
    		return false;
    	}
    	if(!empty($this->data['User']['confirm_email']) && !empty($this->data['User']['email'])){
    		if(trim($this->data['User']['confirm_email']) == trim($this->data['User']['email'])){
    			return true;
    		}else{
    			return false;
    		}
    	}
    }

    public function getUserbyId($id){
        $user = $this->find('first', array(
            'conditions' => array(
                'User.id' => $id
            )
        ));
        if(!empty($user)){
            return $user['User']['username'];
        }
        return '';
    }

    public function getAllUser(){
        $users = $this->find('list', array(
            'conditions' => array(
                'delete_flg' =>0
            ),
            'fields' => array('id', 'username')
        ));
        return $users;
    }

    public function updateTotalInvested($user, $amount){
        if(!empty($user) && !empty($amount)){
            $root_amount = $user['User']['total_invested'];

            if(empty($root_amount)){
                $root_amount = $amount;
            }else{
                $root_amount = $root_amount + $amount;
            }
            if($this->updateAll(array('User.total_invested' => $root_amount), array('User.id'=>$user['User']['id']))){
                $active_invesment = $user['User']['active_investments'];

                if(empty($active_invesment)){
                    $active_invesment = $amount*2;
                }else{
                    $active_invesment = $active_invesment + $amount*2;
                }
                $this->updateAll(array('User.active_investments' => $active_invesment), array('User.id'=>$user['User']['id']));
            }
        }
    }

}
