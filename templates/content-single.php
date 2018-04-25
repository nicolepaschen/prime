<?php
/**
 * Single Template
 *
 * This file contains the markup for the single template.
 *
 * @package Prime
 */

// @todo TMP CODE.
if( ! class_exists( 'BoldGrid_Framework_Featured_Image' ) ) {
	include_once( ABSPATH . BGTFW_PATH . '/includes/class-boldgrid-framework-featured-image.php' );
}

?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php BoldGrid_Framework_Featured_Image::above_content( 'post' ); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php do_action( 'before_entry_title' ); ?>
		<header class="entry-header" style="<?php BoldGrid_Framework_Featured_Image::header_style( 'post' ); ?>">
			<?php get_template_part( 'templates/entry-header' ); ?>
			<div class="entry-meta">
				<?php boldgrid_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<?php do_action( 'after_entry_title' ); ?>
		<div class="entry-content">
			<?php BoldGrid_Framework_Featured_Image::in_content( 'post' ); ?>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'bgtfw' ), 'after' => '</p></nav>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php boldgrid_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php boldgrid_post_nav(); ?>
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template( '/templates/comments.php' ); ?>
		<?php endif; ?>
	</article><!-- #post-## -->
<?php endwhile; ?>
