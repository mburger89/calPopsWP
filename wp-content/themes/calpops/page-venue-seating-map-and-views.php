<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays for the box office.
 *
 * @package calPops
 */

get_header(); ?>

	<div id="pageVenue" class="content-area">
		<div >
		<h1 class="headerT">Venue<br>Seating<br>Map &<br>Views</h1>
			<div class="rightBox2" id="how4">
				<a href="http://californiapopsorchestra.tix.com/Schedule.aspx?OrgNum=201" class="buyBTN2">Buy Tickets</a>
				<section class="seatingImage"></section>
				<section class="theaterView2"></section>
				<i class="imagecap2">Front Left Seating</i>
				<section class="theaterView4"></section>
				<i class="imagecap2">Front Center Seating</i>
			</div>
			<div class="leftBox2" id="imageG">
				<section class="theaterView"></section>
				<i class="imagecap2">Rear Center Seating</i>
				<section class="theaterView3"></section>
				<i class="imagecap2">Seating</i>
			</div>
				
		</div>
		<main id="main" class="site-main" role="main">
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
