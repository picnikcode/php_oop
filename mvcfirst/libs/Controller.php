<?php


class Controller
{
	
	function __construct()
	{
		$this->view = new View;
	}

	public function load_model($name){

		$path = 'models/' . $name . '_model.php';
		$nameModel = $name . '_model';

		if(file_exists($path)){
			require $path;
			$this->model = new $nameModel;
		}
	}
}