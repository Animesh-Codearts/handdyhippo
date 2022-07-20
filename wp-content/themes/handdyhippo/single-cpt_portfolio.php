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

  <section class="blog_section">
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
          <div class="common_heading show-on-scroll">
            <h2 class="top_animation_text show-on-scroll">Portfolio Details</h2>
            <p class="top_animation_text show-on-scroll">Updates with our Latest Portfolio</p>
          </div>

          <div class="blog_slide top_animation_text show-on-scroll">
            <div class="carousel-wrap">
              <div class="owl-carousel owl-theme blogsection">
              <?php
                $Portfolio_gallary = CFS()->get( 'add_gallery_image' ); 
                           //print_r($experience_gallary);
                      foreach( $Portfolio_gallary as $gallary){ ?>
    
                <div class="item">
                  <div class="blog_box">
                    <div class="blog_img" href="" data-fancybox="gallery">
                      <img src="<?php echo $gallary['image']; ?>" alt="">
                    </div>
                  </div>
                </div>
              <?php  }  ?>    
              </div>
            </div>

            <div class="portion_details_text_box text-center top_animation_text show-on-scroll">
              <h3><?php echo get_the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	
<?php
endwhile; // End of the loop.

get_footer();
