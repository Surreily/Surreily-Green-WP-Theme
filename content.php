<?php
/**
 * Post content with a date.
 */
?>

<div class="panel panel-main panel-body panel-content">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="content-text">
		<?php the_content(); ?>
	</div>
	<p class="text-muted">
		<span class="pull-left">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></span>
		<span class="pull-right"><?php edit_post_link('Edit', '[', ']'); ?></span>
	</p>
</div>