<?php 

class A{

	protected const TEST = "Class A";
	
	// Позднее статическое связываение нужно для того что бы обращаться к переопределенному статическому свойству в классе наследнике (уменьшает код)
	//Ключевое слово (замена self::) на static::

	public function getTest(){
		var_dump(self::TEST); // self - указывает на тот класс, где определенно свойство(переменная)!
	}

	public function getTest2(){

		var_dump(static::TEST); // static::NameAtribute - позволяет работать с атрибутом в том классе, в котором сейчас работаем!
		// static - указывает на то свойсво, с которым мы работаем!
	}

}


 ?>