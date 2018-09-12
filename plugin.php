<?php
/*
Plugin Name:	Oxygen RCP Template Support
Plugin URI:		https://wplit.com/
Description:	Allows RCP template customization without using a theme. Made for Oxygen Builder.
Version:		1.0.0
Author:			David Browne
Author URI:		https://wplit.com/
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
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