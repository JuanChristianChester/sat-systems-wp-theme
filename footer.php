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
		<div class="digital-newspaper-container" id="footerNewsPaperContainer">
			<div class="row" id="certifiedLogosContainer">
				<div class="certification-logo">
					<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/JOSCAR_PNG_Format-removebg-preview.png"; ?> alt="JOSCAR Logo">
				</div>
				<div class="certification-logo">
					<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/RGB_IMCA_Logo_-_Supplier__S__Member-removebg-preview.png"; ?> alt="IMCA Logo">
				</div>
				<div class="certification-logo">
					<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/SGS_ISO_9001_TCL_HR-removebg-preview.png"; ?> alt="SGS Logo">
				</div>
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
		<div class="digital-newspaper-container" id="footerNewsPaperContainer">
			<div class="footer-inner digital-newspaper-container">
				<div class="footer-widget column-three">
					<ul>
						<a href="<?php echo home_url(); ?>">Home</a>
						<a href="<?php echo home_url('/index.php/helpdesk'); ?>">Helpdesk</a>
						<a href="<?php echo home_url('index.php/category/news'); ?>">News</a>
						<a href="<?php echo home_url('/index.php/contact-us-2'); ?>">Contact</a>
						<a href="<?php echo home_url('/index.php/about-2'); ?>">About</a>
					</ul>
				</div>
				<div class="footer-widget column-three">
					<a href="<?php echo home_url('/index.php/instrumentation-2'); ?>">Instrumentation</a>
					<a href="<?php echo home_url('/index.php/data-logging'); ?>">Data Logging</a>
					<a href="<?php echo home_url('/index.php/communications'); ?>">Communications</a>
				</div>
				<div class="footer-widget column-three">
					<a href="<?php echo home_url('index.php/commercial-diving'); ?>">Commercial Diving</a>
					<a href="<?php echo home_url('index.php/medical'); ?>">Medical</a>
					<a href="<?php echo home_url('index.php/defence'); ?>">Defense</a>
					<a href="<?php echo home_url('index.php/tunnelling'); ?>">Tunneling</a>
					<a href="<?php echo home_url('index.php/leisure-submarines'); ?>">Leisure Submarines</a>
					<a href="<?php echo home_url('index.php/hyperbaric-chambers'); ?>">Hyperbaric Chambers</a>
				</div>
			</div>
		</div>
	</div>
	<div class="digital-newspaper-container" id="satSysTriangle">
		<div class="footer-inner digital-newspaper-container">
			<div class="footer-widget column-three">
				<img src=<?php echo get_stylesheet_directory_uri() . "/assets/images/custom-images/SAT_Triangle_Logo-removebg-preview.png" ?> alt="SAT Systems Logo">
			</div>
		</div>
	</div>
	<div class="digital-newspaper-container" id="footerBottomSection">
		<div class="footer-inner digital-newspaper-container">
			<div class="footer-widget column-three" id="locationRow">
				<p>SAT Systems Ltd, 26 Main Road, Kirk Michael, Isle of Man, IM6 1SS</p>
			</div>
			<div class="footer-widget column-three" id="policiesRow">
				<a href="<?php echo home_url('index.php/privacy-policy-2'); ?>">Privacy Policy</a>
				<a href="<?php echo home_url('index.php/quality-policy/'); ?>">Quality Policy</a>
			</div>
			<div class="social-icons-footer">
				<a href="https://twitter.com/SAT_Systems" target="_blank">
					<img class="footer-social-icons" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/custom-images/Twitter.png'; ?>" alt="Twitter">
				</a>
				<a href="https://www.facebook.com/SAT-Systems-ltd" target="_blank">
					<img class="footer-social-icons" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/custom-images/Facebook.png'; ?>" alt="Facebook">
				</a>
				<a href="https://www.youtube.com/user/SatsystemsLtd" target="_blank">
					<img class="footer-social-icons" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/custom-images/Youtube.png'; ?>" alt="Youtube">
				</a>
				<a href="https://im.linkedin.com/in/fred-stokes-5ab38922?original_referer=https%3A%2F%2F2126669.linux.studentwebserver.co.uk%2F" target="_blank">
					<img class="footer-social-icons" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/custom-images/LinkedIn.png'; ?>" alt="LinkedIn">
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