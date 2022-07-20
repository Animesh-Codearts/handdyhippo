<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage handdyhippo
 
 */



?>

  <?php if(!is_front_page()) { ?>
      <?php if(get_the_post_thumbnail_url()!='') {?>
        <div class="inner_banner image_slide show-on-scroll" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <?php } else { ?>
        <div class="inner_banner image_slide show-on-scroll"
    style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner_banner.jpg);">
      <?php } ?>

        <div class="container">
            <div class="inner_banner_text">
                <h1><?php echo get_the_title(); ?></h1>
                <ul class="brdcm">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><?php echo get_the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>

  <?php } else if('post' == get_post_type() || 'cpt_services' == get_post_type() ||  'cpt_portfolio' == get_post_type() )
    { ?>
      <div class="inner_banner image_slide show-on-scroll" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="container">
            <div class="inner_banner_text">
               <?php
                    if('post' == get_post_type())
                    {
                      echo "<h1>Blogs</h1>";
                    }
                    else if('cpt_services' == get_post_type())
                    {
                      echo "<h1>Services</h1>";
                    }
                    else if('cpt_portfolio' == get_post_type())
                    {
                      echo "<h1>Portfolio</h1>";
                    }
                  ?>
                
                <ul class="brdcm">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><?php
                            if('post' == get_post_type())
                            {
                              echo "Blogs";
                            }
                            else if('cpt_services' == get_post_type())
                            {
                              echo "Services";
                            }
                            else if('cpt_portfolio' == get_post_type())
                            {
                              echo "Portfolio";
                            }
                        ?>
                   </li>
                </ul>
            </div>
        </div>
    </div>
  <?php } if(is_archive())
    { ?>
      <div class="inner_banner image_slide show-on-scroll" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="container">
            <div class="inner_banner_text">
               <?php
                    if('post' == get_post_type())
                    {
                      echo '<h1>'.get_the_archive_title().'</h1>';
                    }
                    else if('cpt_services' == get_post_type())
                    {
                      echo '<h1>'.get_the_archive_title().'</h1>';
                    }
                    else if('cpt_portfolio' == get_post_type())
                    {
                      echo '<h1>'.get_the_archive_title().'</h1>';
                    }
                  ?>
                
                <ul class="brdcm">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><?php
                            if('post' == get_post_type())
                            {
                              echo get_the_archive_title();
                            }
                            else if('cpt_services' == get_post_type())
                            {
                              echo get_the_archive_title();
                            }
                            else if('cpt_portfolio' == get_post_type())
                            {
                              echo get_the_archive_title();                            }
                        ?>
                   </li>
                </ul>
            </div>
        </div>
    </div>
  <?php } ?> 
