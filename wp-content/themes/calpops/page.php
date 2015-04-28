<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package calPops
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div>
		<h1 class="headerT CPmobile"><?php the_title(); ?></h1>
			
		</div>
		<main id="main8" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
			
			<!-- Start the Loop-->
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-page', get_post_format() );
				?>

			<?php endwhile; ?>
		
			<?php calpops_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content-page', 'none' ); ?>

		<?php endif; ?>
		
			<!-- Start the Loop-->
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
