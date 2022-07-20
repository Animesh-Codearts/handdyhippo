<?php
/**

 * Template Name: Services

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage handdyhippo

 */
get_header();

while ( have_posts() ) :
  the_post();
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
?>


  <!--inner_banner_section_ends-->  

<section class="services_section port_catagory_sec pt">
<div class="container">
    <div class="common_heading show-on-scroll">
      <h2 class="top_animation_text show-on-scroll">Our Services Category</h2>
      <p class="top_animation_text show-on-scroll">Check out our Services category</p>
    </div>
    <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
      <div class="main_area">
        <div class="service_portion">
          <div class="row">
            <?php 
        
                $service_categories = get_terms( array( 
                    'taxonomy' => 'service_category',
                    'parent'   => 0,
                    'hide_empty' => false,
                ) );
                echo "<pre>";
                //print_r($service_categories);
                echo "</pre>";
                                        
               foreach( $service_categories as $service_category ) { ?>

            <div class="col-lg-6">
              <div class="port_cata_box">
                <div class="image_area image_slide show-on-scroll">
                  <img src="<?php echo get_field('category_image', $service_category); ?>" alt="">
                </div>
                <div class="content_area top_animation show-on-scroll">
                  <h2><?php echo $service_category->name; ?></h2>
                  <p><?php echo $service_category->description; ?></p>
                  <span class="btn_plus top_animation show-on-scroll">
                    <a href="<?php echo get_term_link($service_category); ?>"><i class="fa-solid fa-plus"></i></a>
                  </span>
                </div>
              </div>
            </div>

              <?php } ?>

          </div>
        </div>
      </div>
    </div>
</div>
</section>


<?php
endwhile; // End of the loop.

get_footer();