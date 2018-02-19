<?php
namespace O10n;

/**
 * HTTP/2 Optimization
 *
 * Advanced HTTP/2 optimization toolkit. HTTP/2 Server Push, Service Worker based Cache-Digest and more.
 *
 * @link              https://github.com/o10n-x/
 * @package           o10n
 *
 * @wordpress-plugin
 * Plugin Name:       HTTP/2 Optimization
 * Plugin URI:        https://github.com/o10n-x/
 * Description:       Advanced HTTP/2 optimization toolkit. HTTP/2 Server Push, Service Worker based Cache-Digest and more.
 * Version:           0.0.1
 * Author:            o10n-x
 * Author URI:        https://github.com/o10n-x/
 * Text Domain:       o10n
 * Domain Path:       /languages
 */

if (! defined('WPINC')) {
    die;
}

// abort loading during upgrades
if (defined('WP_INSTALLING') && WP_INSTALLING) {
    return;
}

// settings
$module_version = '0.0.1';
$minimum_core_version = '0.0.4';
$plugin_path = dirname(__FILE__);

// load the optimization module loader
if (!class_exists('\O10n\Module')) {
    require $plugin_path . '/core/controllers/module.php';
}

// load module
new Module(
    'http2',
    'HTTP/2 Optimization',
    $module_version,
    $minimum_core_version,
    array(
        'core' => array(
            'shutdown',
            'tools',
            'http',
            'http2'
        ),
        'admin' => array(
            'AdminHttp2'
        )
    ),
    false,
    array(),
    __FILE__
);