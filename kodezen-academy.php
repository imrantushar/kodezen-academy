<?php
/*
 * Plugin Name:       Kodezen Academy
 * Plugin URI:        https://kodezen.com/kodezen-academy
 * Description:       This test plugin
 * Version:           0.0.1
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Tushar Imran
 * Author URI:        https://tusharimran.me
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       kodezen-academy
 * Domain Path:       /languages
 */

define('KZ_PLUGIN_SLUG', 'kodezen-academy');
define('KZ_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('KZ_PLUGIN_DIR_UI', plugins_url('/', __FILE__));


function kz_plugin_setup(){
    require_once KZ_PLUGIN_DIR_PATH . 'includes/admin/menu.php';
    require_once KZ_PLUGIN_DIR_PATH . 'includes/admin/admin.php';
}
add_action('plugin_loaded', 'kz_plugin_setup', 10);


