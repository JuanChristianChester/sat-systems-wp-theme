<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital Newspaper
 */

/**
 * hook - digital_newspaper_before_footer_section
 * 
 */
do_action('digital_newspaper_before_footer_section');
?>
<footer id="colophon" class="site-footer dark_bk">

	<div class="digital-newspaper-container" id="footerNewsPaperContainer">
		<div class="row" id="certifiedRow">
			<h2 id="certifiedFooterText">Certified</h2>
		</div>
	</div>
	<div class="digital-newspaper-container" id="footerNewsPaperContainer">
		<div class="row" id="certifiedLogosContainer">
			<div class="certification-logo">
				<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/JOSCAR_PNG_Format-removebg-preview.png"; ?>>
			</div>
			<div class="certification-logo">
				<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/RGB_IMCA_Logo_-_Supplier__S__Member-removebg-preview.png"; ?>>
			</div>
			<div class="certification-logo">
				<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/SGS_ISO_9001_TCL_HR-removebg-preview.png"; ?>>
			</div>
		</div>
	</div>
	<div class="digital-newspaper-container" id="footerNewsPaperContainer">
		<div class="row" id="ltdRow">
			<h2 id="ltdFooterText">Sub Aquatic Technical Systems Ltd</h2>
		</div>
	</div>
	<div class="digital-newspaper-container" id="footerNewsPaperContainer">
		<div class="footer-inner digital-newspaper-container">
			<div class="row">
				<div class="footer-widget column-three">
					<ul>
						<a href="<?php echo home_url(); ?>">Home</a>
						<a href="<?php echo home_url('/helpdesk'); ?>">Helpdesk</a>
						<a href="<?php echo home_url('/category/news'); ?>">News</a>
						<a href="<?php echo home_url('/contact-us-2'); ?>">Contact</a>
						<a href="<?php echo home_url('/about-2'); ?>">About</a>
					</ul>
				</div>

				<div class="footer-widget column-three">
					<ul>
						<a>Products and Solutions</a>
						<a>Instrumentation</a>
						<a>Data Logging</a>
						<a>Communication</a>
					</ul>
				</div>
				<div class="footer-widget column-three">
					<ul>
						<a>Industries</a>
						<a>Commercial Diving</a>
						<a>Medical</a>
						<a>Defense</a>
						<a>Tunneling</a>
						<a>Leisure Submarines</a>
						<a>Hyperbaric Chambers</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="digital-newspaper-container" id="satSysTriangle">
		<div class="footer-inner digital-newspaper-container">
			<div class="footer-widget column-three">
				<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/SAT_Triangle_Logo-removebg-preview.png" ?>>
			</div>
		</div>
	</div>
	<div class="digital-newspaper-container" id="footerBottomSection">
		<div class="footer-inner digital-newspaper-container">
			<div class="footer-widget column-three" id="locationRow">
				<p>SAT Systems Ltd, 26 Main Road, Kirk Michael, Isle of Man, IM6 1SS</p>
			</div>
			<div class="footer-widget column-three" id="policiesRow">
				<ul>
					<a>Terms & Conditions</a>
					<a>Privacy Policy</a>
					<a>Quality Policy</a>
				</ul>
			</div>
			<ul class="social-icons-footer">
				<a>
					<img class="footer-social-icons" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/Twitter.png"; ?>>
				</a>
				<a>
					<img class="footer-social-icons" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/Facebook.png"; ?>>
				</a>
				<a>
					<img class="footer-social-icons" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/Youtube.png"; ?>>
				</a>
				<a>
					<img class="footer-social-icons" src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/LinkedIn.png"; ?>>
				</a>
		</div>
	</div>
	</div>
	<?php
	/**
	 * Function - digital_newspaper_footer_sections_html
	 * 
	 * @since 1.0.0
	 * 
	 */
	digital_newspaper_footer_sections_html();

	/**
	 * Function - digital_newspaper_bottom_footer_sections_html
	 * 
	 * @since 1.0.0
	 * 
	 */
	digital_newspaper_bottom_footer_sections_html();
	?>
</footer><!-- #colophon -->
<?php
/**
 * hook - digital_newspaper_after_footer_hook
 *
 * @hooked - digital_newspaper_scroll_to_top
 *
 */
if (has_action('digital_newspaper_after_footer_hook')) {
	do_action('digital_newspaper_after_footer_hook');
}
?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>