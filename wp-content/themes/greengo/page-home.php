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
	
	<section class="banner">
		
		<div class="owl-carousel">
	  	 
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Green Go Costa Rica</h2>
		  	  			<p>Our goal is to be recognized as the company that provides the best tours and travel memories and that we support it with a deep passion of personalized service</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Excellence! We aim for perfection every single time. </h2>
		  	  			<p>We have a unified team that consistently gives outstanding costumer service within every email, tour, interaction with our customers, and business associates and colleagues</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
	  	  	
		  	  		
		  	  		<div class="item-info">
		  	  			<h2>Our greatest asset and the key to our success is our people</h2>
		  	  			<p>Each of us has a sense of pride, dignity, and satisfaction in what we do.</p>
		  	  		</div>
		  	  		
		  	  
	  	  </div>
	  	 
	  	  	  
		</div>
		<div class="banner-link">
			<a href="#services" class="anchor btn">
				<i class="icon-angle-down"></i>
			</a>
		</div>

	</section>
	<section id="services" class="services">
		<div class="inner">

			  <h2>Our Services </h2>
		  	  <div class="services-container">
		  	  	<div class="services-item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/activities.jpg');">
		  	  		<div class="services-item-info">
		  	  			<h3>Activities</h3>
		  	  			<p>The most popular tours in our list!</p>
		  	  		</div>
		  	  		<a href="<?php echo esc_url( home_url( '/activities' ) ); ?>" class="services-item-link"></a>
		  	  	</div>
		  	  	<div class="services-item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/air-transportation.jpg');">
		  	  		<div class="services-item-info">
		  	  			<h3>Air Transportation</h3>
		  	  			<p>Local and worldwide flights</p>
		  	  		</div>
		  	  		<a href="<?php echo esc_url( home_url( '/air-transportation' ) ); ?>" class="services-item-link"></a>
		  	  	</div>
		  	  	<div class="services-item" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/accommodations.jpg');">
		  	  		<div class="services-item-info">
		  	  			<h3>Luxury Accommodations</h3>
		  	  			<p>Lorem ipsum dolor sit amet, consectetur  </p>
		  	  		</div>
		  	  		<a href="<?php echo esc_url( home_url( '/luxury-accommodation' ) ); ?>" class="services-item-link"></a>
		  	  	</div>
		  	  </div>
		</div>
	</section>
	<section class="call">
		<div class="inner">
			<div class="call-container">
				<div class="call-info">
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, placeat. </h2>
			  	  			<p>Totam tenetur tempore, natus accusamus quia facere expedita nemo eum, itaque explicabo aliquam praesentium, illo obcaecati nesciunt inventore voluptates quis.</p>
				</div>
			</div>
			
			
		  	  			
		</div>
	</section>
	<section class="call2">
		<div class="inner">
			<div class="call2-container">
				<div class="call2-column">
					<h2>Green Go Costa Rica </h2>
			  	  	<p>We have chosen to specialize in the travel consultant and private tours industry by offering only experiences of exceptional quality, such as showing the best of the country, our nature and our culture. Our goal is to be recognized as the company that provides the best tours and travel memories and that we support it with a deep passion of personalized service. Doing so allows us to satisfy and exceed our customers’ expectations.</p>
			  	  	<ul>
			  	  		<li>Private Tour Operator</li>
						<li>Travel Consultants</li>
						<li>Air Transportation</li>
						<li>Luxury Accommodation</li>
						<li>Medical Tourism</li>
						<li>Real Estates</li>
						
			  	  	
			  	  	</ul>
				</div>
				<div class="call2-column">
					<h2>About Costa Rica</h2>
			  	  			<p>Costa Rica is a small country that encompasses just 0.03% of the world’s landmass. With over 500,000 plant and animal species, Costa Rica is one of the planets most biologically dense countries. According to Costa Rica’s National Biodiversity Institute (INBio), the biodiversity in Costa Rica represents close to 4% of the total species on Earth.</p>
			  	  			
			  	  			<img src="<?php echo get_template_directory_uri();  ?>/img/call2.jpg" alt="call">
				</div>
			</div>
		</div>
	</section>
	

	
<?php

get_footer();
