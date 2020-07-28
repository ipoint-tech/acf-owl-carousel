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
  wp_register_style('oc_styles', plugins_url('/lib/owlcarousel/owl.carousel.min.css', __FILE__));

  wp_enqueue_style('oc_styles');
}

add_action( 'wp_enqueue_scripts', 'acfoc_add_styles' );

function acfoc_add_scripts() {

}

// create shortcode for displaying Carousel

function acfoc_custom_slider() {
  $html = "<div class='owl-carousel'><p>hello</p></div>";

  return $html;

}

add_shortcode('custom-slider', 'acfoc_custom_slider');


/* testing */

?>
