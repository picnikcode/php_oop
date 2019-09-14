<?php // require_once("product.php") ?>
<?php // require_once("Igadget.php") ?>
<?php // require_once("NotebookProduct.php") ?>

<?php // require_once("I3d.php") ?>
<?php require_once("vendor/autoload.php") ?>


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

	spl_autoload_register("autoloader1"); 
	spl_autoload_register("autoloader2"); 

	$mail = new \PHPMailer\PHPMailer\PHPMailer();
	var_dump($mail);

	// Компосер - это автоматическое использование(подключение) посторонних библиотек через функционал PHP
	
	function debug($date){
		echo "<pre>";
		print_r($date);
		echo "</pre>";
	}

	function offerCase(Igadget $product){ // Контроль типа
		echo "<p>Предлагаем чехол для вашего ноутбука {$product->getName()}..</p>";

	}

	$book = new BookProduct("Три мушкитера", 400, 375);
	$notebook = new NotebookProduct("Lenovo", 2000, "AMD");

	// var_dump($book instanceof Igadget);


 ?>