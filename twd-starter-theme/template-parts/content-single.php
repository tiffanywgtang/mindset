<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TWD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php twd_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<?php twd_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'twd' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twd_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

