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
 *
 * @package greengo
 */

get_header(); ?>
	<div class="header-social">
		<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
		<a href="#" class="tripadvisor"><i class="fa fa-tripadvisor"></i></a>
		<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
	</div>
	<section class="banner">
		
		<div class="owl-carousel banner-carousel">
	  	 
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>A signature of excellence!</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner4.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>Let us take u places people don’t even know exits</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>Limitless bespoke services tailored to the most discerning clientele.</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>Let us transform your trip into a immensely pleasurable experience.</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	  
	  	   <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner5.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>Tailored concierge services experiences to fit your specific needs and lifestyle.</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	   <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner6.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>Transform the impossible into a breath-taking once in a lifetime memories.</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	 
	  	  	  
		</div>
		<div class="banner-link">
			<a href="#services" class="anchor btn">
				<i class="icon-angle-down"></i>
			</a>
		</div>

	</section>
	<section class="call">
		<div class="inner">
			<div class="call-container">
				
				<div class="call-info">
					<h2>Activities. </h2>
			  	  	<p>Best tours in Costa Rica</p>
			  	  	<a href="<?php echo esc_url( home_url( '/activities' ) ); ?>" class="services-item-link"></a>
				</div>
			</div>
			
			
		  	  			
		</div>
	</section>
	<section id="services" class="services">
		<div class="inner">

			  <h2>Specialty Concierge </h2>
		  	  <div class="services-container">
		  	  	<div class="services-item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/accommodations.jpg');">
		  	  		<div class="services-item-info">
		  	  			<h3>Luxury Accomodation</h3>
		  	  			<p>Luxury Houses & villas</p>
		  	  		</div>
		  	  		<a href="<?php echo esc_url( home_url( '/luxury-accomodation' ) ); ?>" class="services-item-link"></a>
		  	  	</div>
		  	  	<div class="services-item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/air-transportation.jpg');">
		  	  		<div class="services-item-info">
		  	  			<h3>Transport</h3>
		  	  			<p>Air charter service </p>
		  	  		</div>
		  	  		<a href="<?php echo esc_url( home_url( '/air-transportation' ) ); ?>" class="services-item-link"></a>
		  	  	</div>
		  	  	
		  	  </div>
		</div>
	</section>
	
	<section class="call2">
		<div class="inner">
			<div class="call2-container">
				<div class="call2-column wow fadeInLeft">
					  <?php rewind_posts(); ?>
			            <?php query_posts( 'post_type=page&page_id=154' ); ?>
			            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			         
			                    	<h2><?php the_title(); ?></h2>
			                       
										<?php
											the_content();
											
										?>
									
			    
			                <?php endwhile; ?>
			                <!-- post navigation -->
			              
			            <?php endif; ?>
			          
				</div>
				<div class="call2-column wow fadeInRight">
					      <?php rewind_posts(); ?>
			            <?php query_posts( 'post_type=page&page_id=151' ); ?>
			            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			         
			                    	<h2><?php the_title(); ?></h2>
			                       
										<?php
											the_content();
											
										?>
									
			    
			                <?php endwhile; ?>
			                <!-- post navigation -->
			              
			            <?php endif; ?>
			          
				</div>
			</div>
		</div>
	</section>
	

	
<?php

get_footer();
