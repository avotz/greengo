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
 * Template Name: Page Tours 
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

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			 <div class="tours-items">
            	
            
            <?php

                 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                  'post_type' => 'product',
                  //'order' => 'ASC',
                  'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                  'posts_per_page' => 15,
                   'paged' => $paged,
                 'tax_query' => array(
                    array(
                      'taxonomy' => 'product_cat',
                      'field' => 'slug',
                      'terms' => 'tour'
                    )
                  )
                  
                );
                $items = new WP_Query( $args );
                 // Pagination fix
                  $temp_query = $wp_query;
                  $wp_query   = NULL;
                  $wp_query   = $items;
                  
                if( $items->have_posts() ) {
                  while( $items->have_posts() ) {
                     $items->the_post();
                   
                    ?>

                      
                         <article class="tours-item" >
                            <div class="entry-content grid-item">
                                <figure class="entry-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                     <?php if ( has_post_thumbnail() ) :

                                          $id = get_post_thumbnail_id($post->ID);
                                          $thumb_url = wp_get_attachment_image_src($id,'large', true);
                                          ?>
                                          
                                       
                                        
                                      <?php endif; ?>
                                      <img src="<?php echo $thumb_url[0] ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                  </a>
                                </figure>
                                <div class="entry-excerpt">
                                    <div class="entry-header">
                                    <div class="tour-title">
                                    
                        
                                    <h4>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    </div>
                                    </div>
                                    <div class="entry-excerpt-wrapper">
                                     <div class="entry-excerpt-price">
                                       <span>From 
                                       <?php 
                                      
                                        $currency = get_woocommerce_currency_symbol();

                                       $product = new WC_Product( $post->ID ); 
                                     /*echo $product->get_price_html();
                                      
                                     woocommerce_template_loop_price(); */
                                      echo $currency;
                                      
                                      if(get_post_meta( get_the_ID(), '_wc_display_cost', true ))
                                        echo get_post_meta( get_the_ID(), '_wc_display_cost', true );
                                      else 
                                        echo get_post_meta( get_the_ID(), '_wc_booking_cost', true )
                                      // echo word_count(get_the_excerpt(), '24'); ?>
                                      </span>
                                     </div>
                                     <div>
                                       <a href="<?php the_permalink(); ?>" class="button">
                                      
                                       View Tour
                                     
                                      
                                       </a>
                                     </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </article>
                    
                     
                      
                    <?php
                   
                     
                  }
                }
                
              ?>
              </div>
              <?php  the_posts_pagination( array( 'mid_size' => 2 ) ); 
                    wp_reset_postdata(); ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();

