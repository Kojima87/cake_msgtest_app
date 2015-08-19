<?php

class Comment extends AppModel {
	public $belongsTo = 'Message';

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


}