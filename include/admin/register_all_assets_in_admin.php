<?php
function register_all_file_admin()
{
    // register scripts 
    wp_register_script("bootstrap.bundle",USER_RECAPTCH_ASSETS."js/bootstrap.bundle.js");
    wp_register_script("bootstrap.min",USER_RECAPTCH_ASSETS."js/bootstrap.min.js");
    // register styles
    wp_register_style("bootstrap.min",USER_RECAPTCH_ASSETS."css/bootstrap.min.css");
    
}
add_action("admin_enqueue_scripts","register_all_file_admin");