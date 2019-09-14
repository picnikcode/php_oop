<?php require_once("product.php") ?>
<?php// require_once("NotebookProduct.php") ?>
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

	
	//var_dump($book->public);

	//var_dump($book->protected); Ошибка (из за модификаторов доступа!)
	//var_dump($book->private);
 ?>