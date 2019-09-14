<?php 

abstract class Product
{
	// Абстрактные классы созданы для того, что бы нельзя было создавать их экземпляр! (Зона видимости)
	// С абстрактными классами работают исключительно через наследование!


	private $name;
	protected $price;

	private $discount = 0;

	const TEST2 = 10; // Константы в дочерних классах можно переопределять!

	public function __construct($name, $price){

		$this->name = $name;
		$this->price = $price;
	}
	
	public function getName(){
		return $this->name;
	}

	public function getPrice(){
		return $this->price - ($this->discount / 100 * $this->price);
	}

	// Геттер
	public function getDiscount(): int // ": int" Контроль возвращаемого типа геттера 
	{
		return $this->discount;
	}
	// Сеттер
	public function setDiscount(int $discount){ //  "int" Контроль входных параметров сеттера
		$this->discount = $discount;
	}

	public function getProduct(){
		return "<hr><b>О товаре</b><br>
		Наименование товара: {$this->name}<br>
		Цена товара со скидкой: {$this->getPrice()}<br>";
	}

	// Абстрактные методы можно объявлять исключительно в абстрактных классах!
	// Абстрактные методы при объявлении не могут содержать тела метода, они обязаны задаваться в родительном классе а заполняться в дочернем классе!!!
	abstract protected function addProduct($name, $price);

	
}


 ?>