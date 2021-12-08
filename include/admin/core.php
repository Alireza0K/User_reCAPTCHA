<?php

function mani_core()
{
    global $wpdb;
    $select_corect_user_gmail = $wpdb->get_results("SELECT * FROM {$wpdb->users} WHERE user_email LIKE '%gmail%';");
}