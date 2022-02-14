<?php
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
// main menu
function main_menu()
{
    global $wpdb;

    // pagination 
    $Get_page = !isset($_GET["item"]) ? "1" : $_GET["item"];
    $record_per_page = 5;

    $get_data_for_pagination = $wpdb->get_results("Select * from {$wpdb->users} 
    WHERE user_email LIKE '%gmail%' OR user_email LIKE '%yahoo%' "
    );
    
    $number_of_pagination =ceil($wpdb->num_rows/$record_per_page);
    
    if ($Get_page == $Get_page) {
        $get_page_to_int = intval($Get_page);
        $start_value = ($get_page_to_int - 1)*$record_per_page;
       
        $pagination_complete = $wpdb->get_results("Select * from {$wpdb->users} 
        WHERE user_email LIKE '%gmail%' OR user_email LIKE '%yahoo%' 
        LIMIT ".$start_value.",".$record_per_page
        );
    }

    // get this user login name or any information
    $Current_user_name = getenv('USERNAME');

    // Send Email to correct user
    if ( !isset($_GET["Action"]) ? null : $_GET["Action"]  == "Send_email") {
        $User_ID_for_send_email = $_GET["which-user"];
        
        $get_data_for_send_email = $wpdb->get_results("Select * from {$wpdb->users} 
        WHERE ID = $User_ID_for_send_email"
        );

        foreach($get_data_for_send_email as $get_email_for_send_email){
            $User_email_for_send_email = $get_email_for_send_email->user_email;
        }
        
        wp_mail($User_email_for_send_email , "Hello" , "We are very happy that you are a complete user and we are proud to have users like you $User_email_for_send_email");
    }

    // add UI 
    $page_url_for_tab = $_GET["page"];
    include USER_RECAPTCH_TEMPLATE ."admin/main_menu.php";
}

// first Submenu 
function first_submenu()
{
    // pagination 
    global $wpdb;

    $Get_page = !isset($_GET["item"]) ? "1" : $_GET["item"];
    $record_per_page = 5;
    
    $get_data_for_pagination = $wpdb->get_results("Select * from {$wpdb->users} 
    WHERE user_email NOT LIKE '%gmail%' and user_email NOT LIKE '%yahoo%'"
    );

    $number_of_pagination =ceil($wpdb->num_rows / $record_per_page);
    
    if ($Get_page == $Get_page) {
        $get_page_to_int = intval($Get_page);
        $start_value = ($get_page_to_int - 1)*$record_per_page;
        $pagination_complete = $wpdb->get_results("Select * from {$wpdb->users} 
        WHERE user_email NOT LIKE '%gmail%' and user_email NOT LIKE '%yahoo%'
        LIMIT ".$start_value.",".$record_per_page
        );
    }

    // Delete bad user 
    $Item = !isset($_GET["Item"]) ? null : $_GET["Item"];
    $Action = !isset($_GET["Action"]) ? null : $_GET["Action"];
    
    if ($Action == "Eliminate_bad_user") {
        $wpdb->delete($wpdb->users,["ID"=>$Item]);
    }

    // add UI
    $page_url_for_tab = $_GET["page"];
    include USER_RECAPTCH_TEMPLATE ."admin/sub_menu.php";
}