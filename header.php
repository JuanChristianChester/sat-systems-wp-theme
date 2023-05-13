<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital Newspaper
 */

use Digital_Newspaper\CustomizerDefault as DN;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- add additional css as a child theme -->

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/additional.css">
</head>

<body <?php body_class(); ?> <?php digital_newspaper_schema_body_attributes(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'digital-newspaper'); ?></a>
		<div class="digital_newspaper_ovelay_div"></div>
		<?php
		/**
		 * hook - digital_newspaper_page_prepend_hook
		 * 
		 * @package Digital Newspaper
		 * @since 1.0.0
		 */
		do_action("digital_newspaper_page_prepend_hook");
		?>

		<header id="masthead" class="site-header layout--default layout--three">
			<?php
			/**
			 * Function - digital_newspaper_top_header_html
			 * 
			 * @since 1.0.0
			 * 
			 */
			digital_newspaper_top_header_html();

			/**
			 * Function - digital_newspaper_header_html
			 * 
			 * @since 1.0.0
			 * 
			 */
			digital_newspaper_header_html();
			?>
		</header><!-- #masthead -->
		<?php if (is_home() || is_page()) : ?>
			<h1 class="header-text"><?php echo get_the_title(); ?></h1>
		<?php elseif (is_category()) : ?>
			<h1 class="header-text"><?php echo single_cat_title(); ?></h1>
		<?php endif; ?>
		<!-- if get_field(header_img) is null, return a default image -->
		<?php if (get_field("header_img") == null) : ?>
			<img class="header-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/custom-images/clownfish.png" alt="header-image" width="500" height="600" />
		<?php else: ?>
		<img class="header-image" src="<?php echo get_field("header_img"); ?>" alt="header-image" width="500" height="600" />
		<?php endif; ?>
		<?php
		/**
		 * function - digital_newspaper_after_header_html
		 * 
		 * @since 1.0.0
		 */
		digital_newspaper_after_header_html();
