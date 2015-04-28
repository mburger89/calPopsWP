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
		<h1 class="headerF">Welcome!</h1>
			<div class="headerP">
				<p>
					I'm Kim, 
					</p><p>
					your conductor, and thanks for stopping by.<br>
					If you're new to the Pops then you are at the right place. 
					Here you can get more information about the orchestra, the organization, 
					the season's show and even choose and buy your tickets.
					As a quick introduction, you can think of us, as one fan says, as &quot;the Boston 
					Pops of the West Coast!&quot; The California Pops brings you the best of Broadway, 
					movies, big band, jazz, pop, Tin Pan Alley, television and so much more. We're only 
					limited by &quot;your&quot; imagination because we are the country's only all-request 
					symphony orchestra. Yes, you ask for it and we do our best to play it for you in 
					upcoming shows.It's one of the reasons our motto is &quot;your kind of music, your 
					kind of orchestra&quot;. And we wouldn't have it any other way. So please enjoy your 
					visit here, explore the information and we look forward to seeing you at the shows. <br>
					</p><p>
					your Maestro, Kim Venaas
				</p>
			</div>
			<div class="FPosttittle">
			<h2 class="postsTittle">Whats Happening at CalPops?</h2> 
				<a href="http://californiapops.tix.com/donation.asp?OrganizationNumber=201" class="donateF">Donate To The Pops</a>
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		</div>
		<main id="main" class="site-main" role="main">
		<div class="postBox">
		<?php
			query_posts('category_name=front-page&posts_per_page=1');
				
				while(have_posts()) : the_post(); ?>
				
				<div class="upComingShow">
					
				<h1 class="entry-title2"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
						<div class="entry-meta2">
							
						</div><!-- .entry-meta -->
					<div class="entry-content3">
						
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

		<?php if ( have_posts() ) : ?>
			
			<!-- Start the Loop-->
			<?php query_posts('category_name=front-page&offset=1'); while ( have_posts() ) : the_post(); ?>
				
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
		
			<?php calpops_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
