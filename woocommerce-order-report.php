<?php
defined('ABSPATH') or die('sorry cannot access this file');
/**
 * Plugin Name:       Woocommerce Order Report
 * Plugin URI:        https://nirace16.github.io
 * Description:       Create Woocommerce Order Reports
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.0
 * Author:            Niresh Maharjan
 * Author URI:        https://github.com/nirace16
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       woocommerce-order-report
 * Domain Path:       /languages
 */



if (!class_exists('woocommerce_order_report')) {
    class woocommerce_order_report
    {
        // call this function at the call of object creation section
        public function __construct()
        {
            $this->define_constants();
            $this->includes();
            add_action('admin_menu', array($this,'order_page'));
            add_action('admin_enqueue_scripts', array($this, 'order_assets'));

            // Act on plugin activation
            register_activation_hook(__FILE__, array($this,'order_activate_plugin'));
        }

        public function includes()
        {
            include(ORDER_PATH. 'includes/admin/order-functions.php');
        }

        //define required constants so that it will be easy later on
        public function define_constants()
        {
            defined('ORDER_PATH') or define('ORDER_PATH', plugin_dir_path(__FILE__));
            defined('ORDER_URL') or define('ORDER_URL', plugin_dir_url(__FILE__));
            defined('ORDER_VERSION') or define('ORDER_VERSION', '1.0.0');
        }
        //add menu to the wp-admin
        public function order_page()
        {
            add_submenu_page('woocommerce', __('Woocommerce Order Reports', 'woocommerce'), __('Order Reports', 'woocommerce'), 'manage_woocommerce', 'order-reports', array($this, 'view_woocommerce_order_reports'));
        }
        //add settings page to the menu created in wp-admin section
        public function view_woocommerce_order_reports()
        {
            include(ORDER_PATH. 'includes/admin/order-view.php');
        }

        //enqueue all necessary assests
        public function order_assets()
        {
            wp_enqueue_style('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array());
            wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
            wp_enqueue_script('admin-js', ORDER_URL.'includes/assets/js/admin-js.js', array(), ORDER_VERSION);
        }

        // Activate Plugin
        public function order_activate_plugin()
        {
            //code when plugin is activated for the first time
        }
    }
    new woocommerce_order_report();
}
