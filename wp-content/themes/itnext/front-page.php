<?php
/**
 * Template Name: Front Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	//get_template_part( 'template-parts/content/content-page' );
	?>

	<?php


	//Start Home page banner
	if( have_rows('home_banner_slider') ): ?>
		<div id="slider" class="section main_slider">
			<div class="container-fuild">
				<div class="row">
					<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
						<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
						<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
							<ul>
								<?php while( have_rows('home_banner_slider') ): the_row(); ?>
									<li>
										<!-- MAIN IMAGE -->
										<img src="<?php the_sub_field('home_banner_image'); ?>"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
										<!-- LAYERS -->
										<!-- LAYER NR. BG -->
										<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
										id="slide-270-layer-1012"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
										data-transform_out="s:300;s:300;"
										data-start="750"
										data-basealign="slide"
										data-responsive_offset="on"
										data-responsive="off"
										style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
										<!-- LAYER NR. 1 -->
										<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
										id="slide-18-layer-912"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
										data-width="500"
										data-height="140"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:0px;"
										data-mask_out="x:inherit;y:inherit;"
										data-start="2000"
										data-responsive_offset="on"
										style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
										<!-- LAYER NR. 2 -->
										<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
										id="slide-18-layer-112"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
										data-fontsize="['70','70','70','35']"
										data-lineheight="['70','70','70','50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										data-start="1000"
										data-splitin="chars"
										data-splitout="none"
										data-responsive_offset="on"
										data-elementdelay="0.05"
										style="z-index: 6; white-space: nowrap;"><?php the_sub_field('home_banner_heading'); ?></div>
										<!-- LAYER NR. 3 -->
										<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
										id="slide-18-layer-412"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										data-start="1500"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 7; white-space: nowrap;"><?php the_sub_field('home_banner_text'); ?>
									</div>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<!-- Feature section -->
<div class="section padding_layout_1 home_feature_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="main_heading text_align_center" data-aos="fade-up">
						<?php the_field('feature_header'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if( have_rows('feature_item') ): ?>
				<?php while( have_rows('feature_item') ): the_row(); ?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="full text_align_center margin_bottom_30">
							<div class="center">
								<div class="icon"> <img src="<?php the_sub_field('feature_image'); ?>" alt="#" /> </div>
							</div>
							<?php the_sub_field('feature_text'); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Feature section -->

<!-- Accordion section -->
  <div class="section padding_layout_1 accordian_section">
    <div class="container">
      <div class="row">
        <div class="col-md-8" data-aos="slide-right">
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
        <div class="col-md-4" data-aos="slide-left">>
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
background-size: cover; background-image: url('<?php the_field('service_section_bg_image'); ?>');">
<div class="container">
	<div class="row">
		<div class="col-md-12" data-aos="fade-up">
			<div class="full">
				<div class="main_heading text_align_left">
					<?php the_field('service_header'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<?php if( have_rows('service_item') ): ?>
					<?php while( have_rows('service_item') ): the_row(); ?>
						<div class="col-md-4" data-aos="zoom-in">
							<div class="full">
								<div class="service_blog_inner">
									<div class="icon text_align_left">
										<img src="<?php the_sub_field('service_icon'); ?>" alt="#" />
									</div>
									<?php the_sub_field('service_text'); ?>
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

<!-- Product Section -->
<div class="section padding_layout_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<div class="full">
					<div class="main_heading text_align_center">
						<?php the_field('product_header'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
		$args = array( 'post_type' => 'products', 'posts_per_page' => 10 );
		$the_query = new WP_Query( $args ); 
		?>
		<div class="row">
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all" data-aos="zoom-in">
						<div class="product_list">
							<div class="product_img">
								<!-- <img class="img-responsive" src="images/it_service/1.jpg" alt=""> --> 
								<!-- <?php //the_terms( $post->ID , 'image'); ?> -->
								<img src="<?php echo the_field('image',$post->ID);?>">
							</div>
							<div class="product_detail_btm">
								<div class="center">
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								</div>
								<div class="starratin">
									<div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
								</div>
								<div class="product_price">
									<p><span class="old_price">$<?php echo the_field('old_price',$post->ID);?></span> – <span class="new_price">$<?php echo the_field('new_price',$post->ID);?></span></p>
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
	<!-- Product Section -->

	<!-- Feedback Section -->
	<div class="section padding_layout_1 light_silver gross_layout right_gross_layout" style="background: rgb(248,248,248); z-index: -99; background-position: left !important; background-repeat: no-repeat; background-size: cover; background-image: url('<?php the_field('feedback_section_bg_image'); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-aos="fade-up">
					<div class="full">
						<div class="main_heading text_align_right">
							<?php the_field('feedback_header'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row counter">
				<div class="col-md-4"> </div>
				<div class="col-md-8">
					<div class="row">
						<?php if( have_rows('feedback_item') ): ?>
							<?php while( have_rows('feedback_item') ): the_row(); ?>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50" data-aos="zoom-in">
									<div class="text_align_right"><i class="<?php the_sub_field('feedback_icon'); ?>"></i></div>
									<div class="text_align_right">
										<p class="counter-heading text_align_right"><?php the_sub_field('feedback_text'); ?></p>
									</div>
									<h5 class="counter-count"><?php the_sub_field('feedback_counter'); ?></h5>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Feedback Section -->

	<!-- Blog Section -->
	<div class="section padding_layout_1">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-aos="fade-up">
					<div class="full">
						<div class="main_heading text_align_left">
							<?php the_field('blog_header'); ?>
						</div>
					</div>
				</div>
			</div>

			<?php 
			$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args ); 
			?>
			<div class="row">
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right" data-aos="fade-up">
							<div class="full">						
								<div class="blog_section">
									<div class="blog_feature_img"> <img class="img-responsive" src="<?php echo the_field('blog_post_image',$post->ID);?>" alt="#"> </div>
									<div class="blog_feature_cantant">
										<p class="blog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
										<div class="post_info">
											<ul>
												<!-- <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li> -->
												<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
												<!-- <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li> -->
												<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('d/m/Y');?></li>
											</ul>
										</div>
										<p><?php echo wp_trim_words( strip_tags(get_the_content()), 60, '...' );?> </p>
										<div class="bottom_info">
											<div class="pull-left"><a class="btn sqaure_bt" href="<?php the_permalink();?>">Read More<i class="fa fa-angle-right"></i></a></div>
											<div class="pull-right">
												<div class="shr">Share: </div>
												<div class="social_icon">
													<ul>
														<li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
														<li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
														<li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
														<li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
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
		<!-- Blog Section -->



		<?php

	// If comments are open or there is at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
endwhile; // End of the loop.

get_footer();
