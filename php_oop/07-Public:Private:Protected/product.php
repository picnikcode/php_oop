<?php 

class Product
{
	
	private $name;
	protected $price;

	private $discount = 0;

	//Модификаторы доступа - нужны для контроля доступа (контроля кода)!
	// Public доступен везде! (в классе, в наследовательских классах, вне класса!)
	public $public = "PUBLIC"; 
	// Protected доступен исключительно в классе и классах наследования (ВНЕ класса не доступен!)
	protected $protected = "PROTECTED";
	// Private доступен только в том классе где он объявлен! (Вне класса и в классах наследниках он не доступен!)
	private $private = "PRIVATE";

	public function __construct($name, $price){

		$this->name = $name;
		$this->price = $price;

			// Все свойства в поле видимости и работают!
		// var_dump($this->public); 
		// var_dump($this->protected);
		// var_dump($this->private);
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
}


 ?>