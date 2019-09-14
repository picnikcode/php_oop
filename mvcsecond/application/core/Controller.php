<?php


namespace application\core;

use application\core\View ;

abstract class Controller
{
	
	public $route;
	public $view;
	public $model;

	public function __construct($param)
	{
		$this->route = $param;
		$this->view = new View($this->route);
		$this->model = $this->loadModel($param['controller']);
	}

	public function loadModel($name){
		$path = 'application\models\\' . ucfirst($name);

		if(class_exists($path)){
			return new $path;
		}
	}
}