<h2><?php echo h($message['Message']['name']); ?>さんへのコメント</h2>

<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('Comment.message_id',
	array('type'=>'hidden','value'=>$message['Message']['id']));
echo $this->Form->input('name');
echo $this->Form->input('mail');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->end('登録');
