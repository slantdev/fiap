<?php

/**
 * Template Name: Register
 * Template Post Type: page
 *
 */
get_header();

get_template_part('template-parts/layouts/page-header', '', array('breadcrumbs' => true));

/* Start the Loop */
while (have_posts()) :
  the_post();
  echo '<div class="pt-12 lg:pt-20 xl:pt-20 pb-12 lg:pb-20 xl:pb-20 relative container mx-auto">';
  echo '<h1 class="text-3xl lg:text-[34px] leading-tight font-semibold mb-6 lg:mb-12">' . get_the_title() . '</h1>';
  echo '<div class="prose xl:prose-lg  mb-6 xl:mb-8">';
  the_content();
  echo '</div>';
  echo '</div>';
endwhile; // End of the loop.

get_template_part('template-parts/page', 'builder');

get_footer();
