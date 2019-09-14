<?php


class Autorizate extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){

		if(isset($_POST['submit'])){
			$date = ['login' => $_POST['login'], 'pass' => $_POST['password']];
			$result = $this->model->Autorizate($date);
			if($result && $result != 'Пустые поля' && $result != 'Нет аккаунта!'){
				$_SESSION['name'] = $result;
				header('Location:' . URL);
			}elseif($result == 'Пустые поля'){
				$test = 'Имеются пустые поля!';
			}elseif($result == 'Нет аккаунта!'){
				$test = 'Данного аккаунта не существует!';
			}else{
				$test = 'Неверные данные!';
			}
		}else{
			$test = false;
		}

		$this->view->render('autorizate/index', $test);

	}

	public function register(){
		if(isset($_POST['submit'])){
			$date = ['login' => $_POST['login'], 'pass' => $_POST['password'], 'name' => $_POST['name']];
			$result = $this->model->Registory($date);
			if($result == true){
				$test = 'Вы зарегистрировались!';
				$_SESSION['name'] = $date['name'];
				header('Location:' . URL);
			}elseif($result == 'Пустые поля') {
				$test = 'Имеются пустые поля';
			}
			else{
				$test = 'Пользователь с данным логином уже существует!';
			}
		}else{
			$test = false;
		}

		$this->view->render('autorizate/register', $test);
	}

	public function logout(){
		$_SESSION['name'] = null;

		header('Location:' . URL . 'autorizate/index');
	}

	
}