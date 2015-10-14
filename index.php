<?php get_header(); ?>

<!-- Content -->
<div class="col-md-10 panel-padding">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>