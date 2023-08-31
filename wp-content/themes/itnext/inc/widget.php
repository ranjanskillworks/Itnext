<?php
/**
 * Implement sidebars for itnext
 *
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

function itnext_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Header Top', 'itnext' ),
        'id' => 'header-1',
        'description' => __( 'Header Info', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Bottom', 'itnext' ),
        'id' => 'footer-1',
        'description' => __( 'Footer About', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Bottom', 'itnext' ),
        'id' => 'footer-2',
        'description' => __( 'Footer Links', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Bottom', 'itnext' ),
        'id' => 'footer-3',
        'description' => __( 'Footer Services', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Bottom', 'itnext' ),
        'id' => 'footer-4',
        'description' => __( 'Footer Contact', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Bottom', 'itnext' ),
        'id' => 'footer-5',
        'description' => __( 'Footer Map', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Header Search', 'itnext' ),
        'id' => 'header-search',
        'description' => __( 'Header Search', 'itnext' ),
        'before_widget' => '<div id="%1$s" class="%2$s thumb_block"> ',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    
}
add_action( 'widgets_init', 'itnext_widgets_init' );
