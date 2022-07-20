<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage handdyhippo
 */
get_header(); 
?>
<!--banner_section_starts-->
<?php
    $hero_inner = get_field('section_enabled');
    if($hero_inner){
?>
<?php 
     $j=1;
     $all_banners= get_field('all_banners'); 
?>
<section class="banner_home">
    <div id="c6a8717" class="lqd-asym-slider" data-asym-slider="true">
        <div class="lqd-asym-slider-inner">
            <div class="container ps-0 pe-0">
                <div class="lqd-asym-slider-t pos-rel z-index-3">
                    <div class="lqd-asym-slider-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="lqd-asym-slider-title-wrap d-flex w-100 pos-rel">
                            <?php foreach ($all_banners as $banners) { ?>
                            <div
                                class="lqd-asym-slider-title w-100 <?php echo $j; ?> <?php if($j == 1){ echo 'active';} ?>">
                                <h2 class="mt-0 mb-0 h1" data-fittext="true"
                                    data-fittext-options='{"compressor": 0.4, "maxFontSize": "currentFontSize"}'>
                                    <span class="d-block" data-split-text="true"
                                        data-split-options='{ "type": "chars, words" }'>
                                        <?php echo get_field('banners_heading',$banners); ?>
                                    </span>
                                </h2>
                            </div>
                            <?php $j++;} ?>

                        </div>
                        <div class="lqd-asym-slider-info-wrap d-flex w-100 pos-rel">
                            <?php $j=1;
                           foreach ($all_banners as $banners) { ?>
                            <div class="lqd-asym-slider-info w-100 <?php if($j == 1){ echo 'active';} ?>">
                                <h4 class="mt-0 mb-0"><?php echo get_field('banners_sub_heading_1',$banners); ?></h4>
                                <hr class="mt-3 mb-3">
                                <p class="h4 mt-0 mb-0"><?php echo get_field('banners_sub_heading_2',$banners); ?>
                                    <span
                                        class="linr_brk"><?php echo get_field('banners_sub_heading_3',$banners); ?></span>
                                </p>
                            </div>
                            <?php $j++;} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lqd-asym-slider-b pos-rel">
                <div class="lqd-asym-slider-img-wrap pos-rel overflow-hidden">
                    <?php foreach ($all_banners as $banners) { ?>
                    <div
                        class="lqd-asym-slider-img w-100 pos-rel overflow-hidden <?php if($j == 1){ echo 'active';} ?>">
                        <div class="lqd-asym-slider-img-inner w-100 overflow-hidden">
                            <figure class="mt-0 mb-0 w-100">
                                <img src="<?php echo get_the_post_thumbnail_url($banners); ?>"
                                    class="w-100 objfit-cover objpos-center" alt="passion et  créativité_" />
                            </figure>
                        </div>
                        <div class="lqd-asym-slider-btn-wrap d-inline-flex pos-abs pos-bl z-index-2 overflow-hidden">
                            <div class="lqd-asym-slider-btn">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="lqd-asym-slider-arrows d-flex pos-abs pos-tr z-index-3">
                    <button class="lqd-asym-slider-arrow lqd-asym-slider-prev pos-rel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            style="height: 1em;">
                            <path
                                d="M26.688 14.664H10.456l7.481-7.481L16 5.313 5.312 16 16 26.688l1.87-1.87-7.414-7.482h16.232v-2.672z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button class="lqd-asym-slider-arrow lqd-asym-slider-next pos-rel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            style="height: 1em;">
                            <path
                                d="M5.313 17.336h16.231l-7.481 7.481L16 26.687 26.688 16 16 5.312l-1.87 1.87 7.414 7.482H5.312v2.672z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $j++;  ?>
<?php } ?>
<!--banner_section_ends-->

<!--process_section_starts-->
<?php 
$hero_process = get_field('process_sections'); 
 if($hero_process['section_enabled']){
?>
<section class="process_section pt">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                <div class="border_heading show-on-scroll d-flex align-items-center justify-content-between">
                    <h2><?php echo $hero_process['process_title']; ?></h2>
                    <span><?php echo $hero_process['process_number']; ?></span>
                </div>
                <div class="main_area">
                    <?php for($i=1; $i<=3; $i++) { ?>
                    <div class="process_portion">
                        <div class="sub zoom_animation show-on-scroll">
                            <span><?php
                                       $num = $i;
                                       $num_padded = sprintf("%02d", $num);
                                       echo $num_padded; // returns 04
                                   ?>
                            </span>
                            <h3><?php echo $hero_process['a_line_'.$i]; ?></h3>
                            <p><?php echo $hero_process['b_line_'.$i]; ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php  } ?>
<!--process_section_ends-->

<!--project_section_starts-->
<?php 
$hero_project = get_field('project_section'); 
 if($hero_project['section_enabled']){
?>
<section class="project_section">
    <div class="container">
        <div class="common_heading show-on-scroll">
            <h2 class="top_animation_text show-on-scroll"><?php echo $hero_project['project_heading']?></h2>
            <p class="top_animation_text show-on-scroll"><?php echo $hero_project['project_sub_heading']?></p>
        </div>
    </div>
    <div>
        <?php  $all_projects= $hero_project['allprojects']; ?>
        <?php foreach ($all_projects as $projects) { ?>
        <div class="portion_one">
            <div class="text_portion align-self-center">
                <div class="contain_text">
                    <h3 class="top_animation show-on-scroll"><?php echo get_the_title($projects); ?></h3>
                    <div class="para top_animation show-on-scroll">
                        <p><?php echo get_the_excerpt($projects); ?></p>
                    </div>
                    <span class="btn_plus top_animation show-on-scroll">
                        <a href="<?php echo get_the_permalink($projects); ?>"><i class="fa-solid fa-plus"></i></a>
                    </span>
                </div>
            </div>
            <div class="img_portion pic_zoom_animation image_slide show-on-scroll">
                <img src="<?php echo get_the_post_thumbnail_url($projects); ?>"
                    alt="<?php echo get_the_title($projects); ?>">
            </div>
        </div>
        <?php } ?>

    </div>

</section>
<?php } ?>
<!--project_section_ends-->

<!--product_section-starts-->

<section class="product_section d-flex pt pb">
    <ul class="tab_mneu_section tabs align-self-center fade_animation show-on-scroll">
        <?php 
        
        $categories = get_terms( array( 
            'taxonomy' => 'product_category',
            'parent'   => 0
        ) );
        echo "<pre>";
        //print_r($categories);
        echo "</pre>";
                                
       foreach( $categories as $category ) { ?>
                <li><a href="#tab-<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
        <?php 
                } 
        ?>
    </ul>

    <div class="tab_content_slide_section fade_animation show-on-scroll">
        <?php foreach( $categories as $category ) { ?>
        <div class="tab_content_area" id="tab-<?php echo $category->slug; ?>">
            <div class="slide_area tab-slider owl-carousel">
                <?php
                        $args = array(
                        'post_type' => 'cpt_products',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'product_category',
                            'field' => 'term_id',
                            'terms' => $category->term_id
                             )
                          )
                        );
                        $query = new WP_Query( $args );
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
     
                            $query->the_post();
                ?>


                <div class="portion">
                    <a href="javascript:void(0);">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>

                <?php
                        }
                    }
                    wp_reset_postdata();
                ?>

            </div>
        </div>
    <?php } ?>

    </div>
