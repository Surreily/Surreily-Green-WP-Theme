<?php

	// --- SETTINGS --- //

	// Basic settings
	add_theme_support('post-thumbnails');
	add_image_size('block', 640, 480, true);

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	// Register menu
	register_nav_menus(array('primary' => __('Primary Menu', 'surreilytheme')));

	// Function to get comment author
	// http://wordpress.stackexchange.com/questions/108447/get-comment-author-link-not-working-properly
	function custom_get_comment_author_link () {
	    global $comment;

	    if ($comment->user_id == '0') {
	        if (!empty ($comment->comment_author_url)) {
	            $url = $comment->comment_author_url;
	        } else {
	            $url = '#';
	        }
	    } else {
	        $url = get_author_posts_url($comment->user_id);
	    }

	    echo "<a href=\"" . $url . "\">" .get_comment_author () . "</a>";
	}
?>