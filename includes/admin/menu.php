<?php 

add_action('admin_menu', 'kz_admin_menu');

function kz_admin_menu(){
    $page_title = apply_filters('kz_admin_page_title', __( 'Kodezen Academy', 'textdomain' ));
    $menu_title = apply_filters('kz_admin_menu_title', 'Kodezen Academy');
    add_menu_page(
        $page_title,
		$menu_title,
		'manage_options',
		KZ_PLUGIN_SLUG,
        'kz_load_admin_template'
	);
}

function kz_load_admin_template(){
    include KZ_PLUGIN_DIR_PATH . 'includes/admin/partials/dashboard.php';
}