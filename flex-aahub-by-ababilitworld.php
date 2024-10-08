<?php

	/**
	 * Flex Aahub By Ababil IT World
	 *
	 * @package ababilitworld/flex-aahub-by-ababilitworld
	 *
	 * @wordpress-plugin
	 * Plugin Name:       Flex Aahub By Ababil IT World
	 * Plugin URI:        https://ababilitworld.com/wp-plugin/flex-aahub-by-ababilitworld
	 * Description:       The Ababilitworld Plugins's Aahub Funtionalities, Exclusively by Ababil IT World.
	 * Version:           1.0.0
	 * Requires at least: 5.2
	 * Requires PHP:      7.4
	 * WC requires at least: 3.0.9
	 * WC tested up to:   6.5
	 * Author:            Ababil IT World
	 * Author URI:        https://ababilitworld.com/
	 * Author Email:      ababilitworld@gmail.com
	 * License:           GPL v3 or later
	 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
	 * Text Domain:       flex-aahub-by-ababilitworld
	 * Domain Path:       /language
	 *
	 * Contributors:
	 *  - Ababil IT World (ababilitworld@gmail.com, https://ababilitworld.com/)
	 *  - Md Shafiul Alam (cse.shafiul@gmail.com, https://ababilitworld.com/)
	 */

    namespace Ababilitworld\FlexAahubByAbabilitworld;

	(defined('ABSPATH') && defined('WPINC')) || die();

	require_once __DIR__ . '/bootstrap.php';
	
	use Ababilitworld\{
		FlexAahubByAbabilitworld\Package\Package
	};
	
	$package = Package::instance();
		
	register_activation_hook(__FILE__, [$package, 'activate']);
	register_deactivation_hook(__FILE__, [$package, 'deactivate']);