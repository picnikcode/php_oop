<?php require_once('car.php'); ?>
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
$Car1->test();

echo Car::getCountCar(); // Обращение к статическому свойству/методу (ИмяКласса::$свойство/переменная) (при вызове объект класса иметь не обязательно)

echo $Car1->getPrototypeInfo();

echo Car::TEST_CAR . "<br>"; // Обращение к константе вне класса, через контекст класса!

echo Car::class; // Возвращает наименование класса/пространства имен

?>


<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
</head>
<body>

</body>
</html>