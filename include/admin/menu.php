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
}

function main_menu()
{
    
}