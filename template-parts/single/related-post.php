<?php

global $post;
$post_type = get_post_type();
$taxonomy = '';
if ($post_type == 'news') {
  $taxonomy = 'news_category';
  $post_type_title = 'News';
}
if ($post_type == 'case_study') {
  $taxonomy = 'case_study_category';
  $post_type_title = 'Case Studies';
}
if ($post_type == 'white_paper') {
  $taxonomy = 'white_paper_category';
  $post_type_title = 'Resources';
}
$post_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
$args = array(
  'post_type' => $post_type,
  'tax_query' => array(
    array(
      'taxonomy' => $taxonomy,
      'field' => 'id',
      'terms' => $post_terms
    )
  ),
  'post__not_in' => array(get_the_ID()),
  'posts_per_page' => 3,
  'orderby' => 'date',
);

$related_query = new WP_Query($args);
if ($related_query->have_posts()) {
  echo '<section class="bg-gray-100">';
  echo '<div class="container mx-auto relative py-12 lg:py-24 xl:py-36">';
  echo '<h3 class="mb-6 lg:mb-8">Related ' . $post_type_title . '</h3>';
  echo '<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-10 mt-6 lg:mt-12">';
  while ($related_query->have_posts()) {
    $related_query->the_post();
    if ($post_type == 'news') {
      $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
      $atts = array(
        'img_src' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'title' => get_the_title(),
        'date' => get_the_date('jS F Y'),
        'excerpt' => $excerpt,
        'link' => get_the_permalink(),
      );
      echo card_article($atts);
    }
    if ($post_type == 'case_study') {
      $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
      $atts = array(
        'img_src' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'title' => get_the_title(),
        'excerpt' => $excerpt,
        'link' => get_the_permalink(),
      );
      echo card_hover($atts);
    }
    if ($post_type == 'white_paper') {
      $terms = get_the_terms(get_the_ID(), 'white_paper_category');
      $terms_string = join(',', wp_list_pluck($terms, 'name'));
      $terms_array = explode(',', $terms_string);
      $atts = array(
        'title' => get_the_title(),
        'date' => get_the_date('j M Y'),
        'link' => get_the_permalink(),
        'terms' => $terms_array,
      );
      echo card_papers($atts);
    }
  }
  echo '</div>';
  echo '</div>';
  echo '</section>';
}
wp_reset_postdata();
