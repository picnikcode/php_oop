<?php
 
class Autorizate_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function Registory($array_date){
		$login = $array_date['login'];
		$name = $array_date['name'];
		$password = $array_date['pass'];

		if($login == null || $password == null || $name == null){
			return 'Пустые поля';
		}

		$sql = "SELECT * FROM users WHERE login = '$login'";

		$query = $this->db->query($sql);
		$result_query = $query->fetchAll();

		if(empty($result_query) || $result_query == null){
			$password = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO users(login, name, password) VALUES('$login', '$name', '$password')";
			$query_reg = $this->db->query($sql);
			return true;
		}else{
			return false;
		}

	}

	public function Autorizate($array_date){
		$login = $array_date['login'];
		$password = $array_date['pass'];

		if($login == null || $password == null){
			return 'Пустые поля';
		}

		$sql = "SELECT * FROM users WHERE login = '$login'";
		$query = $this->db->query($sql);

		$result_query = $query->fetchAll($this->db::FETCH_ASSOC);

		if(!empty($result_query)){
			if(password_verify($password, $result_query[0]['password'])){
				return $result_query[0]['name'];
			}else{
				return false;
			}
		}else{
			return 'Нет аккаунта!';
		}
	}
}