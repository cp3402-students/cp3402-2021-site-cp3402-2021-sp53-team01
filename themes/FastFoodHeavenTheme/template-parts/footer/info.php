<?php
/**
 * Template part for displaying the footer info
 *
 * @package FastFoodHeavenTheme
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'FastFoodHeavenTheme' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly powered by %s', 'FastFoodHeavenTheme' ), 'Fast Food Heaven' );
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Website developed by Fast Food Heaven' ));

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
</div><!-- .site-info -->
