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
<div id="inner_banner" class="section inner_banner_section" style="background-image: url('<?php the_field('services_page_banner_image', 'option'); ?>')">
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

<!-- Service Type Section -->
<div class="section padding_layout_1 service_list">
	<div class="container">
		<?php $currentPage = get_query_var('paged');
		$args = array( 'post_type' => 'services', 'posts_per_page' => 3, 'paged' => $currentPage );
		$the_query = new WP_Query( $args ); 
		?>
		<div class="row">
			<?php
			$posts = new WP_Query(array(
			    'post_type' => 'services', // Default or custom post type
			    'posts_per_page' => 3, // Max number of posts per page
			    'paged' => $currentPage
			));
			 if ( $the_query->have_posts() ) : ?>
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
					<?php endif; 
					echo "<div class='page-nav-container center pagination'>" . paginate_links(array(
					    'total' => $posts->max_num_pages,
					    'prev_text' => __('<'),
					    'next_text' => __('>')
					)) . "</div>";
					?>
				</div>
			</div>
		</div>
		<!-- Service Type Section -->



		<?php 

		get_footer(); ?>