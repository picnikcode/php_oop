<?php

namespace application\core;


class View
{
	
	public $path;
	public $layout = 'default';
	public $rout;

	function __construct($route)
	{

		$this->rout = $route;
		$this->path = $route['controller'] . '/' . $route['action'];

		var_dump($this->path);

	}

	public function render($title, $vars = []){

		extract($vars);


		if(file_exists('application/views/' . $this->path . '.php')){

			ob_start(); // начало буферизации
			require 'application/views/' . $this->path . '.php';
			$content = ob_get_clean(); // результат буферизации присвоить в переменную $content

			require 'application/views/layout/' . $this->layout . '.php';  
		}else{
			echo "View not found! ";
		}
	}

	public static function redirect($url){
		header('Location: ' . $url);
		exit;
	}

	public static function errorCode($code){
		http_response_code($code); // Отдает тип ошибки на http сервер
		$path = 'application/views/errors/' . $code . '.php';

		if(file_exists($path)){
			require 'application/views/errors/' . $code . '.php';
		}
		exit;
	}
}