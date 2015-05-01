<?php
/**
 * Customizr-child functions
 * 
 * @package   	Customizr-child
 * @subpackage 	functions
 * @since     	3.0
 * @author    	Laurent KHAUV <laurent@khauv.com>
 * @copyright 	Copyright (c) 2013, Laurent KHAUV
 * @link      	http://themesandco.com/customizr
 * @license   	http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * add a search box
 * 
 * @return string
 */
function add_search_box($items, $args) {
	ob_start();
	get_search_form();
	$searchform = ob_get_contents();
	ob_end_clean();

	$items .= '<li>' .$searchform. '</li>' ;
	return $items;
}

add_filter('wp_nav_menu_items','add_search_box', 10, 2);

add_action ( 'wp_enqueue_scripts' , 'add_backstretch');
function add_backstretch() {
	wp_enqueue_scripts( $handle = 'add_backstretch', $src = './js/jquery.backstretch.min.js', $deps = array(), $ver = null, $media = null );
}
