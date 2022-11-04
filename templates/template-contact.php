<?php

/**
 * Template Name: Contact
 * Template Post Type: page
 *
 */
get_header();

get_template_part('template-parts/layouts/page-header', '', array('breadcrumbs' => true));
?>

<section class="py-24">
  <div class="container"></div>
</section>

<?php
get_template_part('template-parts/page', 'builder');

get_footer();
