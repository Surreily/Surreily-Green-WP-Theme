<?php get_header(); ?>

<!-- Content -->
<?php while(have_posts()) : the_post(); ?>
	<?php get_template_part('content'); ?>
<?php endwhile; wp_reset_query(); ?>

<!-- Page navigation -->
<nav>
  	<ul class="pager">
  		<?php 
  		if(get_previous_posts_link()) {
  		?>
  			<li class="previous">
  				<?php previous_posts_link("Newer posts"); ?>
  			</li>
  		<?php
  		} else {
  		?>
  			<li class="previous disabled">
  				<a href="#">Newer posts</a>
  			</li>
  		<?php
  		}
  		if (get_next_posts_link()) {
  		?>
  			<li class="next">
  				<?php next_posts_link("Older posts"); ?>
  			</li>
  		<?php
  		} else {
  		?>
  			<li class="next disabled">
  				<a href="#">Older posts</a>
  			</li>
  		<?php
  		}
  		?>
  </ul>
</nav>

<?php get_footer(); ?>