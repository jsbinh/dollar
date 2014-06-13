<?php
class PercentsController extends AppController {


	public function admin_index(){
		$this->layout = 'backend';

        $this->paginate = array(
            'limit' => 25,
            'order' => array('Percent.id' => 'asc')
        );
        $this->set('percents', $this->paginate());
	}

	public function admin_edit() {
		$this->layout = 'backend';
		$this->render('admin_detail');
	}

	public function admin_add() {
		$this->layout = 'backend';

		$this->render('admin_detail');
	}
}