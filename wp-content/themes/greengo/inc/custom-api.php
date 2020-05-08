<?php


// add_action('phpmailer_init', 'mailtrap');

// add_action('init', function(){
//     add_rewrite_rule( 
//        '^property/([^/]+)([/]?)(.*)', 
//        //!IMPORTANT! THIS MUST BE IN SINGLE QUOTES!:
//        'index.php?pagename=tour&tour=$matches[1]', 
//        'top'
//     );   
//     
//  });

//  add_filter('query_vars', function( $vars ){
//     $vars[] = 'pagename'; 
//     $vars[] = 'tour'; 
//     return $vars;
// });

function get_tours(){

    $args = array(
        'post_type' => 'product',
        //'order' => 'ASC',
        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
        'posts_per_page' => -1,
       'tax_query' => array(
          array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'tour'
          )
        )
        
      );
      $items = new WP_Query( $args );

      return $items->posts;
   
}

function get_accommodations(){

    $args = array(
        'post_type' => 'product',
        //'order' => 'ASC',
        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
        'posts_per_page' => -1,
       'tax_query' => array(
          array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'luxury-accommodation'
          )
        )
        
      );
      $items = new WP_Query( $args );

      return $items->posts;
   
}



add_action('rest_api_init', function () {
  
    register_rest_route('alo/v1', '/tours', array(
        'methods' => 'GET',
        'callback' => 'get_tours',
    ));

    register_rest_route('alo/v1', '/accommodations', array(
        'methods' => 'GET',
        'callback' => 'get_accommodations',
    ));
   

 
});
