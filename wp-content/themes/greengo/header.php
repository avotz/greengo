<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greengo
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(is_front_page()) :?>
  <header class="header">
<?php else: ?>
 <header class="header header--fixed">
<?php endif ?>

    <div class="inner">
        <span class="header-logo-font">Green Go</span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" /></a>
       
     
        <button id="btn-menu" class="header-btn-menu">
            <i class="icon-menu"></i>
        </button>
        <?php wp_nav_menu( array(
             'theme_location' => 'header',
             'menu_id' => 'header-menu',
             'container'       => 'nav',
            'container_class' => 'header-menu',
            'container_id'    => '',
            'menu_class'      => 'header-menu-ul',
              ) 
          ); 
          ?>
         
        
    </div>   
    
</header>

