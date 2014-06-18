<?php
App::uses('AppModel', 'Model');

class Percent extends AppModel {
	public $useTable = 'percent';

    public function getPercent($date){
        $percent = $this->find('first', array(
            'conditions' => array(
                'Percent.date' => $date
            )
        ));
        return $percent;
    }

}
