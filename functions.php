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



		// Settings (posts and pages)
		$wp_customize->add_setting('post_border_radius_setting', array(
			'default' => '4'
		));

		$wp_customize->add_setting('post_background_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('post_title_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('post_title_hover_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('post_text_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('post_link_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('post_link_hover_color_setting', array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('post_footer_color_setting', array(
			'default' => '#888888',
			'sanitize_callback' => 'sanitize_hex_color'
		));



		// Settings (comments)
		$wp_customize->add_setting('comment_main_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_background_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_title_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_text_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_link_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_link_hover_color_setting', array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_footer_color_setting', array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_accent_width_setting', array(
			'default' => '5'
		));

		$wp_customize->add_setting('comment_accent1_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_accent2_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_accent3_color_setting', array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_form_text_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_form_link_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('comment_form_link_hover_color_setting', array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color'
		));



		// Settings (portfolio grid)
		$wp_customize->add_setting('portfolio_border_radius_setting', array(
			'default' => '4',
		));

		$wp_customize->add_setting('portfolio_border_hover_color_setting', array(
			'default' => '#cccccc',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_pic_background_color_setting', array(
			'default' => '#000000',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_pic_background_hover_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_pic_title_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_pic_title_hover_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_random_background_setting', array(
			'default' => '3',
		));

		$wp_customize->add_setting('portfolio_text_background1_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_background1_hover_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_background2_color_setting', array(
			'default' => '#444444',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_background2_hover_color_setting', array(
			'default' => '#777777',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_background3_color_setting', array(
			'default' => '#555555',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_background3_hover_color_setting', array(
			'default' => '#888888',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_title_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('portfolio_text_title_hover_color_setting', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color'
		));



		// Settings (footer)
		$wp_customize->add_setting('footer_text_content_setting', array(
			'default' => 'Enter something unique here!'
		));

		$wp_customize->add_setting('footer_background_color_setting', array(
			'default' => '#cccccc',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('footer_text_color_setting', array(
			'default' => '#333333',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('footer_link_color_setting', array(
			'default' => '#666666',
			'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_setting('footer_link_hover_color_setting', array(
			'default' => '#999999',
			'sanitize_callback' => 'sanitize_hex_color'
		));



		// Settings (other)
		$wp_customize->add_setting('other_background_color_setting', array(
			'default' => '#eeeeee',
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



		// Controls (posts and pages)
		$wp_customize->add_control('post_border_radius_setting', array(
			'label' => __('Border radius'),
			'section' => 'posts_section',
			'type' => 'range',
			'input_attrs' => array(
				'min' => 0,
				'max' => 10,
				'step' => 1
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_background_color_control',
			array (
				'label' => __('Background', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_background_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_title_color_control',
			array (
				'label' => __('Title text', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_title_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_title_hover_color_control',
			array (
				'label' => __('Title text (hover)', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_title_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_text_color_control',
			array (
				'label' => __('Text', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_text_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_link_color_control',
			array (
				'label' => __('Links', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_link_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_link_hover_color_control',
			array (
				'label' => __('Links (hover)', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_link_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'post_footer_color_control',
			array (
				'label' => __('Footer text', 'surreilytheme'),
				'section' => 'posts_section',
				'settings' => 'post_footer_color_setting')
		));



		// Controls (comments)
		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_main_color_control',
			array (
				'label' => __('Main headings', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_main_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_background_color_control',
			array (
				'label' => __('Comment background', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_background_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_title_color_control',
			array (
				'label' => __('Comment title text', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_title_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_text_color_control',
			array (
				'label' => __('Comment text', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_text_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_link_color_control',
			array (
				'label' => __('Comment links', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_link_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_link_hover_color_control',
			array (
				'label' => __('Comment links (hover)', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_link_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_footer_color_control',
			array (
				'label' => __('Comment footer text', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_footer_color_setting')
		));

		$wp_customize->add_control('comment_accent_width_setting', array(
			'label' => __('Comment accent width'),
			'section' => 'comments_section',
			'type' => 'range',
			'input_attrs' => array(
				'min' => 5,
				'max' => 15,
				'step' => 1
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_accent1_color_control',
			array (
				'label' => __('Base level accent', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_accent1_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_accent2_color_control',
			array (
				'label' => __('Level 2 accent', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_accent2_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_accent3_color_control',
			array (
				'label' => __('Level 3 accent', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_accent3_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_form_text_color_control',
			array (
				'label' => __('Reply form text', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_form_text_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_form_link_color_control',
			array (
				'label' => __('Reply form links', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_form_link_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'comment_form_link_hover_color_control',
			array (
				'label' => __('Reply form links (hover)', 'surreilytheme'),
				'section' => 'comments_section',
				'settings' => 'comment_form_link_hover_color_setting')
		));



		// Controls (portfolio grid)
		$wp_customize->add_control('portfolio_border_radius_setting', array(
			'label' => __('Border radius'),
			'section' => 'portfolio_section',
			'type' => 'range',
			'input_attrs' => array(
				'min' => 0,
				'max' => 10,
				'step' => 1
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_border_hover_color_control',
			array (
				'label' => __('Border (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_border_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_pic_background_color_control',
			array (
				'label' => __('Pictures: text background', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_pic_background_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_pic_background_hover_color_control',
			array (
				'label' => __('Pictures: text background (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_pic_background_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_pic_title_color_control',
			array (
				'label' => __('Pictures: text', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_pic_title_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_pic_title_hover_color_control',
			array (
				'label' => __('Pictures: text (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_pic_title_hover_color_setting')
		));

		$wp_customize->add_control('portfolio_text_random_background_setting', array(
			'label' => __('Blocks: number of random colours'),
			'description' => __('Select the number of random background colours to use.'),
			'section' => __('portfolio_section'),
			'type' => 'select',
			'choices' => array(
				'1' => __('1'),
				'2' => __('2'),
				'3' => __('3')
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_background1_color_control',
			array (
				'label' => __('Blocks: background 1', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_background1_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_background1_hover_color_control',
			array (
				'label' => __('Blocks: background 1 (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_background1_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_background2_color_control',
			array (
				'label' => __('Blocks: background 2', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_background2_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_background2_hover_color_control',
			array (
				'label' => __('Blocks: background 2 (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_background2_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_background3_color_control',
			array (
				'label' => __('Blocks: background 3', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_background3_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_background3_hover_color_control',
			array (
				'label' => __('Blocks: background 3 (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_background3_hover_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_title_color_control',
			array (
				'label' => __('Blocks: text', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_title_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'portfolio_text_title_hover_color_control',
			array (
				'label' => __('Blocks: text (hover)', 'surreilytheme'),
				'section' => 'portfolio_section',
				'settings' => 'portfolio_text_title_hover_color_setting')
		));



		// Controls (footer)
		$wp_customize->add_control('footer_text_content_setting', array(
			'label' => __('Text'),
			'section' => 'footer_section',
			'type' => 'textarea'
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'footer_background_color_control',
			array (
				'label' => __('Background', 'surreilytheme'),
				'section' => 'footer_section',
				'settings' => 'footer_background_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'footer_text_color_control',
			array (
				'label' => __('Text color', 'surreilytheme'),
				'section' => 'footer_section',
				'settings' => 'footer_text_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'footer_link_color_control',
			array (
				'label' => __('Links', 'surreilytheme'),
				'section' => 'footer_section',
				'settings' => 'footer_link_color_setting')
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'footer_link_hover_color_control',
			array (
				'label' => __('Links (hover)', 'surreilytheme'),
				'section' => 'footer_section',
				'settings' => 'footer_link_hover_color_setting')
		));



		// Controls (other)
		$wp_customize->add_control(new WP_Customize_Color_Control(
			$wp_customize,
			'other_background_color_control',
			array (
				'label' => __('Site background', 'surreilytheme'),
				'section' => 'other_section',
				'settings' => 'other_background_color_setting')
		));





		// Sections
		$wp_customize->add_section('navbar_section', array(
			'title' => __('Navbar settings'),
			'description' => __('Make changes to the navigation bar (navbar) colors.'),
			'priority' => 1000
		));

		$wp_customize->add_section('posts_section', array(
			'title' => __('Post/page settings'),
			'description' => __('Change the look of your posts and pages.'),
			'priority' => 1010
		));

		$wp_customize->add_section('comments_section', array(
			'title' => __('Comment settings'),
			'description' => __('Change the look of your comments.'),
			'priority' => 1020
		));

		$wp_customize->add_section('portfolio_section', array(
			'title' => __('Portfolio grid settings'),
			'description' => __('Change the look of the portfolio grid page theme.'),
			'priority' => 1030
		));

		$wp_customize->add_section('footer_section', array(
			'title' => __('Footer settings'),
			'description' => __('Change the look of the footer.'),
			'priority' => 1040
		));

		$wp_customize->add_section('other_section', array(
			'title' => __('Other settings'),
			'description' => __('Change any other settings here.'),
			'priority' => 2000
		));

	}
	add_action('customize_register', 'custom_theme_customization');

	// CSS insertion function for customization API
	function custom_css()
	{
		?>
			<style type="text/css">

				/* --- Panel --- */
				.panel-content.panel-main {
					border-radius: <?php echo get_theme_mod('post_border_radius_setting', '4'); ?>px;
				}

				.panel-content.panel-main div:first-child{
					border-top-left-radius: <?php echo get_theme_mod('post_border_radius_setting', '4'); ?>px;
					border-top-right-radius: <?php echo get_theme_mod('post_border_radius_setting', '4'); ?>px;
				}

				.panel-content.panel-main div:last-child{
					border-bottom-left-radius: <?php echo get_theme_mod('post_border_radius_setting', '4'); ?>px;
					border-bottom-right-radius: <?php echo get_theme_mod('post_border_radius_setting', '4'); ?>px;
				}

				.panel-main.panel-content .panel-heading,
				.panel-main.panel-content .panel-body, 
				.panel-main.panel-content .panel-footer {
					background-color: <?php echo get_theme_mod('post_background_color_setting', '#ffffff'); ?>;
				}

				.panel-main.panel-content > .panel-heading a {
					color: <?php echo get_theme_mod('post_title_color_setting', '#666666'); ?>;
				}

				.panel-main.panel-content > .panel-heading a:hover,
				.panel-main.panel-content > .panel-heading a:focus {
					color: <?php echo get_theme_mod('post_title_hover_color_setting', '#999999'); ?>;
				}

				.panel-main.panel-content > .panel-body {
					color: <?php echo get_theme_mod('post_text_color_setting', '#333333'); ?>;
				}

				.panel-main.panel-content > .panel-body a,
				.panel-main.panel-content > .panel-footer a {
					color: <?php echo get_theme_mod('post_link_color_setting', '#666666'); ?>;
				}

				.panel-main.panel-content > .panel-body a:hover,
				.panel-main.panel-content > .panel-body a:focus,
				.panel-main.panel-content > .panel-footer a:hover,
				.panel-main.panel-content > .panel-footer a:focus {
					color: <?php echo get_theme_mod('post_link_hover_color_setting', '#999999'); ?>;
				}

				.panel-main.panel-content > .panel-footer > .text-muted {
					color: <?php echo get_theme_mod('post_footer_color_setting', '#999999'); ?>;
				}



				/* --- Navbar --- */

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

				/* Button */
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

				/* Sub menu */
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



				/* --- Comments --- */

				/* Main */
				.comments-title,
				.comment-reply-title {
				  color: <?php echo get_theme_mod('comment_main_color_setting', '#333333'); ?>;
				}

				.panel-comment {
					color: <?php echo get_theme_mod('comment_text_color_setting', '#333333'); ?>;
					background-color: <?php echo get_theme_mod('comment_background_color_setting', '#ffffff'); ?>;
				}

				/* Font styles */
				.panel-comment b {
					color: <?php echo get_theme_mod('comment_title_color_setting', '#333333'); ?>;
				}

				.panel-comment a {
					color: <?php echo get_theme_mod('comment_link_color_setting', '#666666'); ?>;
				}

				.panel-comment a:hover,
				.panel-comment a:focus {
					color: <?php echo get_theme_mod('comment_link_hover_color_setting', '#999999'); ?>;
				}

				.panel-comment .text-muted {
					color: <?php echo get_theme_mod('comment_footer_color_setting', '#666666'); ?>;
				}

				/* Accents */
				.panel-comment .accent {
					width: <?php echo get_theme_mod('comment_accent_width_setting', '5'); ?>px;
				}

				.panel-comment .accent-1 {
					background-color: <?php echo get_theme_mod('comment_accent1_color_setting', '#333333'); ?>;
				}

				.panel-comment .accent-2 {
					background-color: <?php echo get_theme_mod('comment_accent2_color_setting', '#666666'); ?>;
				}

				.panel-comment .accent-3 {
					background-color: <?php echo get_theme_mod('comment_accent3_color_setting', '#999999'); ?>;
				}

				/* Form */
				.comment-respond {
					color: <?php echo get_theme_mod('comment_form_text_color_setting', '#333333'); ?>;
				}

				.comment-respond a {
					color: <?php echo get_theme_mod('comment_form_link_color_setting', '#666666'); ?>;
				}

				.comment-respond a:hover,
				.comment-respond a:focus {
					color: <?php echo get_theme_mod('comment_form_link_hover_color_setting', '#999999'); ?>;
				}



				/* --- Portfolio --- */

				/* Border */
				.stretch {
					border-radius: <?php echo get_theme_mod('portfolio_border_radius_setting', '4'); ?>px;
				}

				a:hover .stretch {
					-webkit-box-shadow: 0px 0px 0px 4px <?php echo get_theme_mod('portfolio_border_hover_color_setting', '#cccccc'); ?>;
					-moz-box-shadow: 0px 0px 0px 4px <?php echo get_theme_mod('portfolio_border_hover_color_setting', '#cccccc'); ?>;
					box-shadow: 0px 0px 0px 4px <?php echo get_theme_mod('portfolio_border_hover_color_setting', '#cccccc'); ?>;
				}

				/* Image block */
				div.block-image-title {
					background-color: <?php echo get_theme_mod('portfolio_pic_background_color_setting', '#000000'); ?>;
					border-bottom-left-radius: <?php echo get_theme_mod('portfolio_border_radius_setting', '4'); ?>px;
					border-bottom-right-radius: <?php echo get_theme_mod('portfolio_border_radius_setting', '4'); ?>px;
				}

				a:hover div.block-image-title {
					background-color: <?php echo get_theme_mod('portfolio_pic_background_hover_color_setting', '#333333'); ?>;
				}

				div.block-image-title p {
					color: <?php echo get_theme_mod('portfolio_pic_title_color_setting', '#ffffff'); ?>;
				}

				a:hover div.block-image-title p {
					color: <?php echo get_theme_mod('portfolio_pic_title_hover_color_setting', '#ffffff'); ?>;
				}

				/* Text block */
				div.block-text-1 {
					background-color: <?php echo get_theme_mod('portfolio_text_background1_color_setting', '#333333'); ?>;
				}

				a:hover div.block-text-1 {
					background-color: <?php echo get_theme_mod('portfolio_text_background1_hover_color_setting', '#666666'); ?>;
				}

				div.block-text-2 {
					background-color: <?php echo get_theme_mod('portfolio_text_background2_color_setting', '#444444'); ?>;
				}

				a:hover div.block-text-2 {
					background-color: <?php echo get_theme_mod('portfolio_text_background2_hover_color_setting', '#777777'); ?>;
				}

				div.block-text-3 {
					background-color: <?php echo get_theme_mod('portfolio_text_background3_color_setting', '#555555'); ?>;
				}

				a:hover div.block-text-3 {
					background-color: <?php echo get_theme_mod('portfolio_text_background3_hover_color_setting', '#888888'); ?>;
				}

				div.block-text p {
					color: <?php echo get_theme_mod('portfolio_text_title_color_setting', '#ffffff'); ?>;
				}

				a:hover div.block-text p {
					color: <?php echo get_theme_mod('portfolio_text_title_hover_color_setting', '#ffffff'); ?>;
				}


				/* --- Footer --- */
				body {
					background-color: <?php echo get_theme_mod('footer_background_color_setting', '#cccccc'); ?>;
				}

				.footer p {
					color: <?php echo get_theme_mod('footer_text_color_setting', '#333333'); ?>;
				}

				.footer a {
					color: <?php echo get_theme_mod('footer_link_color_setting', '#666666'); ?>;
				}

				.footer a:hover,
				.footer a:focus {
					color: <?php echo get_theme_mod('footer_link_hover_color_setting', '#999999'); ?>;
				}

				/* --- Other --- */
				.body.max-width {
					background-color: <?php echo get_theme_mod('other_background_color_setting', '#eeeeee'); ?>;
				}

			</style>
		<?php
	}
	add_action('wp_head', 'custom_css');

?>