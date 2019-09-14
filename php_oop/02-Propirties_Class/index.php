<?php require_once('propirties_class.php'); ?>

<?php 

function debug($date){ // распечатали объект класса
	echo "<pre>"; 
	print_r($date);
	echo "</pre>";
}

$Car1 = new Car(); // $o1 - Объект класса Class_And_Object()
$Car2 = new Car(); // $o1 - Объект класса Class_And_Object()

debug($Car1);

$Car1->color = "Black"; // оператор -> позволяет обратиться к свойству класса или методу через объект!
$Car1->brand = "Volvo";
$Car1->year = 2019; // Также возможно определить новые свойства (использовать не рекомендуется!)

$Car2->color = "White"; // оператор -> позволяет обратиться к свойству класса или методу через объект!
$Car2->brand = "BMW";
$Car2->speed = 200;
$Car2->year = 2019;

//debug($Car1);

//debug($Car2);

$proper_class = $Car1;

echo "<h3>Мое авто</h3>
Марка: {$proper_class->brand}<br>
Цвет: {$proper_class->color}<br>
Кол-во колес: {$proper_class->wheels}<br>
Год выпуска: {$proper_class->year}<br>
Скорость: {$proper_class->speed}<br>
";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
</head>
<body>

</body>
</html>