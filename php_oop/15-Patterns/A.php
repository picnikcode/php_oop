<?php 

class A{
	
	// Pattern Singleton!
	// Паттерн синглтон используется для того, что бы нельзя было создать более 1 объекта класса!

	private static $instance; // Статическое свойство позволяет не перегружать свойство повторно

	private static $connect;

	protected function __construct(){

	}

	public static function getInstance(){
		if(self::$instance === null){
			self::$instance = new self(); // Присваиваем объект класса
		}
		return self::$instance; // Возвращаем объект класса 
	}

	public static function connecting($nameDB){
		if(self::$connect === null){
			self::$connect = $nameDB;
		}
		return self::$connect;
	}

}


 ?>