<?php

class CommentsController extends AppController {
	// public $scaffold;

	public $helpers = array('Html','Form');
	public $components = array('Search.Prg'); 

	public function add() {
			if ($this->Comment->save($this->request->data)) {
				//$this->Session->setFlash('Success!');
			} else {
				$this->Session->setFlash('failed!　名前とメッセージは必須です');
			}
			$this->redirect(array('controller'=>'messages', 'action'=>'index'));
	}

//以下、不要のはず
	public function delete($id) { // viewはなく、indexにちょっと書いておく（隠しフォームにデータ投げる）
		if($this->Comment->delete($id)) {
		}
		else {
			$this->Session->setFlash('failed');
		}

		$this->redirect(array('controller'=>'messages', 'action'=>'index'));
	}

}