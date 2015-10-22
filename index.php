<?php get_header(); ?>

<!-- Content -->
<?php while(have_posts()) : the_post(); ?>
	<?php get_template_part('content'); ?>
<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>