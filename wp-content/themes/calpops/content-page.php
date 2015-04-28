<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package calPops
 */
?>
<div class="postcontainerC">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			
	</header><!-- .entry-header -->

	<div class="entry-content">
			<?php the_content(); ?>
			
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'calpops' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'calpops' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>