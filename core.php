<?php

/*
Plugin Name: learning from rtl
Plugin URI: https://github.com/HappyBananaWorld/learning-plugin-development
Description: learning
Version: 1.0.0
Author mr banana
Author URI: https://github.com/happybananaworld
*/

if (!defined('ABSPATH'))
    exit;

define("LR_PLUGIN_DIR", plugin_dir_path(__FILE__));
define('LR_PLUGIN_URL', plugin_dir_url(__FILE__));

define('LR_PLUGIN_INC', LR_PLUGIN_DIR . "inc/");
define('LR_PLUGIN_ASSETS', LR_PLUGIN_DIR . "assets/");

// import helper
require_once LR_PLUGIN_DIR . 'vendor/autoload.php';
require_once LR_PLUGIN_INC . "helpers/helper.php";
require_once LR_PLUGIN_INC . "db/connection.php";
require_once LR_PLUGIN_INC . "models/Option.php";

if (is_admin()) {
    include LR_PLUGIN_INC . "admin/menu.php";
}