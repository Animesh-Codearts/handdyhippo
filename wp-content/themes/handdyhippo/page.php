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

?>
<div class="inner_banner image_slide show-on-scroll"
    style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

        <div class="container">
            <div class="inner_banner_text">
            	<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						if(get_the_content()!= '')
						{
							the_content();
						}
						else
						{
							echo "<h1>Content Comming Soon..</h1>";
						}
					endwhile; ?>
				<?php endif; ?>
               
            </div>
        </div>
    </div>


<?php

get_footer();
