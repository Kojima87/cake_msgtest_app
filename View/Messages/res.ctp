<h2><?php echo h($message['Message']['id']); ?>さんへのコメント</h2>

<?php
echo $this->Form->create('Comment', array('action'=>'res'));
echo $this->Form->input('name');
echo $this->Form->input('mail');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->end('登録');
