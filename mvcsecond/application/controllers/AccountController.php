<?php

namespace application\controllers; 


use application\core\Controller;

class AccountController extends Controller
{
	

	public function LoginAction(){

		// echo "AccountController is workin!";
		// $this->view->redirect('register');
		$this->view->render('Login');
	}

	public function RegisterAction(){

		// echo "Register is workin!";
		$this->view->render('Register');
	}
}