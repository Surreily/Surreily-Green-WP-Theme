<?php get_header(); ?>

<!-- Content -->
<div class="panel-padding">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part('content'); ?>
		<?php comments_template(); ?>
	<?php endwhile; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>