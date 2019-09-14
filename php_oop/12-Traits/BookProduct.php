<?php 


class BookProduct extends Product implements I3d
{ // Расширяем класс Product (Наследование)
	
	// implements I3d Подключение интерфейса (их может быть подключено сколько угодно через ,)

	public $numPage;

	// Константы в интерфейсах переопределять нельзя!
	//const TEST2 = 5; // Константы в дочерних классах можно переопределять!

	public function __construct($name, $price, $numPage){

		parent::__construct($name,$price);
		$this->numPage = $numPage;

		$this->setDiscount(5);

		var_dump(self::class); // возвращает имя класса!

	}

	public function test(){

	}

	public function typeClass(){
		echo var_dump($this instanceof I3d);
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

	// Обязательное объявление абстрактного метода (из родительного класса)
	public function addProduct($name, $price, $numPages = 0){
		// Модификатор доступа может быть ниже (чем при объвлении абстрактного метода в родительном класса), если задан абстрактный протектед метод, то инициализировать в дочернем классе мы его можем только protecte или public (как в данном примере) private нельзя (уровень доступа выше!), если был бы public в родительном классе, то никакой другой поставить было бы нельзя! 
		// Количесво параметров(аргументов) должно совпадать с объявленным абсрактным методом в родительном классе! Но если требуется добавить параметры(аргументы), то их нужно сделать не обязательными(присвоить значение)! 

		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}

}
 ?>