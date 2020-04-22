<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TWD_Starter_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="inner-width">
			<div class="footer-menus">
				<nav id="footer-navigation" class="footer-navigation alignleft">
					<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
				</nav>
				<nav id="social-navigation" class="social-navigation alignright">
					<?php wp_nav_menu( array( 'theme_location' => 'social') ); ?>
				</nav>
			</div>

			<div class="site-info">
				<?php esc_html_e( 'Created by ', 'twd' ); ?><a href="<?php echo esc_url( __( 'https://wp.bcitwebdeveloper.ca/', 'twd' ) ); ?>"><?php esc_html_e( 'Jonathon Leathers', 'twd' ); ?></a>
			</div><!-- .site-info -->
		</div><!-- .inner-width -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
