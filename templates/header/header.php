<?php
/**
 * Header Template
 *
 * This file contains the markup for the header template.
 *
 * @package Prime
 */

?>

<header id="masthead" <?php BoldGrid::add_class( 'header', [ 'header' ] ); ?> role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
	<div id="navi-wrap" <?php BoldGrid::add_class( 'navi_wrap' ); ?>>
		<?php do_action( 'boldgrid_menu_secondary', [ 'container_class' => BoldGrid::get_container_classes( 'header' ) ] ); ?>
		<div id="navi" <?php BoldGrid::add_class( 'navi' ); ?>>
			<?php do_action( 'boldgrid_site_identity' ); ?>
			<?php if ( has_nav_menu( 'main' ) ) : ?>
				<input id="main-menu-state" type="checkbox" />
				<label class="main-menu-btn" for="main-menu-state">
					<span class="main-menu-btn-icon"></span><span class="screen-reader-text">Toggle main menu visibility</span>
				</label>
				<?php do_action( 'boldgrid_menu_main' ) ?>
			<?php endif; ?>
		</div>
		<?php do_action( 'boldgrid_header_bottom' ); ?>
	</div>
</header><!-- #masthead -->
