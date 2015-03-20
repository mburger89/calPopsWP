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
					restoration and live performances of this music in our communities.<br> Ask any of our players how you can help with this vital effort.
				</p>

			</div>
			<div class="saveTheMusicH">
			<h2 class="postsTittle">Pops Save the Music</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		
		<main id="main" class="site-main" role="main">
		<div class="postBox">
		<?php
			query_posts('category_name=save-the-music&posts_per_page=1');
				
				while(have_posts()) : the_post(); ?>
				
				<div class="saveTheMusic">
					
				<h1 class="entry-title4"><a href="<?#php the_permalink(); ?>"> </a><?php the_title(); ?></h1>
						
					<div class="entry-content5">
						
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
		<div class="mainCopy">
		<p>It is a vital part of the California Pops Orchestra's charter to preserve this heritage through donated orchestrations and music collections, sheet music purchase, restoration and live performances of this music in our communities. Significant financial support of the “Save the music” fund helps preserve the library and provides for continue restoration and preservation enabling performance. Ask any of our players how you can help with this vital effort</p>
		For additional information Please see <a href="wordpress/about-the-pops/save-the-music"><strong>Save the music page by Clicking Here</strong></a>
		<h2>Donor Events</h2>
		<p>Donors of $1000 and more are invited guest to the Pops Annual Family Picnic that is announced in May.</p>
		<h2>Advertise with the Pops! - What a great way to spread the news. <br>Now in Los Altos!</h2>
		<p>The California Pops Orchestra’s’ engaging, fun-filled programs are attracting growing audiences from throughout California. 
		The Pops’ program booklet has become an audience keepsake providing information on local restaurants, businesses and other activities along with show information. 
		Last season’s shows brought in another 300 new fans! With the all-new 2014-15 26th Season the Pops has 6 shows and plan to add 2 more shows at no cost! The Pops returns to Smithwick Theater at Foothill College in Los Altos Hills performing original film scores, music from hit Broadway shows, Big Band and fun comedic arrangements.</p>
		<h2>Save by purchasing ads for the next 6 shows.</h2>
		<p>Members of the Los Altos & Palo Alto Chamber of Commercse receive a 10% discount on all ad prices effective June 1st, 2014.</p>
		<h2>Special: 6 Season Performances</h2>
		<table>
			<tr>
				<th>Location</th>
				<th>Color</th>
				<th>Size</th>
				<th>Price</th>
				<th>Comp (Reg) Tickets</th>
				<th>Weblink</th>
			</tr>
			<tr>
				<td>Back Cover</td>
				<td>Color</td>
				<td>Full 4.75"Wx8"H</td>
				<td>$1300</td>
				<td>5 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Inside Front Cover</td>
				<td>Color</td>
				<td>Full 4.75"Wx8"H</td>
				<td>$1200</td>
				<td>5 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Inside Back Cover</td>
				<td>Color</td>
				<td>Full 4.75"Wx8"H</td>
				<td>$1100</td>
				<td>5 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Inside Standard page</td>
				<td>Color</td>
				<td>Full 4.75"Wx8"H</td>
				<td>$1000</td>
				<td>5 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Inside Standard page</td>
				<td>Color</td>
				<td>Full 4.75"Wx8"H</td>
				<td>$1000</td>
				<td>5 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Inside Back Cover</td>
				<td>Color</td>
				<td>1/2 Page 4.75”W x 4”H</td>
				<td>$560</td>
				<td>2 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Inside Standard</td>
				<td>Color</td>
				<td>1/2 Page 4.75”W x 4”H</td>
				<td>$520</td>
				<td>2 Tickets</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Inside Standard</td>
				<td>Color</td>
				<td>1/4 Page 3.75”Wx2.15"H <br>or 4.75”W x 2”H</td>
				<td>$280</td>
				<td>1 Ticket</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>One Show</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Inside Standard</td>
				<td>Color</td>
				<td>Full 4.75"Wx8"H</td>
				<td>$250</td>
				<td>1 Ticket</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Inside Back Cover</td>
				<td>Color</td>
				<td>1/2 Page 4.75”W x 4”H</td>
				<td>$140</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Inside Standard</td>
				<td>Color</td>
				<td>1/2 Page 4.75”W x 4”H</td>
				<td>$130</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Inside Standard</td>
				<td>Color</td>
				<td>1/4 Page 3.75”Wx2.15"H <br>or 4.75”W x 2”H</td>
				<td>$70</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<a href="#"><h3>Click here for ORDER FORM: (Download a 418kb pdf form file.)  </h3></a>
		<a href="#"><h3>Click here for Advertising Benefit Information: (Download a 418kb pdf form file.) </h3></a>
		<p>Artwork should be camera ready and/or provided in a JPEG, PDF or .EPS format. Email ad to Sales: manager@calpops.com.
		<br>There is a $75 fee if you wish the Pops to layout your copy.		
		<br>The audience loves advertisers who incorporate music and humor in their ads. Including coupons or <br>% discounts is a great way to measure your ad's effectiveness.
		<br>For more information call (650)856-8432 or Email Alicia Wilmunder, Executive Director: manager@calpops.com
		<br>The Pops has the right to refuse or deny links to websites deemed inappropriate for family viewing.</p>
		<h2>Volunteers are welcome!</h2>
		<p>Join the Volunteer Team, whose talent, time, energy and care about music is the backbone to the California Pops Orchestra. The Volunteer Team offers opportunities to be involved in many varied projects and Pops staff including:</p>
		<ul>
			<li>Audience Relations, Ushering, Ticket Taking and Senior center coordination Community and Senior Activities Coordinator</li>
			<li>Education</li>
			<li>Fundraising</li>
			<li>Service to Orchestra and Management</li>
			<li>Rehearsal setup and refreshments</li>
			<li>Volunteer Operations</li>
			<li>Assist with mailings</li>
			<li>Stage and lobby setup and presentation</li>
		</ul>
		<p id="adjustType">Volunteer Team members are expected to participate in at least one area.</p>
		<h2>Volunteer Members are encouraged to:</h2>
		<ul>
		<li>Attend business meetings.</li>
		<li>Familiarize themselves with procedures, and projects.</li>
		<li>Become subscribers and supporters of the California Pops Orchestra.</li>
		</ul>
		<h2>Benefits of Volunteering</h2>
		<ul>
			<li>A free ticket to the show</li>
			<li>Volunteers with seniority with perfect annual attendance receive 1st choice on show date <br>assignments and position.</li>
			<li>Volunteers serving the over a year are invited to the Pops annual family picnic.</li>
			<li>As a non-profit 501(c)(3) corporation your mileage when working for the California Pops Orchestra <br>is tax deductible.</li>
		</ul>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
