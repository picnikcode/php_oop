<?php require_once('car.php'); ?>
<?php require_once('WriteToFile.php'); ?>
<?php 

function debug($date){ // распечатали объект класса
	echo "<pre>"; 
	print_r($date);
	echo "</pre>";
}

$Car1 = new Car("Black", "4", "180", "Audi"); // В АРГУМЕНТЫ объекта можно передать аргументы(значения), которые пойдут в метод __construct() и данный метод автоматический вызовится при объявления объекта класса!!! 
$Car2 = new Car("White", "4", "200", "Mercedec");

echo $Car1->getCarInfo("Руслана");
echo $Car2->getCarInfo("Никиты");

$Car1->getText();


$file_1 = new WriteToFile("TestFile.txt"); // Запись в фаил!
echo $file_1->write("  Учись!");
echo $file_1->write("  Всегда!");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
</head>
<body>

</body>
</html>