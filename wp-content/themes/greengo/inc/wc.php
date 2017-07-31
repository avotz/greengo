<?php


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
   // add_theme_support( 'wc-product-gallery-lightbox' );
}
/*remove_action( 'woocommerce_single_product_summary', 
               'woocommerce_template_single_add_to_cart', 30 );
  add_action( 'woocommerce_single_product_summary', 
            'woocommerce_template_single_add_to_cart', 10 );*/

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 4 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
/** woocommerce **/
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 4; // arranged in 2 columns
    return $args;
}

/*---Move Product Title*/
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
//add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 21);

//remove short description from sigle page
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//add description to sigle page without tab
add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {
        return '';
    }
/*function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 30 );*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

    //unset( $tabs['description'] );  
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}


//modificar tab description con la informacion short-description
add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );
function woo_custom_description_tab( $tabs ) {

  $tabs['description']['callback'] = 'woo_custom_description_tab_content';  // Custom description callback

  return $tabs;
}

function woo_custom_description_tab_content() {
  woocommerce_get_template( 'single-product/short-description.php' );
}
//agregar tab details con la informacio de description
add_filter( 'woocommerce_product_tabs', 'woo_details_tab' );
function woo_details_tab( $tabs ) {
  
  // Adds the new tab
  
  $tabs['details'] = array(
    'title'   => __( 'Details', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_details_tab_content'
  );

  return $tabs;

}
function woo_details_tab_content() {

  // The new tab content

  //echo '<h2>New Product Tab</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
  woocommerce_get_template( 'single-product/tabs/description.php' );
  
}
//agregar tab gallery 
add_filter( 'woocommerce_product_tabs', 'woo_gallery_tab' );
function woo_gallery_tab( $tabs ) {
  
  // Adds the new tab
  
  $tabs['gallery'] = array(
    'title'   => __( 'Gallery', 'woocommerce' ),
    'priority'  => 60,
    'callback'  => 'woo_gallery_tab_content'
  );

  return $tabs;

}
function woo_gallery_tab_content() {

  // The new tab content

  //echo '<h2>New Product Tab</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
  woocommerce_get_template( 'single-product/product-thumbnails.php' );
  
}

//agregar tab gallery 
add_filter( 'woocommerce_product_tabs', 'woo_book_tab' );
function woo_book_tab( $tabs ) {
  
  // Adds the new tab
  
  $tabs['book'] = array(
    'title'   => __( 'Book Now', 'woocommerce' ),
    'priority'  => 70,
    'callback'  => 'woo_book_tab_content'
  );

  return $tabs;

}
function woo_book_tab_content() {

  // The new tab content

  //echo '<h2>New Product Tab</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
  woocommerce_get_template( 'single-product/price.php' );
  do_action( 'woocommerce_single_product_summary' );
  
}

//agregar tab rates con la informacio de rates
add_filter( 'woocommerce_product_tabs', 'woo_rates_tab' );
function woo_rates_tab( $tabs ) {
  
  // Adds the new tab
  
  $tabs['rates'] = array(
    'title'   => __( 'Rates', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_rates_tab_content'
  );

  return $tabs;

}
function woo_rates_tab_content() {

  // The new tab content

  echo '<h2>Rates</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
  echo rwmb_meta( 'rw_rates'); 
  
}


// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_city']);
   unset($fields['billing']['billing_postcode']);
   unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_company']);

   $fields['order']['order_comments']['placeholder'] = 'e.g. child seats';
    $fields['order']['order_comments']['label'] = 'Important Notes';
     

     return $fields;
}


