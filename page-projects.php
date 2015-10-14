<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

<?php 
	$query_args = array(
		'post_parent' => $post->ID,
		'post_type' => 'page',
		'post_status' => 'publish'
	);
	
	$query = null;
	$query = new WP_Query($query_args);
	
	while ($query->have_posts()) : $query->the_post();
		the_title();
	endwhile;
?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php comments_template( '', true ); ?>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
<?php get_footer(); ?>
