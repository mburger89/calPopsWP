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
		<h1 class="headerT">Save<br>the<br>Music</h1>
			<div class="saveTheMusicP">
				<p>
					The Pops is building an invaluable popular musical library that includes light classics, jazz, Latin, movie, Broadway, TV, cartoon, circus, vaudeville and big band music. 
					Many of these orchestrations are long out of print and represent a uniquely American musical heritage that is quickly slipping away. 
					In the summer of 2012 alone over 350 orchestrations were restored enabling their performance in coming shows.
					It is a vital part of the California Pops Orchestra's charter to preserve this heritage through the purchase, 
					restoration and live performances of this music in our communities. Ask any of our players how you can help with this vital effort.
				</p>

			</div>
			<div class="saveTheMusicH">
			<h2 class="postsTittle">Pops Save the Music</h2> 
				<a href="http://californiapops.tix.com/donation.asp?OrganizationNumber=201" class="donate" id="dBtnSMFix">Donate To The Pops</a>
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		
		<main id="main" class="site-main" role="main">
		<div class="postBox mFix">
		<?php
			query_posts('category_name=save-the-music&posts_per_page=50');
				
				while(have_posts()) : the_post(); ?>
				
				<div class="saveTheMusic">
					
				<h1 class="entry-title4"><a href="<?#php the_permalink(); ?>"> </a><?php the_title(); ?></h1>
						<div class="entry-meta4">
							
						</div><!-- .entry-meta -->
					<div class="entry-content5">
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
