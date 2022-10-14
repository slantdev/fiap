<?php

function filter_news()
{
  $catID = $_POST['category'];

  if ($catID == 'all') {
    $ajaxposts = new WP_Query([
      'post_type' => 'news',
      'posts_per_page' => -1
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'news',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'news_category',
          'field'    => 'term_id',
          'terms'    => $catID,
        ),
      ),
    ]);
  }

  $response = '';

  if ($ajaxposts->have_posts()) {

    $response .= '<div class="grid grid-cols-3 gap-10">';

    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
      $atts = array(
        'img_src' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'title' => get_the_title(),
        'date' => get_the_date('jS F Y'),
        'excerpt' => $excerpt,
        'link' => get_the_permalink(),
      );
      $response .= card_article($atts);
    endwhile;

    $response .= '</div>';
    $response .= '<div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>';
  } else {
    $response = '<div class="text-center py-4 px-8">No Posts Found</div>';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_news', 'filter_news');
add_action('wp_ajax_nopriv_filter_news', 'filter_news');

function filter_case_study()
{
  $catID = $_POST['category'];

  if ($catID == 'all') {
    $ajaxposts = new WP_Query([
      'post_type' => 'case_study',
      'posts_per_page' => -1
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'case_study',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'case_study_category',
          'field'    => 'term_id',
          'terms'    => $catID,
        ),
      ),
    ]);
  }

  $response = '';

  if ($ajaxposts->have_posts()) {

    $response .= '<div class="grid grid-cols-3 gap-10">';

    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
      $atts = array(
        'img_src' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'title' => get_the_title(),
        'excerpt' => $excerpt,
        'link' => get_the_permalink(),
      );
      $response .= card_hover($atts);
    endwhile;

    $response .= '</div>';
    $response .= '<div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>';
  } else {
    $response = '<div class="text-center py-4 px-8">No Posts Found</div>';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_case_study', 'filter_case_study');
add_action('wp_ajax_nopriv_filter_case_study', 'filter_case_study');

function filter_fiapmembers()
{
  $catID = $_POST['category'];

  if ($catID == 'all') {
    $ajaxposts = new WP_Query([
      'post_type' => 'fiap_members',
      'posts_per_page' => -1
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'fiap_members',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'member_category',
          'field'    => 'term_id',
          'terms'    => $catID,
        ),
      ),
    ]);
  }

  $response = '';

  if ($ajaxposts->have_posts()) {

    $response .= '<div class="grid grid-cols-3 gap-10">';

    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();

      $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
      $atts = array(
        'img_src' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'title' => get_the_title(),
        'excerpt' => $excerpt,
        'link' => get_the_permalink(),
      );
      $response .= card_fiap_members($atts);

    endwhile;

    $response .= '</div>';
    $response .= '<div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>';
  } else {
    $response = '<div class="text-center py-4 px-8">No Posts Found</div>';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_fiapmembers', 'filter_fiapmembers');
add_action('wp_ajax_nopriv_filter_fiapmembers', 'filter_fiapmembers');
