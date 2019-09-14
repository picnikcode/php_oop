<main>
	<h1>Autorization</h1>
	<?php echo $arg; 
	?>
	<form action="<?php echo URL; ?>autorizate/" method="POST">
		<input type="text" name="login" placeholder="Login">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Submit">
		<button><a href="<?php echo URL; ?>autorizate/register">Registration</a></button>
	</form>
</main>