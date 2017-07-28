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
 * Template Name: Page Fishing
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
					  	 	$thumb_url = wp_get_attachment_image_src($id,'tour-gallery', true);
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

			<div class="fishing-page">
				<div class="fishing-info">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					<a href="#fishing-popup" class="btn verde fishing-popup-link" data-title="Sport Fishing">
	  
				       Inquiry Now!
				      
				      </a>
				      <div id="fishing-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
        
				         <?php  echo do_shortcode('[contact-form-7 id="23" title="Contact form"]') ;?>
				              
				        
				    </div>
				</div>
				<div class="fishing-media">
					<div class="page-carousel owl-carousel ">

						<?php $images = rwmb_meta( 'rw_gallery_thumb', 'type=image&size=large' ); 

			             if ( $images ) : ?>
			             
			             	 
			               
			                     <?php foreach ( $images as $image ){?>

			                     		<div class="item" style="background-image: url('<?php echo $image['url'] ?>');"><a href="<?php echo $image['full_url'] ?>"></a></div>
			                     		
			                         
			                      <?php } ?>

			           
						
					  	<?php endif; ?>
					  	  	  
						</div>
				</div>

			</div>
			

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
