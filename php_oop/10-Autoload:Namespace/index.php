<?php // require_once("product.php") ?>
<?php // require_once("Igadget.php") ?>
<?php // require_once("NotebookProduct.php") ?>

<?php // require_once("I3d.php") ?>
<?php // require_once("BookProduct.php") ?>
<?php  require_once("tasteNameSpace.php") ?>


<?php 
	
	// Ищет классы
	function autoloader1($class){
		// echo 1;
		// var_dump($class);
		$file = $class . ".php";
		if(file_exists($file)){
			require_once($file);
		}
	}
	// Ищет интерфейсы
	function autoloader2($class){
		// echo 2;
		$file = "Interfaces/". $class . ".php";
		if(file_exists($file)){
			require_once($file);
		}
	}
	// Более старая версия автозагрузки классов - __autoload()
	// В аргументах функции spl_autoload_register() пишится наименование функции которая ищет классы!
	spl_autoload_register("autoloader1"); // Данная автозагрузка автоматический подключает файлы с классами! Это создано что бы не писать много require_once()!

	spl_autoload_register("autoloader2"); // Данную функцию автозагрузки классов можно вызовыть сколько угодно!

	// spl_autoload_register("autoloader2", true, true); // Также  доступны еще 2 параметра, которые задают приоритетность очередности вызова функции, если стоит два параметра true, то данная функция вызовится первее чем другая!

	// $tets = new TestName\NameClass();

	// $tets->nameClass();

	function debug($date){
		echo "<pre>";
		print_r($date);
		echo "</pre>";
	}

	function offerCase(Igadget $product){ // Контроль типа через интерфейс!
		// С объектом можно взаимодействовать, через объект можно также получить все методы и свойства!
		echo "<p>Предлагаем чехол для вашего ноутбука {$product->getName()}..</p>";

	}


	$book = new BookProduct("Три мушкитера", 400, 375);
	$notebook = new NotebookProduct("Lenovo", 2000, "AMD");

	// var_dump($book instanceof Igadget);


	offerCase($notebook); // Отдаем объект в функцию

	debug($book);

	echo $book->getProduct();

	$notebook->typeClass();
	$book->typeClass();

	class A{};
	class B extends A{};
	class C{};

	$a = new A();
	$b = new B();
	$c = new C();

	// $a instanceof A - позволяет проверить к какому классу относится объект (возвращает true/false)
	// var_dump($b instanceof A);
 ?>