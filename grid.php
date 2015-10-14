<?php
	/**
	 * Template Name: Parent with Child Grid
	 *
	 * @package WordPress
	 * @subpackage Twenty_Twelve
	 * @since Twenty Twelve 1.0
	 */
	 
	get_header(); 
?>

<div id="primary" class="site-content">

	<!-- Parent content -->
	<div id="content" role="main">

		<?php 
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'page' );
			endwhile; // end of the loop. 
		?>
		
	</div>
	
	<!-- Child content -->
	<?php
		// Get child pages
		$query_args = array(
			'post_parent' => $post->ID,
			'post_type' => 'page',
			'post_status' => 'publish'
		);
		$query = null;
		$query = new WP_Query($query_args);
		
		while ($query->have_posts()) : $query->the_post();	
	?>
		
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 no-padding">
					
		<?php
			// Get the image URL
			if (has_post_thumbnail())
			{
		?>
		
		<a href="<?php the_permalink(); ?>">
			<div class="block">
				<?php the_post_thumbnail('block', array('class' => 'img-responsive', 'style' => 'width: 100%;')); ?>
				<div class="block-div">
					<p><?php the_title(); ?></p>
				</div>
			</div>
		</a>
		
		<?php
			}
			else
			{
		?>
		
		<?php
			}
		?>
					
	</div>
		
	<?php
		endwhile;
	?>
	
</div>


<?php get_footer(); ?>
