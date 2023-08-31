<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

get_header();

global $post;

$post_id = $post->ID;
if (is_home()) {
	$post_id = get_option( 'page_for_posts' );
}

?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>')">
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

<!-- section -->
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12 service_blog margin_bottom_50">
            <div class="full">
              <div class="service_img"> <img class="img-responsive" src="<?php echo the_field('service_mage',$post->ID);?>" alt="#" /> </div>
              <div class="service_cont">
                <h3 class="service_head"><?php the_title(); ?></h3>
                <p><?php echo get_the_content();?></p>
              </div>
            </div>
          </div>
          <?php 
          $args = array( 'post_type' => 'services', 'posts_per_page' => 2 );
          $the_query = new WP_Query( $args ); 
          ?>
          <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-md-6 service_blog margin_bottom_50">
                <div class="full">
                  <div class="service_img"> <img class="img-responsive" src="<?php echo the_field('service_mage',$post->ID);?>" alt="#" /> </div>
                  <div class="service_cont">
                    <h3 class="service_head"><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words( strip_tags(get_the_content()), 20, '...' );?></p>
                    <div class="bt_cont"> <a class="btn sqaure_bt" href="<?php the_permalink();?>">View Service</a> </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
            <?php else:  ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div>
          <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
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
            <?php if( have_rows('service_feature', 'option') ): ?>
              <?php while( have_rows('service_feature', 'option') ): the_row(); ?>
                <div class="col-md-4">
                  <div class="full">
                    <div class="service_blog_inner">
                      <div class="icon text_align_left"><img src="<?php the_sub_field('service_feature_icon'); ?>" alt="#"></div>
                      <h4 class="service-heading"><?php the_sub_field('service_feature_title'); ?></h4>
                      <p><?php the_sub_field('service_feature_text'); ?></p>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-md-12">
              <div class="full" style="margin-top: 15px;">
                <?php the_field('file_recovery_text', 'option'); ?>
                <p><a class="btn main_bt" href="<?php the_field('file_recovery_button_link', 'option'); ?>"><?php the_field('file_recovery_button_text', 'option'); ?></a></p>
              </div>
            </div>
          </div>
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
          $args = array( 'post_type' => 'staff', 'posts_per_page' => 3 );
          $the_query = new WP_Query( $args ); 
          ?>
          <div class="row">
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4 col-sm-6">
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
          <div class="col-md-3">
            <div class="side_bar">
              <div class="side_bar_blog">
                <h4>SEARCH</h4>
                <div class="side_bar_search">
                  <div class="input-group stylish-input-group">
                    <input class="form-control" placeholder="Search" type="text">
                    <span class="input-group-addon">
                      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span> </div>
                  </div>
                </div>
                <div class="side_bar_blog">
                  <h4>GET A QUOTE</h4>
                  <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
                  <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
                  <div class="side_bar_blog">
                    <h4>OUR SERVICE</h4>
                    <div class="categary">
                      <ul>
                        <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                        <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                        <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                        <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                        <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="side_bar_blog">
                    <h4>RECENT NEWS</h4>
                    <div class="categary">
                      <ul>
                        <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
                        <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
                        <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
                        <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="side_bar_blog">
                    <h4>TAG</h4>
                    <div class="tags">
                      <ul>
                        <li><a href="#">Bootstrap</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Wordpress</a></li>
                        <li><a href="#">Bootstrap</a></li>
                        <li><a href="#">HTML5</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end section -->





        <?php

        /* Start the Loop */
//while ( have_posts() ) :
	//the_post();



	// Previous/next post navigation.
	//$itnext_next = is_rtl() ? It_Next_get_icon_svg( 'ui', 'arrow_left' ) : It_Next_get_icon_svg( 'ui', 'arrow_right' );
	//$itnext_prev = is_rtl() ? It_Next_get_icon_svg( 'ui', 'arrow_right' ) : It_Next_get_icon_svg( 'ui', 'arrow_left' );

	//$itnext_next_label     = esc_html__( 'Next post', 'itnext' );
	//$itnext_previous_label = esc_html__( 'Previous post', 'itnext' );

	//the_post_navigation(
		//array(
			//'next_text' => '<p class="meta-nav">' . $itnext_next_label . $itnext_next . '</p><p class="post-title">%title</p>',
			//'prev_text' => '<p class="meta-nav">' . $itnext_prev . $itnext_previous_label . '</p><p class="post-title">%title</p>',
		//)
	//);
//endwhile; // End of the loop.

        get_footer();
