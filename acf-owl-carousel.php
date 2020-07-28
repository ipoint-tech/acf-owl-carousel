<?php
/**
 * Plugin Name: ACF Owl Carousel
 * Plugin URI: https://github.com/ipoint-tech/acf-owl-carousel
 * Description: Owl Carousel Slider populated with Advanced Custom Fields
 * Version: 1.0
 * Author: Degger
 * Author URI: https://ipoint-tech.com
 */

// create shortcode for displaying Carousel

function acf_custom_slider() {
  $message = "hello";

  return $message;

}

add_shortcode('custom-slider', 'acf_custom_slider');

?>
