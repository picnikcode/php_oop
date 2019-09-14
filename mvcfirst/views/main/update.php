<main>
	<h1>Update Article</h1>
	<?php echo $page; ?>
		<form action="<?php echo URL;?>main/update/<?php echo $arg[0]['id'];?>" method="POST"> 
		<input type="text" name="name" value="<?php echo $arg[0]['name'];?>">
		<input type="text" name="text" value="<?php echo $arg[0]['text'];?>">
		<input type="text" name="category" value="<?php echo $arg[0]['category_id'];?>">
		<input type="submit" name="submit" value="Submit">
		<button><a href="<?php echo URL; ?>main/">Main Page</a></button>
	</form>
</main>
