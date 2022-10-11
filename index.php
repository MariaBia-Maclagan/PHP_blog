<?php require( 'includes/posts.php' );?>
<?php require( 'templates/header.php' ); ?>
<?php



$all_posts = get_all_posts();

// URL to view number of posts /?view=1
// $_GET super global variable which is used to collect form data
$post_found = false; // 
if ( isset( $_GET['view'] ) ) {  // isset a function if $_GET exists 
	$post_found = get_post( $_GET['view'] ); // function get_post will return the post or false
	if ( $post_found ) {
		$all_posts = [ $post_found ];
	}
	}


?>

	<div class="posts">
		<?php foreach ( $all_posts as $post ): ?> 
			<article class="post">
				<header>
					<h2 class="post-title">
                    <a href="?view=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
					</h2>
				</header>
				<div class="post-content">
                <?php if ( $post_found ): ?>
						<?php echo $post['content']; ?>
					<?php else: ?>
						<?php echo $post['excerpt']; ?>
					<?php endif; ?>
				</div>
                <footer>
				<span class="post-date">
						Posted in:
						<?php	echo strftime( '%d %b %Y', strtotime( $post['published_on'] ) );	?>
					</span>
                    </footer>
			</article>
		<?php endforeach; ?>
	</div>

    <?php 
    require( 'templates/footer.php' );
   