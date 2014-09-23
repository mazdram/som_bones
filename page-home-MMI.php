<?php
/*
 Template Name: Homepage - MMI
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<?php 
    echo do_shortcode("[metaslider id=36]"); 
?>
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
				
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>
								
								
							
								
								

								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>


							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>


				</div>
				
				<section class ="full-breakout">
				<div class="wrap cf">
				<section class="entry-content cf" align="left">
							
								<h2>Apply to Our Graduate Program</h2>
								<p>The department of Molecular Microbiology & Immunology (MMI), in partnership with the faculty from the department of Veterinary Pathobiology (VPB), now called Molecular Pathogenesis and Therapeutics Graduate Program (MPT), offers a comprehensive graduate program leading to the Doctor of Philosophy (Ph.D) degree.</p>
								<a href="graduate-program/"><button class="gold-btn">View Speakers</button></a>
				</section>		
					</div>
				
						</section>
				
						<section class ="full-breakout-img">
						<div class="wrap cf">
								<section class="entry-content cf">
								<h2>Discovering a Needle in a Haystack for Muscular Dystrophy Patients</h2>
								<p>Research on significant genetic sequence could lead to treatments for deadly hereditary disease</p>
								<button class="gold-btn">Read More</button>
						</section>
							</div>
						</section>
						
						
						<section class ="full-breakout">
							<div class="wrap cf">
								<section class="entry-content cf" align="right">
								<h2>Upcoming Seminar Speakers</h2>
								<p>The department of Molecular Microbiology and Immunology (MMI), in partnership with the faculty from the department of Veterinary Pathobiology (VPB), now called Molecular Pathogenesis and Therapeutics Graduate Program (MPT), offers a comprehensive graduate program leading to the Doctor of Philosophy (Ph.D) degree.</p>
								 <button class="gold-btn">Read More</button>
								</section>
							</div>
						</section>
			</div>


<?php get_footer(); ?>
