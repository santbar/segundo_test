<?php

function wpd_add_google_fonts(){
  wp_enqueue_style('wpb-google-fonts','https://fonts.googleaplis.com/css?family=Joti+One|ranga',false);
}
add_action('wp_enqueue_scripts','wpb_add_google_fonts');