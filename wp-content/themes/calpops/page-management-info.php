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
			<div>
		<h1 class="headerT">Who's<br>Who</h1>
			<div class="whosWhoP">
				<p>
				
				</p>
			</div>
			<div class="whosWhoH">
			<h2 class="postsTittle">Management Team</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		</div>
		<main id="main3" class="site-main" role="main">
		
		<?php
			query_posts('category_name=management-team&posts_per_page=50');
				
				while(have_posts()) : the_post(); ?>
				
				<div class="whosWho">
					
				<h1 class="entry-title5"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
						<div class="entry-meta5">
							<?php calpops_posted_on(); ?>
						</div><!-- .entry-meta -->
					<div class="entry-content6">
						<?php the_post_thumbnail(); ?>
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'calpops' ) ); ?>
								<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'calpops' ),
							'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
				</div><!-- .whosWho -->
				
		<?php endwhile; wp_reset_query(); ?>

		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
