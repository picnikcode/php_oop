<?php


namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
	
	public function indexAction(){
		
		$result = $this->model->getDate();
		$var = ['users' => $result];
		$this->view->render('Main', $var);
	}

	public function contactAction(){
		echo "Contacts";
		var_dump($this->route);
	}

}