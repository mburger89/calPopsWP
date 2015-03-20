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
		<h1 class="headerT">Policy &<br>Other Info.</h1>
			<div class="saveTheMusicH">
			<h2 class="postsTittle" id="PolicesFix">Pops policies and info.</h2> 
				<a href="http://californiapopsorchestra.tix.com" class="buyBTN">Buy Tickets</a>
			</div>
		
		<main id="main" class="site-main" role="main">
		<div class="postBox">
		<div class="legalInfo">
		<h2>Group Savings</h2>
		<p>Save $1 each on 10 tickets</p>
		<p>Save $2 each on 20 tickets </p>
		<p>Save $3 each on 30 tickets<br>
		<i>(contact the CPO office for children group prices)</i></p>
		<p>Associations, party host &/or organizations requesting group tickets are to designate a main contact who is responsible as the group coordinator/facilitator, 
		collector of payments for tickets and ticket distributor. A group package including sign-up sheets, ticket order forms, maps, posters and other promo material are 
		available to your group coordinator upon request. Individual members of groups must contact their organization group coordinator to receive the discount. 
		All tickets for the group are delivered to the group coordinator upon payment. VISA, Mastercard and checks written to the California Pops Orchestra are accepted. 
		Refer to the ticket order form. Group discounts doesn't apply to season ticket since they are already discounted.</p>
		<h2>Ticket Terms & Conditions</h2>
		<p>Each ticket constitutes a license from the CPO to the purchaser. No ticket may be transferred or resold for any price above the purchase price printed on the ticket. 
		By accepting a ticket, you are agreeing to the terms of this license. If these terms are not acceptable, please promptly contact the CPO box office at (650) 856-8432 or email manager@calpops.org.</p>
		<h2>Children</h2>
		<p>Children are always welcome to concerts and on special occasion can be invited to join musicians on stage. However, audience and orchestra members appreciate that parents or chaperones take a "time out" 
		to care for their children so to not disrupt other guests. If necessary, please temporarily excuse yourself to the lobby with the child to provide immediate attention, guidance and a little playtime.</p>
		<h2>Cellphones, Pagers and Other Electronic Devices</h2>
		<p>The California Pops Concerts is in a "Cell-Free Zone." For the comfort of others, please switch to silent or the quiet vibrate mode all cell phones, beepers, watches, electronic organizers, and other 
		noise-alarm devices upon entering the theatre's seating area. Please attend to your pages in the lobby area.</p>
		<h2>Devises/Cameras/Recording Equipment</h2>
		<p>Camera and recording equipment are prohibited in the theater during concerts.</p>
		<h2>Food and Drink in the Theater</h2>
		<p>Bottled water is fine in the theater. No food or other drink is permitted in the lobby or theater.</p>
		<h2>Smoking</h2>
		<p>Smoking is prohibited in the theater. There are many locations outside for smoking during intermission.</p>
		<h2>Privacy</h2>
		<p>We respect your privacy. Your information is not shared with any organization not affiliated with the California Pops Orchestra organization. If at any time you would like to be removed 
		from our mailing list, please contact us at manager@calpops.org.</p>
		<h2>Security</h2>
		<p>For your and our security and protection CPO and our ticket broker tix.com (Tix) doesn't store full credit card information. Tix only stores the last four digits of the credit card for reference. Tix uses 128 bit Secure Socket Layer (SSL) encryption technology which is the industry standard and best software available today for secure commerce transactions. SSL encrypts all of your sensitive personal information, including credit card number, name, and address, so that it cannot be read as the information travels over the Internet from the ticket buyer and the credit card processors.</p>
		<p>Tix is Payment Card Industry (PCI-DSS) Level 1 Certified, which is the highest (most secure) level of certification available from the Payment Card Industry. To read more details on Tix security measures click here (https://www.tix.com/ticket-sales-software/security.aspx). When purchasing tickets on the CPO website the link "to purchase tickets online" automatically links you to the tix.com secured website. The California Pops ticket office handles all phone orders at (650) 856-8432 using CPO's & tix.com tight security.</p>
		<p>Reminder that Online Ticket purchasers should securely and confidentially maintain their tix.com user ID and password. Password access simplifies and saves you time when purchasing future tickets plus allows you to update or change your personal information such as ticket mailing address.</p>
		<h2>Non-Affiliation</h2>
		<p>The California Pops Orchestra is an independent Non-Profit Corporation promoting performing arts and music education. The Pops has no affiliation with or positions on policies of the facilities we rent.</p>
		</div>


		</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
