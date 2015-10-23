<?php
	/**
	 * Display a page.
	 */
	get_header();
?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php if ( 'open' == $post->comment_status ) : ?>
        	<?php comments_template( '', true ); ?>
        <?php endif; ?>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
<?php get_footer(); ?>
