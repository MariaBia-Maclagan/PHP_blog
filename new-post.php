
<?php require( 'templates/header.php' ); ?>
	<form action="" method="post">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" value="">

		<label for="excerpt">Excerpt</label>
		<input type="text" name="excerpt" id="excerpt" value="">

		<label for="content">Content</label>
		<textarea name="content" id="content" cols="30" rows="30"></textarea>

		<p>
			<input type="submit" name="submit-new-post" value="New postt">
		</p>
	</form>
<?php require( 'templates/footer.php' );


