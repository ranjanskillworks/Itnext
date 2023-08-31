<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @since wealthy habits 1.0
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */



if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Search Settings',
        'menu_title'    => 'Search',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Products Settings',
        'menu_title'    => 'Products',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Services Settings',
        'menu_title'    => 'Services',
        'parent_slug'    => 'theme-general-settings',
    ));
    
}
