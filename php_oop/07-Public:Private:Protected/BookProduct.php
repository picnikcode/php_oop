<?php 

class BookProduct extends Product 
{ // Расширяем класс Product (Наследование)
	
	public $numPage;

	public function __construct($name, $price, $numPage){

		// parrent::NameMethod - вызывает метод из родительского класса!
		parent::__construct($name,$price);
		$this->numPage = $numPage;

		$this->setDiscount(5);
	//	var_dump($this->public);
	//	var_dump($this->protected);

	//	Private свойства из родительного класса не в поле видимости!
	//	var_dump($this->private);

	}
	public function getNumPage(){
		return $this->numPage;
	}

	public function getProduct(){
		
		$out = parent::getProduct();
		$out .= "Цена без скидки: {$this->price}<br>";
		$out .= "Кол-во страниц: {$this->numPage}<br>";
		$out .= "Процент скидки: {$this->getDiscount()}<br>";

		return $out;
	}

}
 ?>