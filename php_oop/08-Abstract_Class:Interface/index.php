<?php require_once("product.php") ?>
<?php// require_once("NotebookProduct.php") ?>

<?php require_once("I3d.php") ?>
<?php require_once("BookProduct.php") ?>

<?php 

	function debug($date){
		echo "<pre>";
		print_r($date);
		echo "</pre>";
	}

	$book = new BookProduct("Три мушкитера", 200, 375);

	debug($book);

	echo $book->getProduct();

	//$Product = new Product("Test", 1); Невозможно создать объект абстрактного класса!
	//debug($Product);

	$book->addProduct("Test", 10, 5);

	$book->test();


 ?>