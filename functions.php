<?php

	// --- SETTINGS --- //

	// Basic settings
	add_theme_support('post-thumbnails');
	add_image_size('block', 640, 480, true);

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	// Register menu
	register_nav_menus(array('primary' => __('Primary Menu', 'surreilytheme')));

	// Function to get comment author
	// http://wordpress.stackexchange.com/questions/108447/get-comment-author-link-not-working-properly
	function custom_get_comment_author_link () {
	    global $comment;

	    if ($comment->user_id == '0') {
	        if (!empty ($comment->comment_author_url)) {
	            $url = $comment->comment_author_url;
	        } else {
	            $url = '#';
	        }
	    } else {
	        $url = get_author_posts_url($comment->user_id);
	    }

	    echo "<a href=\"" . $url . "\">" .get_comment_author () . "</a>";
	}

	// Theme customization API
	function custom_theme_customization($wp_customize) {

		// 

		// Settings (navbar)
		$wp_customize->add_setting('navbar_background_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_brand_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_brand_hover_color_setting', array(
			'default' => '#cccccc',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_link_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_link_hover_color_setting', array(
			'default' => '#cccccc',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_link_background_hover_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_button_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_sub_background_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_sub_link_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_sub_link_hover_color_setting', array(
			'default' => '#cccccc',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('navbar_sub_link_background_hover_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		// Settings (content)
		$wp_customize->add_setting('content_background_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		// Controls (navbar)
		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_background_color_control',
			array (
				'label' => __('Background', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_background_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_brand_color_control',
			array (
				'label' => __('Brand', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_brand_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_brand_hover_color_control',
			array (
				'label' => __('Brand (hover)', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_brand_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_link_color_control',
			array (
				'label' => __('Link text', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_link_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_link_hover_color_control',
			array (
				'label' => __('Link text (hover)', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_link_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_link_background_hover_color_control',
			array (
				'label' => __('Link background (hover)', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_link_background_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_button_color_control',
			array (
				'label' => __('Button (on narrow browsers)', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_button_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_sub_background_color_control',
			array (
				'label' => __('Sub-menu background', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_sub_background_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_sub_link_color_control',
			array (
				'label' => __('Sub-menu link text', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_sub_link_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_sub_link_hover_color_control',
			array (
				'label' => __('Sub-menu link text (hover)', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_sub_link_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'navbar_sub_link_background_hover_color_control',
			array (
				'label' => __('Sub-menu link background (hover)', 'surreilytheme'),
				'section' => 'navbar_section',
				'settings' => 'navbar_sub_link_background_hover_color_setting')
		));

		// Controls (content)
		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'content_background_color_control',
			array (
				'label' => __('Background', 'surreilytheme'),
				'section' => 'content_section',
				'settings' => 'content_background_color_setting')
		));

		/*$wp_customize->add_control('navbar_brand_color', array(
			'label' => __('')
			'type' => 'textarea',
			'section' => 'navbar_section'
		));*/

		$wp_customize->add_section('navbar_section', array(
			'title' => __('Navbar settings'),
			'description' => __('Make changes to the navigation bar (navbar) colors.'),
			'priority' => 1000
		));

		$wp_customize->add_section('content_section', array(
			'title' => __('Content settings'),
			'description' => __('Change the look of your posts and pages.'),
			'priority' => 1010
		));

	}
	add_action('customize_register', 'custom_theme_customization');

	// CSS insertion function for customization API
	function custom_css()
	{
		?>
			<style type="text/css">

				/* --- Navbar --- /*

				/* Main */
				.navbar-custom {
				    background-color: <?php echo get_theme_mod('navbar_background_color_setting', '#333333'); ?>;
				}

				/* Brand */
				.navbar-custom .navbar-brand {
				    color: <?php echo get_theme_mod('navbar_brand_color_setting', '#ffffff'); ?>;
				}
				.navbar-custom .navbar-brand:hover,
				.navbar-custom .navbar-brand:focus {
				    color: <?php echo get_theme_mod('navbar_brand_hover_color_setting', '#cccccc'); ?>;
				}

				/* Link */
				.navbar-custom .navbar-nav > li > a {
				    color: <?php echo get_theme_mod('navbar_link_color_setting', '#ffffff'); ?>;
				}
				.navbar-custom .navbar-nav > li > a:hover,
				.navbar-custom .navbar-nav > li > a:focus {
				    color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				    background-color: <?php echo get_theme_mod('navbar_link_background_hover_color_setting', '#666666'); ?>;
				}
				.navbar-custom .navbar-nav > .active > a, 
				.navbar-custom .navbar-nav > .active > a:hover, 
				.navbar-custom .navbar-nav > .active > a:focus {
				    color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				    background-color: <?php echo get_theme_mod('navbar_link_background_hover_color_setting', '#666666'); ?>;
				}
				.navbar-custom .navbar-nav > .open > a, 
				.navbar-custom .navbar-nav > .open > a:hover, 
				.navbar-custom .navbar-nav > .open > a:focus {
				    color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				    background-color: <?php echo get_theme_mod('navbar_link_background_hover_color_setting', '#666666'); ?>;
				}

				/* Caret */
				.navbar-custom .navbar-nav > .dropdown > a .caret {
				    border-top-color: <?php echo get_theme_mod('navbar_link_color_setting', '#ffffff'); ?>;
				    border-bottom-color: <?php echo get_theme_mod('navbar_link_color_setting', '#ffffff'); ?>;
				}

				.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
				.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
				    border-top-color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				    border-bottom-color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				}

				.navbar-custom .navbar-nav > .open > a .caret, 
				.navbar-custom .navbar-nav > .open > a:hover .caret, 
				.navbar-custom .navbar-nav > .open > a:focus .caret {
				    border-top-color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				    border-bottom-color: <?php echo get_theme_mod('navbar_link_hover_color_setting', '#cccccc'); ?>;
				}

				.navbar-custom .dropdown-menu > li > a {
				  	color: red;
				}

				/* mobile version */
				.navbar-custom .navbar-toggle {
				    border-color: <?php echo get_theme_mod('navbar_button_color_setting', '#ffffff'); ?>;
				}

				.navbar-custom .navbar-toggle:hover,
				.navbar-custom .navbar-toggle:focus {
				    background-color: <?php echo get_theme_mod('navbar_button_color_setting', '#ffffff'); ?>;
				}

				.navbar-custom .navbar-toggle .icon-bar {
				    background-color: <?php echo get_theme_mod('navbar_button_color_setting', '#ffffff'); ?>;
				}

				.navbar-custom .navbar-toggle:hover .icon-bar,
				.navbar-custom .navbar-toggle:focus .icon-bar {
				    background-color: <?php echo get_theme_mod('navbar_background_color_setting', '#333333'); ?>;
				}

				.navbar-custom .navbar-nav .open .dropdown-menu {
					background-color: <?php echo get_theme_mod('navbar_sub_background_color_setting', '#333333'); ?>;
				}

				.navbar-custom .navbar-nav .open .dropdown-menu > li > a {
				  	color: <?php echo get_theme_mod('navbar_sub_link_color_setting', '#ffffff'); ?>;
				}

				.navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
				.navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
				    color: <?php echo get_theme_mod('navbar_sub_link_hover_color_setting', '#cccccc'); ?>;
				    background-color: <?php echo get_theme_mod('navbar_sub_link_background_hover_color_setting', '#666666'); ?>;
				}

			</style>
		<?php
	}
	add_action('wp_head', 'custom_css');

?>