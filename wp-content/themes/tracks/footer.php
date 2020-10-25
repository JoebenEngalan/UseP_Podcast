<?php do_action( 'tracks_main_bottom' ); ?>
</div> <!-- .main -->

<?php 
// Elementor `footer` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) :
?>
<footer id="site-footer" class="site-footer" role="contentinfo">
	<h1>
		<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'title' ); ?></a>
	</h1>
	<?php if ( get_bloginfo( 'description' ) && ( get_theme_mod( 'tagline_display_setting' ) == 'header-footer' ) || ( get_theme_mod( 'tagline_display_setting' ) == 'footer' ) ) { ?>
		<p class="site-description">
			<?php esc_html( bloginfo( 'description' ) ); ?>
		</p>
	<?php }
	get_template_part( 'menu', 'footer' );
	if ( ( get_theme_mod( 'social_icons_display_setting' ) == 'header-footer' ) || ( get_theme_mod( 'social_icons_display_setting' ) == 'footer' ) ) {
		get_template_part( 'content/social-icons' );
	}
	get_template_part( 'sidebar', 'footer' );
	?>
	<div class="design-credit">
		<p>
			This is a Test Footer
		</p>
	</div>
</footer>
<?php endif; ?>

<?php if ( get_theme_mod( 'additional_options_return_top_settings' ) != 'hide' ) { ?>
	<button id="return-top" class="return-top">
		<i class="fas fa-arrow-up"></i>
	</button>
<?php }

do_action( 'tracks_overflow_bottom' );

if ( get_theme_mod( 'ct_tracks_background_image_setting' ) ) {
	echo "<div class='background-image'></div>";
}
?>

</div><!-- .overflow-container -->

<?php wp_footer(); ?>
</body>
</html>