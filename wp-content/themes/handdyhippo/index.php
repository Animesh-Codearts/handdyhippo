<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage handdyhippo
 */

get_header(); ?>



     <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                    <div class="common_heading show-on-scroll">
                        <h2 class="top_animation_text show-on-scroll">Our Blogs</h2>
                        <p class="top_animation_text show-on-scroll">Updates with our Latest Blogging</p>
                    </div>
                </div>
            </div>
            <div class="blog_slide blog_inner top_animation_text show-on-scroll">
                <div class="carousel-wrap">
                    <div class="row">
                    	<?php
						if ( have_posts() ) {

							// Load posts loop.
							while ( have_posts() ) {
								the_post(); 
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
								?>
								 <div class="col-lg-4 col-md-6">
		                            <div class="item">
		                                <div class="blog_box">
		                                    <div class="blog_img">
		                                        <img src="<?php echo $image[0] ?>" alt="">
		                                        <span class="img_sub_text">2years ago</span>
		                                    </div>
		                                    <div class="blog_text">
		                                        <h4><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h4>
		                                        <div class="blog_para">
		                                           <?php the_excerpt() ?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        

								
							<?php
							}

							// Previous/next page navigation.
							handdyhippo_the_posts_navigation();

						} else {

							// If no content, include the "No posts found" template.
							get_template_part( 'template-parts/content/content-none' );

						} ?>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
