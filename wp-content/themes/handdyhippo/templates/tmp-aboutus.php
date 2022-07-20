<?php
/**

 * Template Name: About Us

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


<!--inner_about_strats-->
<?php $hero_about = get_field('about_section'); ?>
<div class="inner_about  pt pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about_image image_slide show-on-scroll">
                    <img src="<?php echo $hero_about['about_image']; ?>" alt="">
                    <div class="border_port"></div>
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="about_text">
                    <h2 class="top_animation_text show-on-scroll">
                        <?php echo get_the_title(); ?>
                    </h2>
                    <h4 class="top_animation_text show-on-scroll">
                        <?php echo $hero_about['about_sub_heading']; ?>
                    </h4>
                    <p class="top_animation_text show-on-scroll">
                        <?php echo $hero_about['about_details']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--inner_about_ends-->

<!--process_section_starts-->
<?php $hero_process = get_field('about_process_sections'); ?>
<section class="process_section pt">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                <div class="border_heading show-on-scroll d-flex align-items-center justify-content-between">
                    <h2>
                        <?php echo $hero_process['process_title']; ?>
                    </h2>
                    <span>
                        <?php echo $hero_process['process_number']; ?>
                    </span>
                </div>
                <div class="main_area">
                    <?php for($i=1; $i<=3; $i++) { ?>
                    <div class="process_portion">
                        <div class="sub zoom_animation show-on-scroll">
                            <span>
                                <?php
                                       $num = $i;
                                       $num_padded = sprintf("%02d", $num);
                                       echo $num_padded; // returns 04
                                ?>
                            </span>
                            <h3>
                                <?php echo $hero_process['a_line_'.$i]; ?>
                            </h3>
                            <p>
                                <?php echo $hero_process['b_line_'.$i]; ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!--process_section_ends-->

<!--testimonial_section_starts-->
<?php 
$hero_testimonials = get_field('about_testimonial_sections');
?>
<div class="testimonial_section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                <div class="common_heading show-on-scroll">
                    <h2 class="top_animation_text show-on-scroll">
                        <?php echo $hero_testimonials['testimonial_heading']; ?>
                    </h2>
                    <p class="top_animation_text show-on-scroll">
                        <?php echo $hero_testimonials['testimonial_sub_heading']; ?>
                    </p>
                </div>

                <div class="testimonial_slide top_animation_text show-on-scroll">
                    <div class="carousel-wrap">
                        <div class="owl-carousel owl-theme testimonialsection">

                            <?php  $all_testimonials= $hero_testimonials['all_testimonials']; ?>
                            <?php foreach ($all_testimonials as $testimonials) { ?>

                            <div class="item">
                                <div class="testimonial_box">
                                    <div class="img_box">
                                        <img src="<?php echo get_the_post_thumbnail_url($testimonials); ?>" alt="">
                                    </div>
                                    <div class="testi_text">
                                        <h5>
                                            <?php echo get_the_title($testimonials); ?>
                                        </h5>
                                        <h6>
                                            <?php echo get_field('designation',$testimonials); ?>
                                        </h6>
                                        <div class="testi_para">
                                            <p>
                                                <?php echo get_field('comments',$testimonials); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--testimonial_section_ends-->

<!--call_action_section_starts-->
<?php $hero_callus = get_field('about_call_to_us_section'); ?>

<div class="call_action_section pt pb"
    style="background-image: url(<?php echo $hero_callus['callus_banner_image']; ?>);">
    <div class="container">
        <div class="common_heading white show-on-scroll">
            <h2 class="top_animation_text show-on-scroll">
                <?php echo $hero_callus['callus_heading']; ?>
            </h2>
            <p class="top_animation_text show-on-scroll">
                <?php echo $hero_callus['callus_sub_heading']; ?>
            </p>
        </div>
        <span class="common_btn_white">
            <a href="<?php echo $hero_callus['callus_button_link']; ?>"><span>Reach Us</span></a>
        </span>
    </div>
</div>
<!--call_action_section_ends-->



<?php
endwhile; // End of the loop.

get_footer();