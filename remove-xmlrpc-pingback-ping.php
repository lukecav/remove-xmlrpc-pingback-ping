<?php
/**
 * Remove XMLRPC Pingback Ping
 *
 * Prevent WordPress From Participating In Pingback Denial of Service Attacks
 *
 * @package   Remove_XMLRPC_Pingback_Ping
 * @license   GPL-2.0+
 * @link      https://github.com/lukecav/remove-xmlrpc-pingback-ping/
 * @copyright 2014 Brad Vincent
 *
 * @wordpress-plugin
 * Plugin Name:       Remove XMLRPC Pingback Ping
 * Description:       Prevent WordPress From Participating In Pingback Denial of Service Attacks
 * Version:           1.0.1
 * Author:            Brad Vincent
 * Author URI:        http://fooplugins.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/lukecav/remove-xmlrpc-pingback-ping/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );

function remove_xmlrpc_pingback_ping( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
}
