<?php

function filter_news()
{
  $catID = $_POST['category'];
  if (isset($_POST['postsperpage'])) {
    $postsPerPage = $_POST['postsperpage'];
  } else {
    $postsPerPage = -1;
  }

  if ($catID == 'all') {
    $ajaxposts = new WP_Query([
      'post_type' => 'news',
      'posts_per_page' => $postsPerPage,
      'orderby' => 'menu_order'
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'news',
      'posts_per_page' => $postsPerPage,
      'orderby' => 'menu_order',
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

    $response .= '<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8 2xl:gap-10">';

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
  if (isset($_POST['postsperpage'])) {
    $postsPerPage = $_POST['postsperpage'];
  } else {
    $postsPerPage = -1;
  }

  if ($catID == 'all') {
    $ajaxposts = new WP_Query([
      'post_type' => 'case_study',
      'posts_per_page' => $postsPerPage,
      'orderby' => 'menu_order'
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'case_study',
      'posts_per_page' => $postsPerPage,
      'orderby' => 'menu_order',
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

    $response .= '<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8 2xl:gap-10">';

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
      'posts_per_page' => -1,
      'orderby' => 'menu_order'
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'fiap_members',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
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

    $response .= '<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8 2xl:gap-10">';

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

function filter_whitepapers()
{
  $search_query = $_POST['query'];
  $search_filter = $_POST['filter'];
  if (isset($_POST['postsperpage'])) {
    $postsPerPage = $_POST['postsperpage'];
  } else {
    $postsPerPage = -1;
  }

  if ($search_query) {
    if ($search_filter == 'all') {
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'term_order',
        's' => $search_query
      );
    } else {
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'term_order',
        's' => $search_query,
        'tax_query' => array(
          array(
            'taxonomy' => 'white_paper_category',
            'field'    => 'term_id',
            'terms'    => $search_filter,
          ),
        ),
      );
    }
  } else {
    if ($search_filter == 'all') {
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'term_order',
      );
    } else {
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'term_order',
        'tax_query' => array(
          array(
            'taxonomy' => 'white_paper_category',
            'field'    => 'term_id',
            'terms'    => $search_filter,
          ),
        ),
      );
    }
  }

  $ajaxposts = new WP_Query($args);

  $response = '';

  if ($ajaxposts->have_posts()) {

    $response .= '<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8 2xl:gap-10">';

    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();

      $terms = get_the_terms(get_the_ID(), 'white_paper_category');
      $terms_string = join(',', wp_list_pluck($terms, 'name'));
      $terms_array = explode(',', $terms_string);
      $atts = array(
        'title' => get_the_title(),
        'date' => get_the_date('j M Y'),
        'link' => get_the_permalink(),
        'terms' => $terms_array,
      );
      $response .= card_papers($atts);

    endwhile;

    $response .= '</div>';
    $response .= '<div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>';
  } else {
    $response = '<div class="text-center py-4 px-8">No Posts Found</div>';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_whitepapers', 'filter_whitepapers');
add_action('wp_ajax_nopriv_filter_whitepapers', 'filter_whitepapers');
