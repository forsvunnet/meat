<?php
/*
 * Template Name: Fourcol Test
 */
?>
<?php get_header(); ?>

			<div id="content">
				<div class="fourcol first clearfix">
					<h1>One</h1>
					<div class="entry-content"><p>
						Intrigued by the shower hide when guests come over or claw
						drapes play time. Sun bathe stand in front of the computer
						screen and stand in front of the computer screen and chew
						foot but mark territory so hate dog. Mark territory
						stretch need to chase tail. Stand in front of the
					  computer screen missing until dinner time cat snacks for
					  need to chase tail, so intently sniff hand.
					</p></div>
				</div>
				<div class="fourcol clearfix">
					<h1>Two</h1>
					<div class="entry-content"><p>
						Intrigued by the shower hide when guests come over or claw
						drapes play time. Sun bathe stand in front of the computer
						screen and stand in front of the computer screen and chew
						foot but mark territory so hate dog. Mark territory
						stretch need to chase tail. Stand in front of the
					  computer screen missing until dinner time cat snacks for
					  need to chase tail, so intently sniff hand. Climb leg sun
					  bathe, hopped up on goofballs. Hopped up on goofballs make
					  muffins for sun bathe but chase imaginary bugs or sweet beast
					  stick butt in face. Leave dead animals as gifts why must
					  they do that. Swat at dog sweet beast but rub face on everything.
					  Rub face on everything nap all day yet rub face on everything.
					</p></div>
				</div>
				<div class="fourcol clearfix">
					<h1>Three</h1>
					<div class="entry-content"><p>
						Intrigued by the shower hide when guests come over or claw
						drapes play time. Sun bathe stand in front of the computer
						screen and stand in front of the computer screen and chew
						foot but mark territory so hate dog. Mark territory
						stretch need to chase tail. Stand in front of the
					  computer screen missing until dinner time cat snacks for
					  need to chase tail, so intently sniff hand. Climb leg sun
					  bathe, hopped up on goofballs. Hopped up on goofballs make
					  muffins for sun bathe but chase imaginary bugs or sweet beast
					  stick butt in face. Leave dead animals as gifts why must
					  they do that. Swat at dog sweet beast but rub face on everything.
					</p></div>
				</div>
				<div class="fourcol clearfix">
					<h1>Four</h1>
					<div class="entry-content"><p>
						Intrigued by the shower hide when guests come over or claw
						drapes play time. Sun bathe stand in front of the computer
						screen and stand in front of the computer screen and chew
						foot but mark territory so hate dog. Mark territory
						stretch need to chase tail. Stand in front of the
					  computer screen missing until dinner time cat snacks for
					  need to chase tail, so intently sniff hand.
					</p></div>
				</div>
				<div class="fourcol clearfix">
					<h1>Five</h1>
					<div class="entry-content"><p>
						Intrigued by the shower hide when guests come over or claw
						drapes play time. Sun bathe stand in front of the computer
						screen and stand in front of the computer screen and chew
						foot but mark territory so hate dog.
					  Give attitude destroy couch so chase mice attack feet but use
					  lap as chair. Sun bathe shake treat bag. Lick butt burrow under
					  covers. Claw drapes inspect anything brought into the house.
					  Run in circles under the bed, all of a sudden go crazy but play time.
					</p></div>
				</div>
				<div class="fourcol last clearfix">
					<h1>Six</h1>
					<div class="entry-content"><p>
						Intrigued by the shower hide when guests come over or claw
						drapes play time. Sun bathe stand in front of the computer
						screen and stand in front of the computer screen and chew
						foot but mark territory so hate dog.
					</p></div>
				</div>
				<script>

				jQuery(document).ready(function($) {
					var	resize = function() {
						var fourcols = $('#content > .fourcol');
						if (min_width(768)) {
							equalise(fourcols, 3);
						} else {
							equalise(fourcols, 1);
						}
					}
					$(window).resize(resize);
					resize();
				});
				</script>
				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

								<header class="article-header">
									<?php 
										// A note about thumbnails:
										// Responsive images is really troublesome as long as there is no set standard
										// The best solution so far seems to be this:
									  // http://adaptive-images.com/
										the_post_thumbnail('full');
									?>
									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</div> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
