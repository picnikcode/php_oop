<?php

if(isset($_GET['URL'])){
	$url = $_GET['URL'];
	$url = explode('/', $url);

	$path = 'controllers/' . $url[0] . '.php';

	if(file_exists($path)){

		require $path;
		$controller = new $url[0];
		$controller->load_model($url[0]);

	}else{

		require 'controllers/main.php';
		$controller = new Main;
		$controller->load_model('main');

	}
}

if(isset($_GET['URL']) && isset($url) && !empty($url[2])){

	if(isset($controller)){
		if(method_exists($controller, $url[1])){
			$controller->{$url[1]}($url[2]);
		}else{
			$controller->index();
		}
	}

}elseif(isset($_GET['URL']) && isset($url) && empty($url[2])){
	if(!empty($url[1])){
		if(isset($controller)){
			if(method_exists($controller, $url[1])){
				$controller->{$url[1]}();
			}else{
				$controller->index();
			}
		}
	}else{
		if(isset($controller)){
			$controller->index();
		}
	}

}

if(!isset($_GET['URL'])){
	require 'controllers/main.php';
	$controller = new Main;
	$controller->load_model('main');
	$controller->index();
}