<?php

class MessagesController extends AppController {
	// public $scaffold;

	public $helpers = array('Html','Form');
	public $components = array('Session','Paginator','Search.Prg');
	public $presetVars = true;
	public $paginate = array();

	public function index() {

		$this->set('messages', $this->Message->find('all',array(
        'order' => array('Message.created' => 'desc')))); // findはよく使う、公式サイトのAPIを参照
		$this->set('title_for_layout', 'メッセージテスト');

		if (isset($_POST['write'])) {
			//　とりあえず、ここでセーブさせてみる
			$editdata = $_POST['data'];
			$result = $this->Message->save($editdata);			
			if ($result) {
				// $this->Session->setFlash('success!');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('failed!　名前とメッセージは必須です');
			}
		}
		if (isset($_POST['search'])) {
			$this->Session->setFlash('作業中です');
//　！paginateに検索文字をセットするには？
//　！名前、メールアドレス、メッセージのフィールドを見てしまう

			$this->Prg->commonProcess();
			$this->paginate['conditions']=$this->Message->parseCriteria($this->passedArgs);
			$messages=$this->paginate();
			$this->set(compact('messages'));
		}
 	}

	public function edit($id=null) {
		$this->Message->id = $id;
		if($this->request->is('get')) {
			$this->request->data = $this->Message->read();
		} else {
			if($this->Message->save($this->request->data)) {
				// $this->Session->setFlash('success!');
				$this->redirect(array('action'=>'index'));
			}
			else {
				$this->Session->setFlash('failed!');
			}
		}
	}

	public function delete($id) {
		if($this->Message->delete($id)) { 
		}
		else {
			$this->Session->setFlash('failed!');	
		}

		$this->redirect(array('action'=>'index'));
	}


	public function view($id = null) {
		$this->Message->id = $id;
		$this->set('message', $this->Message->read()); // idをセットしてreadすると中身を持ってこれる
	}

/*
	public function add(){

	}
*/

	public function search() {
$this->Session->setFlash('作業中です');
		$this->paginate=array(
			'limit'=>3,
			);
		$this->Prg->commonProcess();
		$this->paginate['conditions']=$this->Message->parseCriteria($this->passedArgs);
		$messages=$this->paginate();
		$this->set(compact('messages'));
	}

}