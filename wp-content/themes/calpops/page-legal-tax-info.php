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
		<h1 class="headerT iphoneHeader3">Legal &<br> Tax Info.</h1>
			<div class="saveTheMusicH STMIphone">
			<h2 class="postsTittle" id="legalFix">Pops Legal and Tax Info.</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		
		<main id="main" class="site-main" role="main">
		<div class="postBox">
		<h2>Legal Name:</h2>
		<p>California Pops Orchestra</p>
		<h2>Mailing Address:</h2>
		<p>
			California Pops Orchestra<br>
			3790 El Camino Real, Mail Suite 341<br>
			Palo Alto, CA 94306
		</p>
		<h2>Fed ID</h2>
		<p>74-3223842</p>
		<h3>The California Pops Orchestra</h3><p> is a 501C3 Non-Profit California Corporation.</p>
		<h2>For more information on supporting the Pops</h2>
		<p>please contact:(650) 856-8432</p>
		<h3>Email:</h3>
		<p>manager@californiapopsorchestra.com</p>
		</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
