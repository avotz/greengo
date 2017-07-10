<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Page Contact
 * @package greengo
 */

get_header(); ?>
	<section class="banner banner-page">
               
                    <!-- <article class="intro__content">
                        <h2 class="intro__subtitle wow fadeInLeft">Explore Buggy tours</h2>
                        <h1 class="intro__title wow fadeInRight">YOUR DREAM DESTINATION AWAITS</h1>

                    </article> -->
                     <?php if ( has_post_thumbnail() ) :

					  	 	$id = get_post_thumbnail_id($post->ID);
					  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
					  	 	?>
					    	
							<div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/pattern.png'), url('<?php echo $thumb_url[0] ?>');">
					  	  		
					  	  	</div>
							
						<?php else : ?>
					  	   <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/pattern.png'), url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
					  	  		
					  	  </div>
					  	 
					  	<?php endif; ?>
                   
               

             

       </section>
	<section class="main">
		<div class="inner">

			<div class="contact-page">
				<div class="contact-form">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
				</div>
				<div class="contact-media">
					<div id="TA_selfserveprop876" class="TA_selfserveprop">
					<ul id="EnmL6zWqFF" class="TA_links K9UmfFKvci">
					<li id="vqhL4M" class="VRxwpAW">
					<a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
					</li>
					</ul>
					</div>
					<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=876&amp;locationId=9741336&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"></script>
				</div>
			</div>
			

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
