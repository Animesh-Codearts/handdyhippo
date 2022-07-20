<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage handdyhippo

 */

?>
   <!--footer_section_starts-->
   <footer>
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer_bg.png" class="parallex show-on-scroll thumbnail" alt="">
      <div class="main_footer">
         <a href="<?php echo site_url();?>" class="logo fade_animation show-on-scroll "><img src="<?php echo get_option('footer_logo'); ?>" alt=""></a>
         <h2 class="top_animation_text show-on-scroll"><?php echo get_option('footer_title'); ?></h2>
         <h5 class="top_animation_text show-on-scroll">Location</h5>
         <div class="contact_section d-flex">
            <div class="footer_portion">
               <ul class="contacts top_animation_text show-on-scroll">
                  <li class="d-flex align-items-start">
                     <img src="<?php echo get_theme_file_uri(); ?>/assets/images/header_map.png" alt="">
                     <span><?php echo get_option('address'); ?></span>
                  </li>
                  <li class="d-flex align-items-center"><a href="tel:<?php echo get_option('consult_number'); ?>">
                     <img src="<?php echo get_theme_file_uri(); ?>/assets/images/header_phone.png" alt="">
                     <span><?php echo get_option('consult_number'); ?></span></a>
                  </li>
               </ul>
            </div>
            <div class="footer_portion top_animation_text show-on-scroll">
               <h3>Have a project in mind?</h3>
               <a href="mailto:<?php echo get_option('email'); ?>" class="mail"><?php echo get_option('email'); ?></a>
            </div>
            <div class="footer_portion top_animation_text show-on-scroll">
               <p><?php echo get_option('messages'); ?></p>
            </div>
         </div>
         <div class="bottom_part d-flex align-items-center justify-content-between ">
            <ul class="footer_social d-flex align-items-center left_animation show-on-scroll">
               <li>
                  <a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
               </li>
               <li>
                  <a href="<?php echo get_option('twitter_url'); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
               </li>
               <li>
                  <a href="<?php echo get_option('linkedin_url'); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
               </li>
            </ul>
            <?php 

                wp_nav_menu( array(
                         'menu'              => "Main_menu",
                         'menu_class'        => "ft_menu d-flex right_animation show-on-scroll",
                         'container_class'   => '',
                        ) );
			?>
<!--             <ul class="ft_menu d-flex right_animation show-on-scroll">
               <li><a href="">Home</a></li>
               <li><a href="">About Us</a></li>
               <li><a href="">Services</a></li>
               <li><a href="">Blog</a></li>
               <li><a href="">Contact Us</a></li>
            </ul> -->
         </div>
      </div>
   </footer>
   <!--footer_section_ends-->


<?php wp_footer(); ?>
</body>

</html>

