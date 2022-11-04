<?php

/**
 * Template Name: Account
 * Template Post Type: page
 *
 */
get_header();

/* Start the Loop */
while (have_posts()) :
  the_post();
  the_content();
endwhile; // End of the loop.

get_footer();
