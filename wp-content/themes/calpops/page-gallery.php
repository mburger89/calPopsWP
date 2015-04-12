<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package calPops
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<h1 class="headerT iphoneHeader">Gallery</h1>
			<div class="saveTheMusicH giPhone">
			<h2 class="postsTittle fixEverything">Cal Pops Gallery</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		
		<main id="main" class="site-main" role="main">
		<div class="postBox">
		<?php
			query_posts('category_name=gallery&posts_per_page=50');
				
				while(have_posts()) : the_post(); ?>
				
				<div class="gallery">
					
				<h1 class="entry-title4"><a href="<?#php the_permalink(); ?>"> </a><?php the_title(); ?></h1>
					<div class="entry-content9">
						<?php the_post_thumbnail(); ?>
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'calpops' ) ); ?>
								<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'calpops' ),
							'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					

				</div>
				
		<?php endwhile; wp_reset_query(); ?>

		
		</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
