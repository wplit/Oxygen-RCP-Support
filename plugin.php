<?php
/**
 * Plugin Name: Oxygen RCP Template Support
 * Plugin URI:  https://github.com/wplit/oxygen-rcp-support/
 * GitHub URI:  wplit/oxygen-rcp-support/
 * Description: Allows RCP template customisation without using a theme. Made for Oxygen Builder.
 * Version:     1.0.0
 * Author:      David Browne
 * Author URI:  https://wplit.com/
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    OxygenRcpSupport
 * @since      1.0.0
 * @copyright  Copyright (c) 2018, David Browne
 * @license    GPL-2.0+
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}


add_filter( 'rcp_template_stack', 'lit_oxygen_rcp_template_location' );
/**
 * Adds plugin subfolder as new location for RCP to look for templates.
 *
 * @since 1.0.0
 *
 * @param array $template_stack Original template locations
 * @return new template location as /rcp/
 */
function lit_oxygen_rcp_template_location( $template_stack ) {
	
    $template_stack[] = plugin_dir_path( __FILE__ ) . 'rcp/';
    
	return $template_stack;
}
