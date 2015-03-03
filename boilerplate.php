<?php

/**
 * Plugin Name: Plugin Boilerplate
 * Description: The description of the plugin.
 * Author: Fredrik Forsmo
 * Author URI: https://forsmo.me/
 * Plugin URI: https://github.com/frozzare/wp-plugin-boilerplate
 * Text Domain: boilerplate
 * Version: 1.0.0
 */

// Make sure the plugin does not expose any info if called directly
defined('ABSPATH') || exit;

// Framework requires PHP 5.4 or newer
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    exit('The Plugin Boilerplate for WordPress requires PHP version 5.4 or higher.');
}

// Load Composer autoloader.
require 'vendor/autoload.php';

/**
 * Get the Plugin Boilerplate instance.
 *
 * @return \Boilerplate\PluginLoader
 */

function boilerplate()
{
    return \Boilerplate\PluginLoader::instance();
}

// Initialize on plugins loaded
add_action('plugins_loaded', 'boilerplate', 0, 0);
