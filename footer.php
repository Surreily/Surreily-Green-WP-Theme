				<!-- End of main page -->
			</div>
		</div>

		<div class="footer">
			<div class="container footer-text">
				<p><?php echo get_theme_mod('footer_text_content_setting', 'Enter something unique here!'); ?> Powered by <a href="https://wordpress.org/">Wordpress</a> and <a href="https://www.getbootstrap.com/">Bootstrap</a>.</p>
			</div>
		</div>
		
		<!-- Scripts -->
		<script src = "<?php bloginfo('template_directory'); ?>/bootstrap/js/jquery-1.11.3.min.js"></script>
		<script src = "<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
	
	</body>

	<?php wp_footer(); ?>
	
</html>