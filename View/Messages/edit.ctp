<h2>メッセージ変更</h2>

<?php
echo $this->Form->create('Message', array('action'=>'edit'));
echo $this->Form->input('name');
echo $this->Form->input('mail');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->end('変更');