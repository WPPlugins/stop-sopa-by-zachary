<?php
/**
 * @package Stop SOPA by Zachary
 * @version 1.0
 */
/*
Plugin Name: Stop SOPA by Zachary
Plugin URI: http://wordpress.org/extend/plugins/stop-sopa-by-zachary/
Description: This plugin help you to set the all page templates to sustain the couse 'Stop SOPA'.
Author: Marius Olar, Zachary Johnson
Version: 1.0
Author URI: http://www.olarmarius.tk
*/

//---------------------------------------------------------
function set_template() {
   return dirname( __FILE__ ) . '/sopa-page.php';
}

add_filter( "single_template", "set_template" );
add_filter( "404_template", "set_template" );
add_filter( "archive_template", "set_template" );
add_filter( "attachment_template", "set_template" );
add_filter( "author_template", "set_template" );
add_filter( "category_template", "set_template" );
add_filter( "comments_popup_template", "set_template" );
add_filter( "comments_template", "set_template" );
add_filter( "date_template", "set_template" );
add_filter( "home_template", "set_template" );
add_filter( "page_template", "set_template" );
add_filter( "paged_template", "set_template" );
add_filter( "search_template", "set_template" );

?>