</section>

<!--product_section-ends-->

<!--blog_section_starts-->
<?php 
$hero_blogs = get_field('blog_sections'); 
 if($hero_blogs['section_enabled']){
?>
<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                <div class="common_heading show-on-scroll">
                    <h2 class="top_animation_text show-on-scroll"><?php echo $hero_blogs['blog_heading']; ?></h2>
                    <p class="top_animation_text show-on-scroll"><?php echo $hero_blogs['blog_sub_heading']; ?></p>
                </div>

                <div class="blog_slide top_animation_text show-on-scroll">
                    <div class="carousel-wrap">
                        <div class="owl-carousel owl-theme blogsection">
                            <?php  $all_blogs= $hero_blogs['all_blogs']; ?>
                            <?php foreach ($all_blogs as $blogs) { ?>


                            <div class="item">
                                <div class="blog_box">
                                    <div class="blog_img">
                                        <img src="<?php echo get_the_post_thumbnail_url($blogs); ?>"
                                            alt="<?php echo get_the_title($blogs); ?>">
                                        <span class="img_sub_text"><?php echo get_the_date('F j, Y', $blogs); ?></span>
                                    </div>
                                    <div class="blog_text">
                                        <h4><a
                                                href="<?php echo get_the_permalink($blogs); ?>"><?php echo get_the_title($blogs); ?></a>
                                        </h4>
                                        <div class="blog_para">
                                            <p><?php echo get_the_excerpt($blogs); ?>
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
</section>
<?php } ?>
<!--blog_section_ends-->

<!--testimonial_section_starts-->
<?php 
$hero_testimonials = get_field('testimonial_sections'); 
 if($hero_testimonials['section_enabled']){
?>
<div class="testimonial_section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                <div class="common_heading show-on-scroll">
                    <h2 class="top_animation_text show-on-scroll">
                        <?php echo $hero_testimonials['testimonial_heading']; ?></h2>
                    <p class="top_animation_text show-on-scroll">
                        <?php echo $hero_testimonials['testimonial_sub_heading']; ?></p>
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
                                        <h5><?php echo get_the_title($testimonials); ?></h5>
                                        <h6><?php echo get_field('designation',$testimonials); ?></h6>
                                        <div class="testi_para">
                                            <p><?php echo get_field('comments',$testimonials); ?></p>
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
<?php } ?>
<!--testimonial_section_ends-->

<!--call_action_section_starts-->
<?php 
$hero_callus = get_field('call_to_us_section'); 
 if($hero_callus['section_enabled']){
?>
<div class="call_action_section pt pb"
    style="background-image: url(<?php echo $hero_callus['callus_banner_image']; ?>);">
    <div class="container">
        <div class="common_heading white show-on-scroll">
            <h2 class="top_animation_text show-on-scroll"><?php echo $hero_callus['callus_heading']; ?></h2>
            <p class="top_animation_text show-on-scroll"><?php echo $hero_callus['callus_sub_heading']; ?></p>
        </div>
        <span class="common_btn_white">
            <a href="<?php echo $hero_callus['callus_button_link']; ?>"><span>Reach Us</span></a>
        </span>
    </div>
</div>
<?php } ?>
<!--call_action_section_ends-->

<!--home_contact_form_section_starts-->
<?php 
$hero_office = get_field('our_office_section'); 
 if($hero_office['sections_enabled']){
?>
<section class="home_contact_form">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
                <div class="common_heading show-on-scroll">
                    <h2 class="top_animation_text show-on-scroll"><?php 
                         echo $hero_office['our_office_heading']; ?></h2>
                    <p class="top_animation_text show-on-scroll"><?php 
                         echo $hero_office['our_office_sub_heading']; ?></p>
                </div>
                <div class="form_box">
                    <?php 
                         $hero_form = $hero_office['our_office_form'];
                         echo do_shortcode($hero_form);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!--home_contact_form_section_ends-->



<?php
get_footer();