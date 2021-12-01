<?php
// add_action("admin_menu","main_menus");
// function main_menus() {
//     add_menu_page(
//         "User_checker", //name
//         "User_checker", //title
//         "manage_options", //unic
//         "nnews_menu", //Slug
//         "main_menu", //import file
//         USER_RECAPTCH_ASSETS . "images/business_man_user_support_supportfortheuser_aquestion_theclient_2330.png",
//     );
// }

add_action("admin_menu","main_menus");
function main_menus()
{
    add_menu_page(
        "main-menu", 
        "User reCAPTCHA", 
        "manage_options", 
        "main-menu", 
        "main_menu", 
        USER_RECAPTCH_ASSETS . "images/question.png"
    );
    add_submenu_page(
        "main-menu", 
        "Bad-user", 
        "Bad User", 
        "manage_options", 
        "first-submenu", 
        "first_submenu", 
    );
}

function main_menu()
{
    $page_url_for_tab = $_GET["page"];
    include USER_RECAPTCH_TEMPLATE ."admin/main_menu.php";
}
function first_submenu()
{
    $page_url_for_tab = $_GET["page"];
    include USER_RECAPTCH_TEMPLATE ."admin/sub_menu.php";
}