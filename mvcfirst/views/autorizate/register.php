<main>
	<h1>Registory</h1>
	<?php echo $arg; ?>
		<form action="<?php echo URL;?>autorizate/register" method="POST"> 
		<input type="text" name="login" placeholder="Login">
		<input type="text" name="name" placeholder="Name">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Submit">
		<button><a href="<?php echo URL; ?>autorizate/">Autorization</a></button>
	</form>
</main>