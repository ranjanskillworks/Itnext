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
<div id="inner_banner" class="section inner_banner_section" style="background-image: url('<?php the_field('products_banner_image', 'option'); ?>')">
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

<!-- Product Section -->
<div class="section padding_layout_1">
	<div class="container">
		<?php 
		$args = array( 'post_type' => 'products', 'posts_per_page' => 10 );
		$the_query = new WP_Query( $args ); 
		?>
		<div class="row">
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
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
			<div class="row">
				<div class="center pagination">
					<?php echo paginate_links(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Section -->



	<?php 

	get_footer(); ?>