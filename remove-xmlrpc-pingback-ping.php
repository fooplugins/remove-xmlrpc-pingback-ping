<?php
/**
 * Remove XMLRPC Pingback Ping
 *
 * Prevent WordPress From Participating In Pingback Denial of Service Attacks
 *
 * @package   Remove_XMLRPC_Pingback_Ping
 * @author    Brad Vincent <bradvin@gmail.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins/remove-xmlrpc-pingback-ping
 * @copyright 2014 Brad Vincent
 *
 * @wordpress-plugin
 * Plugin Name:       Remove XMLRPC Pingback Ping
 * Plugin URI:        http://wordpress.org/plugins/remove-xmlrpc-pingback-ping
 * Description:       Prevent WordPress From Participating In Pingback Denial of Service Attacks
 * Version:           1.0.0
 * Author:            Brad Vincent
 * Author URI:        http://fooplugins.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/fooplugins/remove-xmlrpc-pingback-ping
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