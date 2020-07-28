<?php
/**
 * Plugin Name: ACF Owl Carousel
 * Plugin URI: https://github.com/ipoint-tech/acf-owl-carousel
 * Description: Owl Carousel Slider populated with Advanced Custom Fields
 * Version: 1.0
 * Author: Degger
 * Author URI: https://ipoint-tech.com
 */

// first things first, let's add the scripts and styles we need.
function acfoc_add_styles() {
  wp_register_style('oc_styles', plugins_url('/lib/owlcarousel/assets/owl.carousel.min.css', __FILE__));
  wp_register_style('oc_styles_default', plugins_url('/lib/owlcarousel/assets/owl.theme.default.min.css', __FILE__));
  wp_register_style('custom_styles', plugins_url('/css/custom.css', __FILE__));

  wp_enqueue_style('oc_styles');
  wp_enqueue_style('oc_styles_default');
  wp_enqueue_style('custom_styles');
}

add_action( 'wp_enqueue_scripts', 'acfoc_add_styles' );



function acfoc_add_scripts() {
  wp_register_script('oc_scripts', plugins_url('/lib/owlcarousel/owl.carousel.min.js', __FILE__), array('jquery'),'1.1', true);
  wp_register_script('run_script', plugins_url('/js/run.js', __FILE__), array('jquery'),'1.1', true);

  wp_enqueue_script('oc_scripts');
  wp_enqueue_script('run_script');

}

add_action( 'wp_enqueue_scripts', 'acfoc_add_scripts' );

// create shortcode for displaying Carousel

function acfoc_custom_slider() {

  // Check rows exists.
  if( have_rows('brands') ):

      // Loop through rows.
      while( have_rows('brands') ) : the_row();

          // Load sub field value.

          $logo = get_sub_field('brand_logo');

          //$html = "<div class='testing'>";
          $html = wp_get_attachment_image( $logo, 'full' );
          //$html .= "</div>";
      // End loop.
      endwhile;

  // No value.
  else :
      $html = "<div class='owl-carousel owl-theme'><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div><div class='slider item'>Your Content</div></div>";
  endif;

  //return $html;
  return $html;

}

add_shortcode('custom-slider', 'acfoc_custom_slider');


/* testing */

?>
