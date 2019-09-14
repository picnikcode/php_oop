<?php

class Article extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->view->render('article/index');
	}

	public function article(){
		$this->view->render('article/article');
	}
}