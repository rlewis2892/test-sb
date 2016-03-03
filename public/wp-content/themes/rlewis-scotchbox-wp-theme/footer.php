<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ScotchBox_WP_Test_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'rlewis-scotchbox-wp-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'rlewis-scotchbox-wp-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rlewis-scotchbox-wp-theme' ), 'rlewis-scotchbox-wp-theme', '<a href="http://rochellelewis.com" rel="designer">rlewis37</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
