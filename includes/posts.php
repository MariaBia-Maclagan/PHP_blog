<?php

// return the posts 
function get_all_posts() {
	return [
		[
			'id' => 1,
			'title' => 'Applications of PHP',
			'excerpt' => 'PHP is a server scripting language used for making dynamic web pages.',
			'content' => 'PHP is a server scripting language used for making dynamic web pages. That means PHP allows you to use scripts on a web server to produce a response customized for each client (user) request. PHP is the foundation of:

                Many CMS (WordPress, Drupal, Joomla)
                E-Commerce Platforms (WooCommerce, Magento)
                Web Development Frameworks (Laravel, CakePHP, Symfony)',
			'published_on' => '2022-02-11 10:15:00',
		],
		[
			'id' => 2,
			'title' => 'Parsing Variables within PHP Strings',
			'excerpt' => 'In PHP, variables can be parsed within strings specified with double quotes (").',
			'content' => 'In PHP, variables can be parsed within strings specified with double quotes (").

            This means that within the string, the computer will replace an occurence of a variable with that variable’s value.
            
            When additional valid identifier characters (ie. characters that could be included in a variable name) are intended to appear adjacent to the variable’s value, the variable name can be wrapped in curly braces {}, thus avoiding confusion as to the variable’s name.',
			'published_on' => '2022-01-11 10:15:00',
		],
	];
}

// fetch and return only one post

function get_post( $post_id ) {
	foreach ( get_all_posts() as $post ) {
		if ( $post['id'] == $post_id ) {
			return $post;
		}
	}
	return false;
}