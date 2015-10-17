<?php
/**
 * Post content without date.
 */
?>

<div class="panel panel-main panel-body panel-content">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="content-text">
		<?php the_content(); ?>
	</div>
</div>