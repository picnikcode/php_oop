<?php require_once("product.php") ?>
<?php require_once("NotebookProduct.php") ?>
<?php require_once("BookProduct.php") ?>

<?php 

	function debug($date){
		echo "<pre>";
		print_r($date);
		echo "</pre>";
	}

	$book = new BookProduct("Три мушкитера", 200, 375);
	$notebook = new NotebookProduct("Lenovo", 2500, 'Intel');

	debug($book);
	debug($notebook);

	echo $book->getProduct();
	echo $notebook->getProduct();

 ?>