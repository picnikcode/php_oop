<?php

class Main_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function countArt(){
		$sql = "SELECT * FROM articles";
		$query = $this->db->query($sql);

		return $query->rowCount();
	}

	public function pagination($offset, $limit){
		$sql = "SELECT * FROM articles LIMIT $offset, $limit";
		$query = $this->db->query($sql);

		$this->articleListP = $query->fetchAll();
	}

	public function articleAll(){
		$sql = "SELECT * FROM articles";
		$query = $this->db->query($sql);

		$this->articleList = $query->fetchAll();
	}

	public function createArticle($arr_date){
		$name = $arr_date['name'];
		$text = $arr_date['text'];
		$cat = $arr_date['category'];

		if($name == null || $text == null || $cat == null){
			return 'Пустые поля';
		}

		$sql = "SELECT * FROM articles WHERE name = '$name'";
		$query = $this->db->query($sql);
		$result = $query->fetchAll();

		if($result == null || empty($result)){
			$sql = "INSERT INTO articles(name, `text`, category_id) VALUES('$name', '$text', '$cat')";
			$query = $this->db->query($sql);

			return true;
		}else{
			return false;
		}

		

	}

	public function getDate($id){
		$sql = "SELECT * FROM articles WHERE id = '$id'";
		$query = $this->db->query($sql);

		$result = $query->fetchAll($this->db::FETCH_ASSOC);

		if($result == null || empty($result)){
			return false;
		}else{
			return $result;
		}

	}

	public function updateArticle($arr_date){
		$name = $arr_date['name'];
		$text = $arr_date['text'];
		$cat = $arr_date['category'];
		$id = $arr_date['id'];

		if($name == null || $text == null || $cat == null){
			return null;
		}

		$sql = "SELECT * FROM articles WHERE name = '$name' LIMIT 1";
		$query = $this->db->query($sql);

		$result = $query->fetchAll($this->db::FETCH_ASSOC);


		if($result != null || !empty($result)){
			return false;
		}else{
			$sql = "UPDATE `articles` SET `name` = '$name', `text` = '$text', `category_id` = '$cat' WHERE id = '$id'";
			$query = $this->db->query($sql);

			$result = $query->fetchAll();

			return true;
		}

		
	}

	public function deleteObject($id){
		$sql = "DELETE FROM articles WHERE id = '$id' LIMIT 1";
		$query = $this->db->query($sql);

		$this->succesDelete = $query->fetchAll();
	}

}