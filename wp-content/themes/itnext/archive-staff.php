<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<div class="section padding_layout_1">
	<div class="container">
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
	<!-- end section -->



	<?php 

	get_footer(); ?>