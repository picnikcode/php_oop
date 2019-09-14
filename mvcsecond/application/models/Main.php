<?php


namespace application\models;

use application\core\Model;

class Main extends Model
{
	
	public function getDate(){

		$result = $this->db->row('SELECT login, name FROM users');
		return $result;

	}


}