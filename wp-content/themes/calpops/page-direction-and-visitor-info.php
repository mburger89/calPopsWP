<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays for the box office.
 *
 * @package calPops
 */

get_header(); ?>

	<div id="pageDirections" class="content-area">
		<div >
		<h1 class="headerS">Directions<br>&<br>Visitor info.</h1>
			<div class="rightBox" id="how3">
				<a href="http://californiapopsorchestra.tix.com/Schedule.aspx?OrgNum=201" class="buyBTN2" >Buy Tickets</a>
				<h3 class="map"> Map of Smithwich Theater</h3>
				<iframe class="map" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.yahoo.com/e/?lat=37.359788198380755&amp;lon=-122.12453842163086&amp;q=12345%20El%20Monte%20Rd%2C%20Los%20Altos%20Hills%2C%20CA&amp;bb=37.38086575035683%2C-122.16208934783936%2C37.33870472508983%2C-122.08698749542236&amp;addr=12345%20El%20Monte%20Rd%2C%20Los%20Altos%20Hills%2C%20CA%2094022"></iframe>
			</div>
			<div class="DVcopy">
				<h2>Smithwich Theater Information</h2>
				<ul>
				<li>Seats 940 on the single Orchestra floor.</li>
				<li>Restrooms outside. Womens on west side of the theater with men's on the east side. Additional bathrooms are open at the building across the theatre patio.</li>
				<li>While limited to 4 wheelchair seats there is plenty of Handicap parking slots in Lot 5.</li>
				<li>Special "drop off" area for those coming by buses or need special wheelchair/handicap (no step) access leading directly to the theatre entrance.</li>
				<li>Please- No flash cameras, video or audio recording devises allowed.</li>
				</ul>
				<h2>Smithwick Theater Parking</h2>
				<p>There are 2 FREE parking areas for the California Pops patrons-lots 5 & 6 on the west end of Foothill campus. See the below campus map. 
				Lot 5 is level - no hills with approximately 300 spaces, several handicap spaces and great flat path without stairs to Smithwick Theater. 
				Lot 6 has a path that starts with a 30-40 pace incline. Click here for a 1.6mb PDF directions, campus map with satellite view and parking information.</p>
				<h3>Theater Address:</h3>
				<p> Smithwick Theatre, Foothill College, 12345 El Monte Road, Los Altos Hills, CA</p>
				<h3>Foothill College Campus Map</h3>
				<a href="http://www.calpops.org/cpovenues.html"><p>http://www.calpops.org/cpovenues.html</p></a>

			</div>
			<div class="leftBox" id="parking">
				<section class="calPopsF"></section>
				<section class="parkingLot"></section>
				<section class="parkingLot2"></section>
			</div>
				
		</div>
		<main id="main" class="site-main" role="main">
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
