<?php 


class NotebookProduct extends Product 
{ // Расширяем класс Product (Наследование)
	
	public $cpu;

	public function __construct($name, $price, $cpu){

		// parrent::NameMethod - вызывает метод из родительского класса!
		parent::__construct($name,$price);
		$this->cpu = $cpu;

	}
	public function getCpu(){
		return $this->cpu;
	}

	public function getProduct(){
		
		$out = parent::getProduct();
		$out .= "Процессор: {$this->cpu}<br>";

		return $out;
	}

}

 ?>