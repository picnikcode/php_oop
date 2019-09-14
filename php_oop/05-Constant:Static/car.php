<?php 

class Car{

	public $color; // Свойства/атрибуты/поля класса
	public $wheels;
	public $speed;
	public $brand; // var - использовать не рекомендуется

	// Константы работают в контексте класса, а не объекта!
	const TEST_CAR = 'Ролс Ройс'; // Объявление констант в классе! (Не нужно ставить $ перед переменной!)
	const TEST_CAR_SPEED = 300;

	// Cтатические свойства и методы используются в контексте класса, а не объекта!
	public static $countCar = 0; 

	public function __construct($color, $wheels = 4, $speed, $brand){ // Это магический метод! Вызывается одновременно с создаием объекта класса!

		$this->color = $color; // $this - это обращение к объекту!
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;

		self::$countCar++; // вызов статического свойства (через оператор self::), также можно и обратиться к статическому методу!
	}

	public static function getCountCar(){
		return self::$countCar;
	}

	public function getText(){ // Мы можем разрывать тело класса! (Использовать HTML в классе!)
		?>
		<div>EEEp</div><br>
		<?php
	}

	public function test(){ 
		$this->getText(); // Методы тоже вызываются через $this
	}

	public function getCarInfo($name){
		return "<h3>Авто {$name}</h3>
			Марка: {$this->brand}<br>
			Цвет: {$this->color}<br>
			Кол-во колес: {$this->wheels}<br>
			Скорость: {$this->speed}<br>
			";
			// $this - с помощью данного оператора можно обращаться в данном классе к свойствам и методомам данного класса
	}

	public function getPrototypeInfo(){	// Константы используются в контексте класса а не объекта! По это их вызов строго через self::NameConst !!!
		return "<h3>Информация прототипа</h3>
			Марка: " . self::TEST_CAR . "<br> 
			Скорость: " . self::TEST_CAR_SPEED . "<br>"	;
	}
}

 ?>