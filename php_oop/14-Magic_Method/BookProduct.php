<?php 


class BookProduct extends Product implements I3d
{ // Расширяем класс Product (Наследование)
	
	// implements I3d Подключение интерфейса (их может быть подключено сколько угодно через ,)

	public $numPage;

	public $action1;
	public $action2;

	// Константы в интерфейсах переопределять нельзя!
	//const TEST2 = 5; // Константы в дочерних классах можно переопределять!

	public function __construct($name, $price, $numPage){

		parent::__construct($name,$price);
		$this->numPage = $numPage;

		$this->setDiscount(5);

		// var_dump(self::class); // возвращает имя класса!

	}

	// Когда пытаемся приобразовать объект в строку, то срабатывает метод __toString()
	// Если требуется что то отправлять при выводе через echo/print_r объект класса, то необходим магический метод __toString();
	public function __toString(){
		return $this->getProduct();  
	}

	// Если были вызваны неопределенные свойства класса (вне класса), то его именя передастся в аргументу $name, магического метода __get()
	public function __get($name){
		var_dump($name);
		$name = ucfirst($name);
		$method = "get{$name}";
		if(method_exists($this, $method)){
			return $this->$method();
		}
		// method_exists(object, NameMethod)  - проверяет, есть ли метод в данном класса (через объект)
	}

	// Отображает неопределенные свойства объекта (которые указываются вне класса)
	public function __set($name, $value){
		var_dump($name,$value); // Отображает имя неопределенного свойства и его значение! // test = Hello
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

	public function doAction1(){
		echo $this->action1 = "<p>Выполнели действие 1</p>";
		return $this; // Возвращаем объект для организации цепочки методов!
	}

	public function doAction2(){
		echo $this->action2 = "<p>Выполнели действие 2</p>";
		return $this;
	}

}
 ?>