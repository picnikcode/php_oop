<p>Главная страница</p>

<?php foreach ($users as $key => $value): ?>

	<h3><?php echo 'Login - ' . $value['login']; ?></h3>
	<p><?php echo 'Name - ' . $value['name']; ?></p>
	<hr>
<?php endforeach;?>
