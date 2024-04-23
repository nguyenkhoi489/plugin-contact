<?php

/**
 * Plugin Name: Contact Button
 * Plugin URI: /plugin/nkd-contact
 * Update URI: 
 * Description:  Button contact call, zalo, whatsapp, messenger, popup form ...
 * Version: 1.0
 * Requires at least: 5.5
 * Requires PHP: 7.4
 * Author: Thái Nguyên Khôi
 * Author URI: https://www.facebook.com/nguyenkhoi489/
 * License: GPL
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: nkd-contact
 */

include_once(ABSPATH . 'wp-admin/includes/plugin.php');

//details
define('Plugin_Path', plugin_dir_path(__FILE__));
define('Plugin_URI', plugin_dir_url(__FILE__));
define('Plugin_VERSION', '1.0');
define('Plugin_ITEM_NAME', 'Contact Button');

require_once Plugin_Path . 'inc/helper.php';
require_once Plugin_Path . 'inc/ajax.php';

// add link setting
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links');
function add_action_links($actions)
{
    $mylinks = array(
        '<a href="' . admin_url('admin.php?page=nkd-contact') . '">' . esc_html__('Settings', 'setting_contact') . '</a>',
    );
    $actions = array_merge($actions, $mylinks);
    return $actions;
}

// register Setting
if (!function_exists('nkd_register_setting')) {
    function nkd_register_setting()
    {
        //Register Button
        register_setting('nkd_button_options_group', 'config_hotline', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_hotline_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_zalo', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_zalo_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_telegram', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_telegram_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_instagram', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_instagram_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_youtube', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_youtube_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_tiktok', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_tiktok_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_fanpage', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_fanpage_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_whatsapp', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_whatsapp_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_viber', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_viber_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_map_url', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_map_url_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_contact_url', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_contact_url_tooltip', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_shopee', 'nkd_button_callback');
        register_setting('nkd_button_options_group', 'config_shopee_tooltip', 'nkd_button_callback');

        //Register Form
        register_setting('nkd_form_options_group', 'config_form');
        register_setting('nkd_form_options_group', 'config_form_title');

        //Setting Form
        register_setting('nkd_settings_options_group', 'config_setting_enable');
        register_setting('nkd_settings_options_group', 'config_setting_enable_form');
        register_setting('nkd_settings_options_group', 'config_setting_enable_tooltip');
        register_setting('nkd_settings_options_group', 'config_setting_postion');
        register_setting('nkd_settings_options_group', 'config_setting_center');
        register_setting('nkd_settings_options_group', 'config_setting_list');
    }
}
add_action('admin_init', 'nkd_register_setting');


// add menu admin wp
function nkd_create_menu()
{
    add_menu_page(
        'Button contact',
        'Button contact',
        'administrator',
        'nkd-contact',
        'nkd_contact_page',
        plugins_url('/image/icon.png', __FILE__),
        5
    );
    add_submenu_page(
        'nkd-contact',
        'Contact Form',
        'Form Contact',
        'administrator',
        'nkd-contact-form',
        'nkd_form_page'
    );
    add_submenu_page(
        'nkd-contact',
        'Setting Contact',
        'Setting Contact',
        'administrator',
        'nkd-contact-setting',
        'nkd_setting_page'
    );
}
add_action('admin_menu', 'nkd_create_menu');

//callback for create_menu
function nkd_contact_page()
{
    require_once Plugin_Path . "inc/contact.php";
}
function nkd_form_page()
{
    require_once Plugin_Path . "inc/form.php";
}
function nkd_setting_page()
{
    require_once Plugin_Path . "inc/setting.php";
}
function loaded_action()
{
    add_action('wp_footer', 'register_style_show');
    add_action('admin_enqueue_scripts', 'encript_administrator');
}
add_action('plugins_loaded', 'loaded_action');

function register_style_show()
{
    if (get_option('config_setting_enable') === 'on') {
        wp_enqueue_style('nkd-frontend', Plugin_URI . 'assets/css/frontend.css', array(), null);
        wp_enqueue_script('nkd-frontend',  Plugin_URI . 'assets/js/frontend.js', array(), null, false);
        require_once Plugin_Path . 'short/render.php';
    }
    if (get_option('config_setting_enable') === 'on' && get_option('config_setting_enable_form') === 'on') {
        require_once Plugin_Path . 'short/form.php';
    }
}

function encript_administrator()
{
    if (isset($_GET['page']) && $_GET['page'] == 'nkd-contact-setting') {
        wp_enqueue_media();
        wp_enqueue_style('nkd-contact-select2', Plugin_URI . 'assets/css/select2.min.css', array(), null);
        wp_enqueue_script('nkd-contact-select2',  Plugin_URI . 'assets/js/select2.full.min.js', array(), null, false);
    }
    if (isset($_GET['page']) && ($_GET['page'] == 'nkd-contact-setting' || $_GET['page'] == 'nkd-contact' || $_GET['page'] == 'nkd-contact-form')) {
        wp_enqueue_script('nkd-contact-main',  Plugin_URI . 'assets/js/main.js', array(), null, false);
        wp_enqueue_style('nkd-contact', Plugin_URI . 'assets/css/main.css', array(), null);
        wp_localize_script('ajax_custom_script', 'ajaxurl', array('ajaxurl' => admin_url('admin-ajax.php')));
    }
}
