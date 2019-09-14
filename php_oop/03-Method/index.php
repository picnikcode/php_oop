<?php require_once('car.php'); ?>

<?php 

function debug($date){ // распечатали объект класса
	echo "<pre>"; 
	print_r($date);
	echo "</pre>";
}

$Car1 = new Car(); // $o1 - Объект класса Class_And_Object()

$Car1->color = "Black"; // оператор -> позволяет обратиться к свойству класса или методу через объект!
$Car1->brand = "Volvo";
$Car1->year = 2019; // Также возможно определить новые свойства (использовать не рекомендуется!)

$Car2 = new Car(); // $o1 - Объект класса Class_And_Object()

$Car2->color = "White"; // оператор -> позволяет обратиться к свойству класса или методу через объект!
$Car2->brand = "BMW";
$Car2->year = 2018; // Также возможно определить новые свойства (использовать не рекомендуется!)

echo $Car1->getCarInfo("Руслана");
echo $Car2->getCarInfo("Никиты");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
</head>
<body>

</body>
</html>