<?php
/**
 * Service taxonomy archive
 */
get_header();


?>


<section class="project_section">
    <div class="container">
        <div class="common_heading show-on-scroll">
            <h2 class="top_animation_text show-on-scroll">Our Services</h2>
            <p class="top_animation_text show-on-scroll">Interior design is the art and science of enhancing</p>
        </div>
    </div>


<?php while ( have_posts() ) : the_post(); ?>
    <div class="portion_one">
        <div class="text_portion align-self-center">
            <div class="contain_text">
                <h3 class="top_animation show-on-scroll"><?php echo get_the_title(); ?></h3>
                <div class="para top_animation show-on-scroll">
                    <p><?php echo get_the_excerpt(); ?></p>
                </div>
                <span class="btn_plus top_animation show-on-scroll">
                    <a href="<?php echo get_the_permalink(); ?>"><i class="fa-solid fa-plus"></i></a>
                </span>
            </div>
        </div>
        <div class="img_portion pic_zoom_animation image_slide show-on-scroll">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
    </div>

    <?php 
          endwhile;
    ?>



</section>


<?php 


get_footer(); ?>