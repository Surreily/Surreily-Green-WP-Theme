<?php
/**
 * Post content without date.
 */
?>

<div class="panel panel-main panel-content">
	<div class="panel-heading">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	<div class="panel-body">
		<?php the_content(); ?>
	</div>
</div>