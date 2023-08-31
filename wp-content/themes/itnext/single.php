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
<div class="section padding_layout_1 blog_grid">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
				<div class="full">
					<?php
					if ( have_posts() ) : 
						while ( have_posts() ) : the_post(); ?>
							<div class="blog_section">
								<div class="blog_feature_img"> <img class="img-responsive" src="<?php echo the_field('blog_post_image',$post->ID);?>" alt="#"> </div>
								<div class="blog_feature_cantant">
									<p class="blog_head"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
									<div class="post_info">
										<ul>
											<!-- <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li> -->
											<li><i class="fa fa-user" aria-hidden="true"></i> <?php $category_detail=get_the_category($post->ID);
											echo '<a href="'.get_term_link($category_detail[0]->slug, $category_detail[0]->taxonomy).'">'.$category_detail[0]->name.'</a>';
											?></li>
											<li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
											<!-- <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li> -->
											<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('d/m/Y');?></li>
										</ul>
									</div>
									<p><?php echo (get_the_content());?> </p>
									<div class="bottom_info margin_bottom_30_all">
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
									<div class="comment_section">
										<div class="pull-left text_align_left">
											<div class="full">
												<div class="preview_commt"> <a class="comment_cantrol preview_commat" href="<?php echo get_permalink( get_adjacent_post( false, '', true ) ); ?>"> <span><i class="fa fa-angle-left"></i> Previous</span> </a> </div>
											</div>
										</div>
										<div class="pull-right text_align_right">
											<div class="full">
												<div class="next_commt"> <a class="comment_cantrol preview_commat" href="<?php echo get_permalink( get_adjacent_post( false, '', false ) ); ?>"> <span>Next <i class="fa fa-angle-right"></i></span> </a> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php	endwhile; 	?>

						<?php else: ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p> 
						<?php endif; ?>
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
	<div class="side_bar">
		<?php dynamic_sidebar('sidebar'); ?>
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
