<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package calPops
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
			<nav id="site-navigation" class="main-navigation " role="navigation">
			<div class="footerNav">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'my_extra_menu_class' ) );?></div>
			</nav><!-- #site-navigation -->
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'calpops' ) ); ?>" class="writenWith"><?php printf( __( 'Proudly powered by %s', 'calpops' ), 'WordPress' ); ?></a>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'calpops' ), 'calPops', '<a href="http://www.maxburgerdesign.com/" rel="designer" class="writenBy">Max Burger</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
