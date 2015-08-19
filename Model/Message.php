<?php

class Message extends AppModel {
//	public $hasMany = "Comment";
    public $hasMany = array(
        'Comment' => array(
            'order'         => 'Comment.created DESC',
            'dependent'     => true
        )
    );

    public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
//	    'word'=>array('type' => 'like'),
	    'word'=>array('type' => 'query','method'=>'orConditions'),
	);

	public function orConditions($data, $field){
		$filter=$data['word'];
		$cond=array(
			'OR'=>array(
				$this->alias.'.name like'=>'%'.$filter.'%',
				$this->alias.'.body like'=>'%'.$filter.'%',
			));
		return $cond;
	}

	public $validate = array (
		'name'=>array(
			'rule'=>'notEmpty',
			'message'=>'名前は必須です'	// オプションで出すメッセージを設定
			),
		'body'=>array(
			'rule'=>'notEmpty',
			'message'=>'メッセージは必須です'	// オプションで出すメッセージを設定
			)
		);

	public function add() {

	}
	
}