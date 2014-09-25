			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>


					<div class="m-all t-all d-all cf" >
		<div class="social">		
<ul class="social-links cf">
<li><a class="twitter" href="#">Twitter</a></li>
<li><a class="facebook" href="#">Facebook</a></li>
<li><a class="youtube" href="#">Youtube</a></li>
</ul>
</div>

					<p class="source-org copyright">Website created and maintained by the <a href="mailto:mumedicine@health.missouri.edu">Office of Communications</a>.  <a href="http://medicine.missouri.edu/contact">Contact</a> the MU School of Medicine. Copyright&copy; <?php echo date('Y'); ?> - The Curators of the <a href="http://umsystem.edu">University of Missouri System</a>.
All rights reserved. <a href="http://www.umsystem.edu/ums/copyright/">DMCA</a> and <a href="http://missouri.edu/statements/copyright.php">other copyright information</a>. An <a href="http://missouri.edu/statements/eeo-aa.php">equal opportunity/affirmative action institution</a>.</p>
					
					
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
