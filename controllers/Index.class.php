<?php

namespace controllers;
use libs\Controller;
use models\Joke;

class  Index extends Controller {

	public function index(){
	/*	echo 1;
		echo "<pre>";
		print_r($_GET);*/

		 //$model = new Joke();
		 //$model->insert('insert into user set  username=111');
		 //$model->insert('insert into user(username) value("fff")');

		// $data = $model->select("select * from joke");
		 //var_dump($data);
		 $data = array(
		 		array('name'=>'ff','age'=>'18'),
		 		array('name'=>'aa','age'=>'19'),
		 	);
		 $this->assign(['data'=>$data]);
		 $this->display();
		// 渲染模板引擎
	}

	public function demo(){
		echo "demo";
	}


}