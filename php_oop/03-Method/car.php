<?php 

class Car{

	public $color; // Свойства/атрибуты/поля класса
	public $wheels = 4;
	public $speed = 280;
	public $brand; // var - использовать не рекомендуется

	public function getCarInfo($name){
		return "<h3>Авто {$name}</h3>
			Марка: {$this->brand}<br>
			Цвет: {$this->color}<br>
			Кол-во колес: {$this->wheels}<br>
			Год выпуска: {$this->year}<br>
			Скорость: {$this->speed}<br>
			";
			// $this - с помощью данного оператора можно обращаться в данном классе к свойствам и методомам данного класса
	}
}

 ?>