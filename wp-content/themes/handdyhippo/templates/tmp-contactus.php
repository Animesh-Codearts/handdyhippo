<?php
/**

 * Template Name: Contact Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage handdyhippo

 */
get_header();

while ( have_posts() ) :
  the_post();
?>


  <!--home_contact_form_section_starts-->
  <?php $hero_contact = get_field('find_us'); ?>
  <section class="home_contact_form">
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
          <div class="common_heading show-on-scroll">
            <h2 class="top_animation_text show-on-scroll"><?php echo $hero_contact['find_us_heading']; ?></h2>
            <p class="top_animation_text show-on-scroll"><?php echo $hero_contact['find_us_sub_heading']; ?></p>
          </div>

          <!--conatct_page_starts-->
          <div class="conatct_social_details">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact_box zoommain_animation show-on-scroll">
                        <div class="img_icon">
                            <img src="<?php echo $hero_contact['icon_1']; ?>" alt="">
                        </div>
                        <h3><?php echo $hero_contact['title_1']; ?></h3>
                        <h6><a href="tel:<?php echo get_option('consult_number'); ?>"><?php echo get_option('consult_number'); ?></a></h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact_box zoommain_animation show-on-scroll">
                        <div class="img_icon">
                            <img src="<?php echo $hero_contact['icon_2']; ?>" alt="">
                        </div>
                        <h3><?php echo $hero_contact['title_2']; ?></h3>
                        <h6><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact_box zoommain_animation show-on-scroll">
                        <div class="img_icon">
                            <img src="<?php echo $hero_contact['icon_3']; ?>" alt="">
                        </div>
                        <h3><?php echo $hero_contact['title_3']; ?></h3>
                        <h6><?php echo get_option('address'); ?></h6>
                    </div>
                </div>
            </div>
          </div>
          <!--conatct_page_ends-->

          <div class="form_box">
            <?php 
                 $hero_form = get_field('find_us_form');
                 echo do_shortcode($hero_form);
            ?>
          </div>
        </div>
      </div>    
    </div>
  </section>
  <!--home_contact_form_section_ends-->

  <!--map_section_starts-->
  <div class="map_section">
  	<?php $map = get_field('find_us_map'); echo $map; ?>
  </div>
  <!--map_section_ends-->


<?php
endwhile; // End of the loop.

get_footer();