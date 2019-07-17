<?php
/**
 * Plugin Name: WPOnion Vendor Support
 * Plugin URI: https://github.com/wponion/vendor-support
 * Description: This plugin (or extension) acts as a backup and/or replacement for the CDN based files within WPOnion Framework.
 * Version: 1.3
 * Author: varunsridharan
 * Author URI: https://varunsridharan.in
 * Text Domain: wponion-vendor-support
 * Domain Path: /i18n/
 */

add_action( 'wponion_before_addons_load', function () {
	wponion_register_addon( __( 'WPOnion Vendor Support' ), '1.3', __DIR__ . '/class-vendor-support.php' );
} );
