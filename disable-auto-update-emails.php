<?php
/**
 * Plugin Name: Disable Auto-Update Emails
 * Plugin URI:  https://example.com/
 * Description: Prevents WordPress from sending notification emails after automatic plugin and theme updates.
 * Version:     1.0.0
 * Author:      Stanis Humez
 * Author URI:  https://www.netvolution.fr/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: disable-auto-update-emails
 */

// Disable email after an automatic plugin update
add_filter( 'auto_plugin_update_send_email', '__return_false' );

// Disable email after an automatic theme update
add_filter( 'auto_theme_update_send_email', '__return_false' );

// (Optional) Disable email after an automatic core update
// add_filter( 'auto_core_update_send_email', '__return_false' );
