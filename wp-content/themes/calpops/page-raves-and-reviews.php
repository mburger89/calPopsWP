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
		<h1 class="headerT">Raves &<br>Reviews</h1>
			<div class="ravesP">
			<h2>Top 10 Reasons Why I Love the California Pops</h2>
			<h3>by Chin Beckmann</h3>
				<ol>
					<li>Not only are they accomplished musicians, they are also accomplished and talented in other areas.</li>
					<li>Love the fancy dresses--it's like going to the Oscars,<br> but a lot less traffic.</li>
					<li>All the funny jokes we get to hear.</li>
					<li>It's not bad to be engulfed in "Happy Music" for a couple of hours.</li>
					<li>Kim's endless reservoir of creativeness.<br> What's he going to do next?</li>
					<li>It's music the whole family can enjoy.</li>
					<li>It's classy but not snooty.</li>
					<li>Love the audience participation.</li>
					<li>We get to see unusual instruments featured such as vacuums and garden hose.</li>
					<li>No two shows are the same.</li>
				</ol>
				
			</div>
			<div>
			<h2 class="postsTittle">Pops Raves & Reviews</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		</div>
		<main id="main" class="site-main" role="main">
		<div class="postBox2">
		<?php
			query_posts('category_name=raves-reviews&offset=0');
				
				while(have_posts()) : the_post(); ?>
				
				<div class="raves">
					
				<h1 class="entry-title3"><a href="<?#php the_permalink(); ?>"></a><?php the_title(); ?></h1>
						
					<div class="entry-content4">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'calpops' ) ); ?>
								<?php
						//wp_link_pages( array(
							//'before' => '<div class="page-links">' . __( 'Pages:', 'calpops' ),
							//'after'  => '</div>',
							//) );
						?>
						<div class="entry-meta3">
							
						</div><!-- .entry-meta -->
					</div><!-- .entry-content -->
				</div>
				
		<?php endwhile;  ?>

		
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
