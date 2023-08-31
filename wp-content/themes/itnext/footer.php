<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage It_Next
 * @since It Next 1.0
 */

?>

<!-- Testimonial Section -->
<div class="section padding_layout_1 testmonial_section white_fonts" style="background-image: url('<?php the_field('testimonial_bg_image', 'option'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-md-12" data-aos="slide-right">
        <div class="full">
          <div class="main_heading text_align_left">
            <?php the_field('testimonial_header', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" data-aos="slide-right">
            <!-- The slideshow -->
            <div class="owl-carousel owl-theme" id="testimonial_carousel">
              <?php if( have_rows('testimonial_item', 'option') ): ?>
                <?php while( have_rows('testimonial_item', 'option') ): the_row(); ?>
                  <div class="item">
                    <div class="testimonial-container">
                      <div class="testimonial-content"><?php the_sub_field('testimonial_content'); ?></div>
                      <div class="testimonial-photo"> <img src="<?php the_sub_field('testimonial_image'); ?>" class="img-responsive" alt="#" width="150" height="150"> </div>
                      <div class="testimonial-meta">
                        <h4><?php the_sub_field('testimonial_name'); ?></h4>
                        <span class="testimonial-position"><?php the_sub_field('testimonial_position'); ?></span> </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="full"> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial Section -->

  <!-- Free Quote Section -->
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="contact_us_section" data-aos="fade-up">
              <div class="call_icon"> <img src="<?php the_field('free_quote_icon', 'option'); ?>" alt="#" /> </div>
              <div class="inner_cont">
                <?php the_field('free_quote_content', 'option'); ?>
              </div>
              <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="<?php the_field('free_quote_button_link', 'option'); ?>"><?php the_field('free_quote_button_text', 'option'); ?></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Free Quote Section -->

  <!-- Clients Section -->
  <div class="section padding_layout_1" style="padding: 50px 0;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <ul class="brand_list owl-carousel owl-theme" id="logo_carousel">
              <?php if( have_rows('footer_client_logo', 'option') ): ?>
                <?php while( have_rows('footer_client_logo', 'option') ): the_row(); ?>
                  <li class="item">
                    <img src="<?php the_sub_field('client_logo'); ?>" alt="#" />
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Clients Section -->

  <!-- footer -->
  <footer class="footer_style_2">
    <div class="container-fuild">
      <div class="row">
        <div class="map_section">
          <div id="map">
            <?php dynamic_sidebar( 'footer-5' ); ?>
          </div>
        </div>
        <div class="footer_blog">
          <div class="row">
            <div class="col-md-6" data-aos="zoom-in">
              <?php dynamic_sidebar( 'footer-1' ); ?>
              <?php if( have_rows('footer_social_networks', 'option') ): ?>
                <ul class="social_icons">
                  <?php while( have_rows('footer_social_networks', 'option') ): the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field('footer_social_link'); ?>" target="_blank">
                        <img src="<?php the_sub_field('footer_social_icon'); ?>" alt="">
                      </a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
            <div class="col-md-6 footer-links" data-aos="zoom-in">
              <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <div class="col-md-6 footer-links" data-aos="zoom-in">
              <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
            <div class="col-md-6" data-aos="zoom-in">
              <?php dynamic_sidebar( 'footer-4' ); ?>
            </div>
          </div>
        </div>
        <div class="cprt">
          <p><?php the_field('footer_copyright', 'option'); ?></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->


</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php wp_footer(); ?>

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>

<!-- AOS js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
