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

<!-- 	<div class="inner_banner image_slide show-on-scroll" style="background-image: url(<?php echo $image[0] ?>);">
    <div class="container">
      <div class="inner_banner_text">
        <h1><?php the_title() ?></h1>
        <ul class="brdcm">
          <li><a href="<?php echo home_url() ?>">Home</a></li>
          <li><?php the_title() ?></li>
        </ul>
      </div>
    </div>
  </div> -->

 <!--service_details_section_starts-->
  <section class="blog_details pt pb">
    <div class="container">
      <div class="row">

        <div class="col-lg-9 pd_right_blog">
          <?php the_content() ?>
        </div>

        <div class="col-lg-3">
          <div class="post_section">
            <h4>POPULAR POSTS</h4>
             <?php
                    $args = array(
                     'numberposts' => 4,
                     'offset' => 0,

                     'orderby' => 'post_date',
                     'order' => 'ASC',
                     'include' => '',
                     'exclude' => '',
                     'meta_key' => '',
                     'meta_value' => '',
                     'post_type' => 'post',
                     'post_status' => 'publish',
                     'suppress_filters' => true
                    );
                    $j = 1;
                    $banners = wp_get_recent_posts( $args, ARRAY_A );
                    foreach ( $banners as $banner ) {



                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner[ 'ID' ] ), 'single-post-thumbnail' );
                     $date = get_the_date('F j, Y',$banner['ID']);
                       // print_r($banner);

               ?>

            <div class="post_details">
              <a href="<?php echo get_the_permalink($banner['ID']) ?>">
                <div class="post_img">
                  <img src="<?php echo $image[0] ?>" alt="">
                </div>
                <div class="post_text">
                  <h5>ARTS</h5>  
                  <h6><?php echo $date; ?></h6>
                </div>
              </a>
            </div>

           <?php
                  $j++;
                 }
            ?>

          </div>   
        </div>

      </div>    
    </div>
  </section>

	
<?php
endwhile; // End of the loop.

get_footer();
