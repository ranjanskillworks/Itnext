<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

?>
<!doctype html>
<html lang="en">
<head>
	<!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- site icons -->
  <link rel="icon" href="wp-content/themes/itnext/assets/images/fevicon/favicon.png" type="image/gif" />


 <!-- AOS -->
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>Itnext- Home</title>
</head>

<body id="default_theme" class="it_service" <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <!-- header -->
  <header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php dynamic_sidebar( 'header-1' ); ?>
          </div>
          <div class="col-md-4 right_section_header_top">
            <div class="float-left">
              <div class="social_icon">
                <?php if( have_rows('header_social_networks', 'option') ): ?>
                  <ul class="list-inline">
                    <?php while( have_rows('header_social_networks', 'option') ): the_row(); ?>
                      <li>
                        <a href="<?php the_sub_field('header_social_link'); ?>" target="_blank">
                          <img src="<?php the_sub_field('header_social_icon'); ?>" alt="">
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </div>
            </div>
            <div class="float-right">
              <div class="make_appo"> <a class="btn white_btn" href="make_appointment.html">Make Appointment</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <!-- logo start -->
            <div class="logo"> <a href="<?php echo site_url(); ?>"><img src="<?php the_field('header_logo', 'option'); ?>" alt="logo" /></a> </div>
            <!-- logo end -->
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end">
            <!-- menu start -->
            <div class="menu_side">
              <?php wp_nav_menu(array(

                'theme_location' => 'primary',
                'Container' => '',
                'container_class' => 'menu_side',
                'container_id' => 'navbar_menu',
                'depth' => '3',
                'menu_class' => 'first-ul',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
              ));
              ?>

              <div class="search_icon">
                <ul>
                  <li><a href="<?php the_field('menu_search_link', 'option'); ?>" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i><?php the_field('menu_search_image', 'option'); ?></a></li>
                </ul>
              </div>
            </div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
    <!-- header bottom end -->
  </header>
  <!-- end header -->

  <!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search d-flex justify-content-center align-items-center">
              <?php dynamic_sidebar( 'header-search' ); ?>
              <!-- <?php //echo do_shortcode('[contact-form-7 id="123" title="Header Search Form"]');?> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->



  <div id="content" class="site-content">
    <div id="primary" class="content-area">
     <main id="main" class="site-main" role="main">
