<?php 

add_action('kz_admin_dashboard', function(){
    $menu_items = apply_filters(
        'kz_admin_sub_menu_items', 
        ['Menu one', 'Menu Two', 'Menu Three', 'Menu Four', 'Menu Five'],
        'dashboard',
        'another'
    );

    foreach( $menu_items as  $menu_item){
        echo '<li>' . $menu_item . '</li>';
    }
    
});