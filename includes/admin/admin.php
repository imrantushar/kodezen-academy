<?php 

// nonce verify
// User role / capability check

// sanitize
// data validation - optional

// escaping

add_action('admin_post_ka_user_register', function(){
    if(!isset($_POST['security']) || !wp_verify_nonce( $_POST['security'], 'ka_register_user')){
        wp_die(esc_html__('Security Failed!', 'kodezen-academy'));
    }

    if(! current_user_can('manage_options')){
        wp_die('Sorry, You have no permission to crate new user.');
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);

    if(!is_email($email)){
        wp_die('Sorry, invalid email');
    }

    if(empty($name)){
        wp_die('Sorry, name is empty');
    }



    var_dump($_POST);


});