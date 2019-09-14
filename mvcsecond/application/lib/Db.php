<?php

namespace application\lib;

use PDO;

class Db{

	protected $db;

    function __construct(){
    	$config = require 'application/config/db.php';

    	$this->db = new PDO('mysql: host='. $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
    }

    public function query($sql, $param = []){

    	$stmt = $this->db->prepare($sql); // Защита от SQL-инъекций (Подготавливает запрос к выполнению!)

    	if(!empty($param)){
    		foreach ($param as $key => $value) { // Сравниваем $param с псевдоперемменной в подготовленном запросе!
    			$stmt->bindValue(':' . $key, $value); // Бинд значений (Заменяем псевдопеременные реальными значениями!)
    		}
    	}

    	$stmt->execute(); // Выполняет подготовленный запрос
    	return $stmt;
    }

    public function row($sql, $param = []){
    	
    	$result = $this->query($sql, $param);

    	return $result->fetchAll($this->db::FETCH_ASSOC);
    }

    public function column($sql, $param = []){
		
		$result = $this->query($sql, $param);

    	return $result->fetchColumn();
    }
}