<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage handdyhippo

 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post(); 
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
	?>

<!--   <div class="inner_banner image_slide show-on-scroll" style="background-image: url(images/inner_banner.jpg);">
    <div class="container">
      <div class="inner_banner_text">
        <h1>Services</h1>
        <ul class="brdcm">
          <li><a href="#">Home</a></li>
          <li>services</li>
        </ul>
      </div>
    </div>
  </div> -->
  <!--inner_banner_section_ends-->

 
  
  <section class="services_section pt">
        <div class="container">
            <div class="common_heading show-on-scroll">
                <h2 class="top_animation_text show-on-scroll">Services Details</h2>
                <p class="top_animation_text show-on-scroll">check out our services</p>
            </div>
            <div class="main_area">
                <div class="service_portion">
                    <div class="row">
                      <?php
                $service_gallary = CFS()->get( 'add_service_image' ); 
                           //print_r($experience_gallary);
                      foreach( $service_gallary as $s_gallary){ ?>
                        <div class="col-lg-12 left common">
                            <div class="image_area image_slide show-on-scroll">
                                <img src="<?php echo $s_gallary['image']; ?>" alt="">
                            </div>
                            
                        </div>
                        <?php  }  ?>   
                        <div class="col-lg-12 image_slide show-on-scroll right common align-self-center">
                            <div class="content_area">
                                <h2><?php echo get_the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
  </section>

	
<?php
endwhile; // End of the loop.

get_footer();
