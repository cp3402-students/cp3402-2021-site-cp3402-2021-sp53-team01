<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FastFoodHeavenTheme
 */

namespace WP_Rig\WP_Rig;

if ( ! FastFoodHeavenTheme()->is_primary_sidebar_active() ) {
	return;
}

FastFoodHeavenTheme()->print_styles( 'FastFoodHeavenTheme-sidebar', 'FastFoodHeavenTheme-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<h2 class="screen-reader-text"><?php esc_attr_e( 'Asides', 'FastFoodHeavenTheme' ); ?></h2>
	<?php FastFoodHeavenTheme()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
