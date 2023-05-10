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
  do_action( 'digital_newspaper_before_footer_section' );
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
					<img src="http://localhost/wp-content/themes/sat-systems-wp-theme/assets/images/custom-images/JOSCAR_PNG_Format-removebg-preview.png">
				</div>
				<div class="certification-logo">
					<img src="http://localhost/wp-content/themes/sat-systems-wp-theme/assets/images/custom-images/RGB_IMCA_Logo_-_Supplier__S__Member-removebg-preview.png">
				</div>
				<div class="certification-logo">
					<img src="http://localhost/wp-content/themes/sat-systems-wp-theme/assets/images/custom-images/SGS_ISO_9001_TCL_HR-removebg-preview.png">
				</div>
			</div>
		</div>
		<div class="digital-newspaper-container" id="footerNewsPaperContainer">
			<div class="row" id="ltdRow">
				<h2 id="ltdFooterText">Sub Aquatic Technical Systems Ltd</h2>
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
		if( has_action( 'digital_newspaper_after_footer_hook' ) ) {
			do_action( 'digital_newspaper_after_footer_hook' );
		}
	?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>