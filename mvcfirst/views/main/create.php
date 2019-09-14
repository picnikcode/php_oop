<main>
	<h1>Create Article</h1>
	<?php echo $arg; ?>
		<form action="<?php echo URL;?>main/create" method="POST"> 
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="text" placeholder="Text">
		<input type="text" name="category" placeholder="Category">
		<input type="submit" name="submit" value="Submit">
		<button><a href="<?php echo URL; ?>main/">Main Page</a></button>
	</form>
</main>
