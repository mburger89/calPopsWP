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
		<h1 class="headerT">Green<br>Room</h1>
			<div class="saveTheMusicH STMIphone">
			<h2 class="postsTittle" id="greenRoomFix">Cal Pops Green Room</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		<div class="greenRoomPage">
		<?php 
		if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              // Display content of page
              get_template_part( 'green-room', get_post_format() ); 
              wp_reset_postdata();
  
            endwhile;
        endif;
			
			?>
			</div>

		<main id="main" class="site-main" role="main">
		
		
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
