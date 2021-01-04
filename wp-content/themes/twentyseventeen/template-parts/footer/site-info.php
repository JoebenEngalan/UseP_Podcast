<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://github.com/JoebenEngalan/UseP_Podcast', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: WordPress */
		printf( __( 'Edited by %s', 'twentyseventeen' ), 'OJT2 Engalan, Arbizo, Balansag, ' );
		?>
	</a>
</div><!-- .site-info -->
