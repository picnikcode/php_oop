<?php require_once("product.php") ?>
<?php require_once("Igadget.php") ?>
<?php require_once("NotebookProduct.php") ?>

<?php require_once("I3d.php") ?>
<?php require_once("BookProduct.php") ?>

<?php 

	function debug($date){
		echo "<pre>";
		print_r($date);
		echo "</pre>";
	}

	function offerCase(Igadget $product){ // Контроль типа через интерфейс!
		// С объектом можно взаимодействовать, через объект можно также получить все методы и свойства!
		echo "<p>Предлагаем чехол для вашего ноутбука {$product->getName()}..</p>";

	}


	$book = new BookProduct("Три мушкитера", 200, 375);
	$notebook = new NotebookProduct("Lenovo", 2000, "AMD");

	var_dump($book instanceof Igadget);


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
	var_dump($b instanceof A);
 ?>