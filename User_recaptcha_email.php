<?php
/*
 * Plugin Name: User reCaptcha
 * Description: This plugin for check email and if email not success send a email to verify email 
 * Plugin URI: #
 * Author: Alireza.k
 * Version: 1.0.1
 * Author URI: https://github.com/Alireza0K/
*/
define("USER_RECAPTCH",plugin_dir_path(__FILE__)."include/");
define("USER_RECAPTCH_ASSETS",plugin_dir_url(__FILE__)."assets/");
if (is_admin()) {
    include USER_RECAPTCH . "admin/menu.php";
}
