<?php
   /**
    * Template Name: About
    * Template Post Type: post, page
    *
    * @package WordPress
    * @since 1.0
    */
   ?>

   <?php

   get_header();

   ?>

   <!-- inner page banner -->
   <div id="inner_banner" class="section inner_banner_section" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title"><?php wp_title(''); ?></h1>
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                  <?php if(function_exists('bcn_display'))
                  {
                    bcn_display();
                  }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->

  <!-- About Top section -->
  <div class="section padding_layout_1 about_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_center">
              <?php the_field('about_company_header'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row about_blog">
        <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
          <div class="full text_align_left">
            <?php the_field('about_company_text'); ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
          <div class="full text_align_center"> <img class="img-responsive" src="<?php the_field('about_company_image'); ?>" alt="#" /> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Top section -->

  <!-- Accordion section -->
  <div class="section padding_layout_1 accordian_section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full margin_bottom_30">
            <div class="accordion border_circle">
              <div class="bs-example">
                <div class="panel-group" id="accordion">
                  <?php if( have_rows('accordian_item', 'option') ): ?>
                    <?php while( have_rows('accordian_item', 'option') ): the_row(); ?>
                      <div class="panel panel-default accordion_container">
                        <div class="panel-heading accordion_head">
                          <p class="panel-title"> <a class="accordion-toggle"><i class="<?php the_sub_field('accordian_icon'); ?>"></i> <?php the_sub_field('accordian_title'); ?></a> </p><span class="plusminus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div class="panel-collapse accordion_body">
                          <div class="panel-body">
                            <p><?php the_sub_field('accordian_content'); ?></p>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="full" style="margin-top: 35px;">
            <?php the_field('file_recovery_text', 'option'); ?>
            <p><a class="btn main_bt" href="<?php the_field('file_recovery_button_link', 'option'); ?>"><?php the_field('file_recovery_button_text', 'option'); ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Accordion section -->

  <!-- Service Section -->
  <div class="section padding_layout_1 light_silver gross_layout" style="background: rgb(248,248,248); z-index: -99; background-position: right; background-repeat: no-repeat;
  background-size: cover; background-image: url('<?php the_field('about_service_bg_image'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <?php the_field('about_service_header'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <?php if( have_rows('service_item') ): ?>
            <?php while( have_rows('service_item') ): the_row(); ?>
              <div class="col-md-6">
                <div class="full">
                  <div class="service_blog_inner2">
                    <div class="icon text_align_left"><i class="<?php the_sub_field('service_icon'); ?>"></i></div>
                    <h4 class="service-heading"><?php the_sub_field('service_title'); ?></h4>
                    <p><?php the_sub_field('service_text'); ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service Section -->

<!-- Staff Section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <?php the_field('staff_header', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $args = array( 'post_type' => 'staff', 'posts_per_page' => 10 );
    $the_query = new WP_Query( $args ); 
    ?>
    <div class="row">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-md-3 col-sm-6">
            <div class="full team_blog_colum">
              <div class="it_team_img"> <img class="img-responsive" src="<?php echo the_field('staff_image',$post->ID);?>" alt="#"> </div>
              <div class="team_feature_head">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              </div>
              <div class="team_feature_social">
                <div class="social_icon">
                  <ul class="list-inline">
                    <?php if( have_rows('staff_social_network') ): ?>
                      <?php while( have_rows('staff_social_network') ): the_row(); ?>
                        <li>
                          <a class="<?php the_sub_field('staff_social_network_icon'); ?>" href="<?php the_sub_field('staff_social_network_link'); ?>" target="_blank"></a>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- Staff Section -->

  <?php

  get_footer();

  ?>