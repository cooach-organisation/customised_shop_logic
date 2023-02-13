<?php

/**
 * Plugin Name: Cooach - subscription summary for shop page
 * Description: showing currently active abscriptions plus aubscriptions in shopping cart with price summary
 * Version: 1.0
 * Author: Alexander Städtler
 * License: GPL2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'Subscription_summary_display' ) ) {
    class Subscription_summary_display {
        public function __construct() {
            define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
        }

        public function init() {
          require_once PLUGIN_PATH . 'shortcodes.php';
        }
    }
}

$Enhanced_myaccount_page = new Subscription_summary_display();
$Enhanced_myaccount_page->init();