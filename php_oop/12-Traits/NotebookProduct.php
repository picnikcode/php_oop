<?php 

require_once("trait.php");

class NotebookProduct extends Product implements Igadget
{ // Расширяем класс Product (Наследование)
	
	use TColor;

	public $cpu;


	public function __construct($name, $price, $cpu){

		// parrent::NameMethod - вызывает метод из родительского класса!
		parent::__construct($name,$price);
		$this->cpu = $cpu;

	}

	public function Testtrait(){

		$this->setColor("Red"); // Работа с трейтами в контексте объекта

		return $this->getColor();
	}

	public function getCpu(){
		return $this->cpu;
	}

	public function typeClass(){
		echo var_dump($this instanceof Igadget);
	}

	public function getProduct(){
		
		$out = parent::getProduct();
		$out .= "Процессор: {$this->cpu}<br>";

		return $out;
	}

	public function addProduct($name, $price, $numPages = 0){
	

	}

	public function getCase(){

	}


}

 ?>