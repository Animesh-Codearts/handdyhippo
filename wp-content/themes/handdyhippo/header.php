<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage handdyhippo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php handdyhippo_the_html_classes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="icon" href="<?php echo get_option('fav'); ?>" />

   <!--bootstrap_starts-->


<?php wp_head(); ?>
</head>

<body data-lqd-cc="true" data-cc-options="{&quot;outerCursorHide&quot;:true}" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
   <div class="lqd-cc lqd-cc--inner pos-fix pointer-events-none"></div>
   <div class="menu_ovarlay" id="menu_ovarlay" onclick="mobile_menu_close()"></div>

   <!--HEADER STARTS-->
   <header>
      <div class="header_navs">
         <div class="container">
            <div class="logo_nav">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3">
                     <div class="logo left_animation show-on-scroll">
                        <a href="<?php echo site_url();?>"><img src="<?php echo get_option('logo'); ?>" alt=""></a>
                     </div>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9">
                     <div class="social_nav">
                        <div class="header_social right_animation show-on-scroll">
                           <ul class="address_sec">
                              <li><img src="<?php echo get_theme_file_uri(); ?>/assets/images/header_map.png" alt=""><span><?php echo get_option('address'); ?></span></li>
                              <li><a href="tel:<?php echo get_option('consult_number'); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/header_phone.png" alt=""><span><?php echo get_option('consult_number'); ?></span></a>
                              </li>
                           </ul>
                           <span class="header_btn">
                              <a href="tel:<?php echo get_option('consult_number'); ?>"><span>CALL US NOW</span></a>
                           </span>
                        </div>
                        <div class="nav_full top_animation show-on-scroll">
                           <nav class="navbar navbar-expand-lg navbar-light bg-light navigation_top mobile-menu">
                           	<?php 

				                wp_nav_menu( array(
				                         'menu'              => "Main_menu",
				                         'menu_class'        => "navbar-nav me-auto mb-2 mb-lg-0",
				                         'container_class'   => '',
				                        ) );
				                  ?>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!--HEADER ENDS-->

<?php get_sidebar(); ?>