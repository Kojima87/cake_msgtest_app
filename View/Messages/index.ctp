<h2>メッセージテスト</h2>

 <p>*は必須入力です</p>
  <!-- データ入力フォーム -->
  <form method="POST" action="/cake_msgtest/messages/index" id="MessageAddform">
  <table border = "1">
    <tr>
      <td>名前*
      <td><input type="text" name="data[Message][name]" size="50" id="MessageName" required="required"><br />
    </tr>
    <tr>
      <td>メールアドレス
      <td><input type="text" name="data[Message][mail]" size="50" id="MessageMail" required="required"><br />
    </tr>
    <tr>
      <td>メッセージ*</td>
      <td><textarea name="data[Message][body]" cols="30" rows="5" ></textarea><br />
    </tr>

<!--
    <tr>
      <td>画像ファイル
      <td><input type="file" name="pic">
    </tr>
-->
  </table>

  <input type="submit" name="write" value="登録" /><br /><br />

<!--    検索文字列： -->
  <input type="text" name="word" size="30" placeholder="検索文字を入力してください" />
  <input type="submit" name="search" value="検索" /><br /><br />

  </form>

<ul>
<?php foreach ($messages as $message) : ?>

    <hr><?php echo "{$message['Message']['id']}" ?>：
    <?php
    if (!empty($message['Message']['mail'])){ 
		echo "<a href=\"mailto:" . $message['Message']['mail'] . "\">" . $message['Message']['name'] . "</a>";
	} else {
		echo $message['Message']['name'];
	}
    echo "(" . date("Y/m/d H:i", strtotime($message['Message']['created'])) . ")";
    echo "<p>" . nl2br($message['Message']['body']) . "</p>";
 ?>
  <?php foreach($message['Comment'] as $comment): ?>
    <li id="comment_<?php echo h($comment['message_id']); ?>">
      <?php echo h($comment['body']) ?> by 
      <?php echo h($comment['name']) ?>
    </li>
 
  <?php endforeach; ?><br />
    <?php echo $this->Html->link('コメント',array('action'=>'view',$message['Message']['id'])); ?>
    <?php echo $this->Html->link('編集',array('action'=>'edit',$message['Message']['id'])); ?>
    <?php echo $this->Html->link('削除',array('action'=>'delete',$message['Message']['id']),array(),"削除しますか？"); ?>
    <?php
    ?>

    <br />

<?php endforeach; ?>
</ul>

