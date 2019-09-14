<?php


class Main extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function pagination($page){
		if($page === false){
			$page = 1;
		}

		$this->limit = 5;
		$this->allArticles = $this->model->countArt();
		$this->allPages = ceil($this->allArticles / $this->limit);

		$this->offset = ($page - 1) * $this->limit;


	}

	public function index($page = false){

		if($_SESSION['name'] == null || empty($_SESSION['name'])){
			header('Location:' . URL . 'autorizate/');
		}else{

			$this->pagination($page);


			$this->model->pagination($this->offset, $this->limit);
			$this->view->render('main/index', $this->model->articleListP, $this->allPages);
		}
	}

	public function create(){

		if(isset($_POST['submit'])){
			$arr_date = ['name' => $_POST['name'], 'text' => $_POST['text'], 'category' => $_POST['category']];
			$result = $this->model->createArticle($arr_date);
			if($result === true){
				header('Location:' . URL);
			}elseif($result === false){
				$arg = "Имя уже занято!";
			}else{
				$arg = "Имеются пустые поля!";
			}
		}else{
			$arg = false;
		}

		$this->view->render('main/create', $arg);
	}

	public function update($id = false){

		if($id != false || $id != null){
			$getDate = $this->model->getDate($id);
			if(isset($_POST['submit'])){
				$arr_date = ['name' => $_POST['name'], 'text' => $_POST['text'], 'category' => $_POST['category'], 'id' => $id];
				$result = $this->model->updateArticle($arr_date);
				if($result === null){
					$valid = "Имеются пустые поля!";
				}elseif($result === false){
					$valid = "Данное имя уже существует!";
				}else{
					$valid = false;
					header('Location:' . URL);
				}

			}else{
				$valid = false;
			}
		}else{
			$getDate = false;
		}

		if($getDate != false){
			$this->view->render('main/update', $getDate, $valid);
		}else{
			header('Location:' . URL);
		}
	}

	public function delete($id = false){

		if($id != null || !empty($id) || $id != false){
			$this->model->deleteObject($id);
			header('Location:' . URL);
		}else{
			header('Location:' . URL);			
		}

	}
}