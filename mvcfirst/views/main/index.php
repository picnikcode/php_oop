<main>
This is index Main! 
<br>
<?php 
	 echo 'Вы авторизованы как: ' . $_SESSION['name'];
 ?>
 <br>
 <a href="<?php echo URL;?>main/create">Создать</a>
 <br>
 <a href="<?php echo URL;?>autorizate/logout">Выход</a>
<br>
<table>
	<tr>
		<th>Имя</th>
		<th>Текст</th>
		<th>Действие</th>
	</tr>
<?php 
	foreach ($arg as $key => $value) {
		echo "<tr>";
		echo "<td>" . $value['name'] . "</td>";
		echo "<td>" . $value['text'] . "</td>";
		echo "<td>" . "<a href=". URL . "main/delete/" . $value['id'] . " onclick=\"return confirm('Вы уверены?')\">Удалить</a>" . "</td>";
		echo "<td>" . "<a href=". URL . "main/update/" . $value['id'] . ">Обновить</a>" . "</td>";
		echo "</tr>";
	}
 ?>
 </table>
 <?php for ($i=1; $i <= $page; $i++) { ?>
 		<a href="<?php echo URL?>main/index/<?php echo $i ?>"><?php echo $i; ?></a>
 	<?php } ?>
</main>