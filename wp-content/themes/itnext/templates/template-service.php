<?php
   /**
    * Template Name: Service
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

  <!-- Service Section -->
<div class="section padding_layout_1 gross_layout service_page" style="background: rgb(248,248,248); z-index: -99; background-position: right; background-repeat: no-repeat;
background-size: cover; background-image: url('<?php the_field('service_page_bg_image'); ?>');">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="full">
        <div class="main_heading text_align_left">
          <?php the_field('service_page_section_header'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <?php if( have_rows('service_page_item') ): ?>
          <?php while( have_rows('service_page_item') ): the_row(); ?>
            <div class="col-md-4">
              <div class="full">
                <div class="service_blog_inner">
                  <div class="icon text_align_left">
                    <img src="<?php the_sub_field('service_page_icon'); ?>" alt="#" />
                  </div>
                  <?php the_sub_field('service_page_text'); ?>
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

<!-- Service Type Section -->
<div class="section padding_layout_1 light_silver service_list">
  <div class="container">
    <?php 
    $args = array( 'post_type' => 'services', 'posts_per_page' => 3 );
    $the_query = new WP_Query( $args ); 
    ?>
    <div class="row">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> 
            <img class="img-responsive" src="<?php echo the_field('service_mage',$post->ID);?>" alt="#" /> 
          </div>
          <div class="service_cont">
            <h3 class="service_head"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words( strip_tags(get_the_content()), 20, '...' );?></p>
            <div class="bt_cont"> 
              <a class="btn sqaure_bt" href="<?php the_permalink();?>">View Service</a> 
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
<!-- Service Type Section -->


<!-- Staff Section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <?php the_field('service_staff_header'); ?>
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