<?php 

class Car{

	public $color; // Свойства/атрибуты/поля класса
	public $wheels;
	public $speed;
	public $brand; // var - использовать не рекомендуется

	public function __construct($color, $wheels = 4, $speed, $brand){ // Это магический метод! Вызывается одновременно с создаием объекта класса!
		echo __METHOD__ . " Hello" ."<br>";

		$this->color = $color; // $this - это обращение к объекту!
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
	}

	public function getText(){ // Мы можем разрывать тело класса! (Использовать HTML в классе!)
		?>
		<div>EEEp</div><br>
		<?php
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

	public function __destruct(){ // Данный метод является магическим и автоматический вызывается при удалении объекта из памяти (в конце)
		// var_dump($this);
	}
}

 ?>