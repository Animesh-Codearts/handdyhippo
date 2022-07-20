<?php

/**

 * Sample implementation of the Custom admin options.

 *

 * https://www.sitepoint.com/create-a-wordpress-theme-settings-page-with-the-settings-api/

 */



function add_theme_menu_item()

{

    add_menu_page("Site Information", "Site Information", "manage_options", "site-information", "theme_settings_page", null, 99);

}



add_action("admin_menu", "add_theme_menu_item");



function theme_settings_page()

{

    ?>

        <div class="wrap">

            <h1>Site Information</h1>

            <?php settings_errors(); ?>

            <form method="post" action="options.php" enctype="multipart/form-data">

                <?php

                    settings_fields("section");

                    do_settings_sections("site-information");      

                    submit_button(); 

                ?>          

            </form>

        </div>

    <?php

}


/* Favicon */

function fav_display()

{

    ?>

        <input type="file" name="fav" /><br />

        <input type="hidden" value="<?php echo get_option('fav'); ?>" height="96">

        <img src="<?php echo get_option('fav'); ?>" height="96" />

   <?php

}



function handle_fav_upload()

{   

    if(!empty($_FILES["fav"]["tmp_name"]))

    {

        $urls = wp_handle_upload($_FILES["fav"], array('test_form' => FALSE));

        $temp = $urls["url"];

        return $temp;   

    }

    else

    {

        return get_option('fav');

    }

}


/* Main Logo */

function logo_display()

{

    ?>

        <input type="file" name="logo" /><br />

        <input type="hidden" value="<?php echo get_option('logo'); ?>" height="96">

        <img src="<?php echo get_option('logo'); ?>" height="96" />

   <?php

}



function handle_logo_upload()

{   

    if(!empty($_FILES["logo"]["tmp_name"]))

    {

        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));

        $temp = $urls["url"];

        return $temp;   

    }

    else

    {

        return get_option('logo');

    }

}
// Address
function display_handdyhippo_address()

{

    ?>

        <textarea name="address" id="address" rows="3" cols="48"><?php echo get_option('address'); ?></textarea>

        <p class="description">Our Address</p>

    <?php

}

// Consult number

function display_consult_number()

{

    ?>

        <input type="text" name="consult_number" id="consult_number" class="regular-text" value="<?php echo get_option('consult_number'); ?>" />

        <p class="description">Enter Consult Number</p>

    <?php

}

/* Email Id */

function display_email()

{

    ?>

        <input type="email" name="email" id="email" class="regular-text" value="<?php echo get_option('email'); ?>" />

        <p class="description">Enter your location</p>

    <?php

}

/* Facebook URL */

function display_Facebook_element()

{

    ?>

        <input type="text" name="facebook_url" id="facebook_url" class="regular-text" value="<?php echo get_option('facebook_url'); ?>" />

        <p class="description">Enter your <a href="https://facebook.com">Facebook</a> URL e.g. https://www.facebook.com/104560124403688998123/</p>

    <?php

}

/* Twitter URL */

function display_Twitter_element()

{

    ?>

        <input type="text" name="twitter_url" id="twitter_url" class="regular-text" value="<?php echo get_option('twitter_url'); ?>" />

        <p class="description">Enter your <a href="https://twitter.com">Twitter</a> URL e.g. https://www.twitter.com/104560124403688998123/</p>

    <?php

}

/* Linkedin URL */

function display_linkedin_element()

{

    ?>

        <input type="text" name="linkedin_url" id="linkedin_url" class="regular-text" value="<?php echo get_option('linkedin_url'); ?>" />

        <p class="description">Enter your <a href="https://linkedin.com">Linkedin</a> URL e.g. https://www.linkedin.com/104560124403688998123/</p>

    <?php

}

/* Footer Logo */

function footer_logo_display()

{

    ?>

        <input type="file" name="footer_logo" /><br />

        <input type="hidden" value="<?php echo get_option('footer_logo'); ?>" height="96">

        <img src="<?php echo get_option('footer_logo'); ?>" height="96" />

   <?php

}



function handle_footer_logo_upload()

{   

    if(!empty($_FILES["footer_logo"]["tmp_name"]))

    {

        $urls = wp_handle_upload($_FILES["footer_logo"], array('test_form' => FALSE));

        $temp_footer = $urls["url"];

        return $temp_footer;   

    }

    else

    {

        return get_option('footer_logo');

    }

}

// handdyhippo Messages
function display_footer_title()

{

    ?>

        <textarea name="footer_title" id="footer_title" rows="3" cols="48"><?php echo get_option('footer_title'); ?></textarea>

        <p class="description">HanddyHippo Footer Title</p>

    <?php

}


// handdyhippo Messages
function display_handdyhippo_messages()

{

    ?>

        <textarea name="messages" id="messages" rows="3" cols="48"><?php echo get_option('messages'); ?></textarea>

        <p class="description">handdyhippo Message For Us</p>

    <?php

}




























function display_theme_panel_fields()

{

    add_settings_section("section", "Social / Contact Settings", null, "site-information");

    add_settings_field("fav", "Favicon", "fav_display", "site-information", "section");

    add_settings_field("logo", "Logo", "logo_display", "site-information", "section");

    add_settings_field("address", "Our Address", "display_handdyhippo_address", "site-information", "section");

    add_settings_field("consult_number", "Consult Number", "display_consult_number", "site-information", "section");

    add_settings_field("email", "Email Id", "display_email", "site-information", "section");

    add_settings_field("facebook_url", "Our Facebook", "display_Facebook_element", "site-information", "section");

    add_settings_field("twitter_url", "Our Twitter", "display_Twitter_element", "site-information", "section");

    add_settings_field("linkedin_url", "Our Linkedin", "display_linkedin_element", "site-information", "section");

    add_settings_field("footer_logo", "Footer Logo", "footer_logo_display", "site-information", "section");

    add_settings_field("footer_title", "Footer Title", "display_footer_title", "site-information", "section");

    add_settings_field("messages", "handdyhippo Message", "display_handdyhippo_messages", "site-information", "section");

    


    






    

    
    


    

    


    





    





    register_setting("section", "fav", "handle_fav_upload");

    register_setting("section", "logo", "handle_logo_upload");

    register_setting("section", "address");

    register_setting("section", "consult_number");

    register_setting("section", "email");

    register_setting("section", "facebook_url");

    register_setting("section", "twitter_url");

    register_setting("section", "linkedin_url");

    register_setting("section", "footer_logo", "handle_footer_logo_upload");

    register_setting("section", "footer_title");   

    register_setting("section", "messages");  

    



   

}



add_action("admin_init", "display_theme_panel_fields");