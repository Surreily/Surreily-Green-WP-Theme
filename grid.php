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
		
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 portfolio">
					
		<a href="<?php the_permalink(); ?>">
			<div class="block">
				<?php
					// If the post has a featured image, create an image block
					if (has_post_thumbnail())
					{
				?>
				
						<?php the_post_thumbnail('block', array('class' => 'img-responsive stretch block-image', 'style' => 'width: 100%;')); ?>
						<div class="block-image-title">
							<p><?php the_title(); ?></p>
						</div>
				
				<?php
					}
					// Otherwise, create a text block
					else
					{
						// Choose a colour
						$random_count = 1;
						if(get_theme_mod('portfolio_text_random_background_setting', '1') != '1')
						{
							$random_count = 1 + fmod(strlen(get_the_title()), (int)get_theme_mod('portfolio_text_random_background_setting', '1'));
						}
				?>

						<div class="stretch block-text block-text-<?php echo $random_count; ?>">
							<p><?php the_title(); ?></p>
						</div>

				<?php
					}
				?>
			</div>
		</a>
					
	</div>
		
	<?php
		endwhile;
	?>

	<script>
		// Add dotdotdot to the divs
		$(document).ready(function() {
			$(".block-text").dotdotdot({
				// Config
			});
		});

		// Resize window listener
		$(window).resize(function() {
			$(".block-text").trigger("update");
		})
	</script>
	
</div>


<?php get_footer(); ?>
