<?php
/**
 * Implement an enqueue script for suncoastwindows
 *
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

function itnext_cs_js() {
    
    
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/project/bootstrap.min.css', array(), time() );

     wp_enqueue_style('owlmin', get_template_directory_uri() . '/assets/css/project/owl.carousel.min.css', array(), time() );
      wp_enqueue_style('owlthememin', get_template_directory_uri() . '/assets/css/project/owl.theme.default.min.css', array(), time() );

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/project/style.css', array(), time() );
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/project/responsive.css', array(), time() );
    wp_enqueue_style('colors1', get_template_directory_uri() . '/assets/css/project/colors1.css', array(), time() );
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/project/custom.css', array(), time() );
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/project/animate.css', array(), time() );
    wp_enqueue_style('hizoom', get_template_directory_uri() . '/assets/css/project/hizoom.css', array(), time() );
    
    //revolution slider css
    wp_enqueue_style('settings', get_template_directory_uri() . '/assets/revolution/css/settings.css', array(), time() );
    wp_enqueue_style('layers', get_template_directory_uri() . '/assets/revolution/css/layers.css', array(), time() );
    wp_enqueue_style('navigation', get_template_directory_uri() . '/assets/revolution/css/navigation.css', array(), time() );

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), time() );
    //wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), time() );
    //wp_enqueue_style('fontawesomemin', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), time() );
     //wp_enqueue_style( 'fontawesome' , 'https://kit.fontawesome.com/b973327da2.js', array(), '' );
    


    
    
    wp_enqueue_script('jquerymin', get_template_directory_uri() . '/assets/js/project/jquery.min.js', array(), time() );
    wp_enqueue_script('bootstrapmin', get_template_directory_uri() . '/assets/js/project/bootstrap.min.js', array(), time() );
     wp_enqueue_script('owljs', get_template_directory_uri() . '/assets/js/project/owl.carousel.min.js', array(), time() );
     wp_enqueue_script('hizoom', get_template_directory_uri() . '/assets/js/project/hizoom.js', array(), time() );
    wp_enqueue_script('menumaker', get_template_directory_uri() . '/assets/js/project/menumaker.js', array(), time() );
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/project/wow.js', array(), time() );
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/project/custom.js', array(), time() );


    wp_enqueue_script('themepunchtools', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.tools.min.js', array(), time() );
    wp_enqueue_script('themepunchrevolution', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.revolution.min.js', array(), time() );
    wp_enqueue_script('extensionkenburn', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.kenburn.min.js', array(), time() );
    wp_enqueue_script('extensionlayeranimation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), time() );
    wp_enqueue_script('extensionnavigation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.navigation.min.js', array(), time() );
    wp_enqueue_script('extensionparallax', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.parallax.min.js', array(), time() );
    wp_enqueue_script('extensionslideanims', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), time() );

}

add_action( 'get_footer', 'itnext_cs_js' );

?>