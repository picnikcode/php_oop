<?php 

class BookProduct extends Product 
{ // Расширяем класс Product (Наследование)
	
	public $numPage;

	public function __construct($name, $price, $numPage){

		// parrent::NameMethod - вызывает метод из родительского класса!
		parent::__construct($name,$price);
		$this->numPage = $numPage;

	}
	public function getNumPage(){
		return $this->numPage;
	}

	public function getProduct(){
		
		$out = parent::getProduct();
		$out .= "Кол-во страниц: {$this->numPage}<br>";

		return $out;
	}

}
 ?>