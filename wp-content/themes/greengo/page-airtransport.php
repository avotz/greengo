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
 * Template Name: Page Air transportation
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

			<div class="transportation-page">
				<div class="transportation-info">
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
				<div class="transportation-items">
					<div class="transportation-item">
						 <?php rewind_posts(); ?>
			            <?php query_posts( 'post_type=page&page_id=135' ); ?>
			            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			            			
			            				 <?php if ( has_post_thumbnail() ) :

								  	 	$id = get_post_thumbnail_id($post->ID);
								  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
								  	 	?>
								    	
										<div class="transportation-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');">
								  	  		
								  	  	</div>
										
								  	 
								  	<?php endif; ?>
			            			
			                    	<h2><?php the_title(); ?></h2>
			                        <div class="content-description">
										<?php
											the_content();
											
										?>
										<a href="#transportation-popup" class="btn verde tour-popup-link">
										  
									       Inquery now
									      
									      </a>
									</div>
									<a href="#" class="view-more"><i class="fa fa-plus"></i> 
										
									         View more
								      
									</a>
									<a href="#" class="view-less"><i class="fa fa-minus"></i> 
									
									
									         View less
								     
									</a>
			                   
			    
			                <?php endwhile; ?>
			                <!-- post navigation -->
			              
			            <?php endif; ?>
			          
					</div>
					<div class="transportation-item">
						 <?php rewind_posts(); ?>
			            <?php query_posts( 'post_type=page&page_id=137' ); ?>
			            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			                    	 <?php if ( has_post_thumbnail() ) :

								  	 	$id = get_post_thumbnail_id($post->ID);
								  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
								  	 	?>
								    	
										<div class="transportation-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');">
								  	  		
								  	  	</div>
										
								  	 
								  	<?php endif; ?>
			            			
			                    	<h2><?php the_title(); ?></h2>
			                        <div class="content-description">
										<?php
											the_content();
											
										?>
										<a href="#transportation-popup" class="btn verde tour-popup-link">
										  
									       Inquire now
									      
									      </a>
									</div>
									<a href="#" class="view-more"><i class="fa fa-plus"></i> 
										
									         View more
								      
									</a>
									<a href="#" class="view-less"><i class="fa fa-minus"></i> 
									
									
									         View less
								     
									</a>
			                   
			    
			                <?php endwhile; ?>
			                <!-- post navigation -->
			              
			            <?php endif; ?>
			          
					</div>
				</div>
			</div>
			

		</div><!-- #main -->
	</section><!-- #primary -->
	<div id="transportation-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <h3>Inquire for Airtransportation</h3>
         <?php  echo do_shortcode('[contact-form-7 id="23" title="Contact form"]') ;?>
              
        
    </div>

<?php

/*get_sidebar();*/
get_footer();
