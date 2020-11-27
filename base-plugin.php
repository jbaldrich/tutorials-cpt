<?php
/**
 * Base Plugin.
 *
 * @package   JacoBaldrich\Tutorials
 * @author    Jaco Baldrich <hello@jacobaldrich.com>
 * @copyright 2019 Jaco Baldrich
 *
 * @wordpress-plugin
 * Plugin Name:  Tutorials Custom Post Type
 * Description:  A Custom Post Type for Tutorials.
 * Version:      0.1.0
 * Requires PHP: 7.3
 * Author:       Jaco Baldrich <hello@jacobaldrich.com>
 * Text Domain:  jacobaldrich-tutorials-cpt
 * Domain Path:  /languages
 */

namespace JacoBaldrich\Tutorials;

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

$composer_autoloader = __DIR__ . '/vendor/autoload.php';

if ( is_readable ( $composer_autoloader ) ) {
	require $composer_autoloader;
	$plugin = PluginFactory::create();
	$plugin->register();
}
