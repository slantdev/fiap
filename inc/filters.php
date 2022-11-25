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
      'orderby' => 'date',
      'order' => 'DESC'
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'news',
      'posts_per_page' => $postsPerPage,
      'orderby' => 'date',
      'order' => 'DESC',
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
      'orderby' => 'date',
      'order' => 'DESC'
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'case_study',
      'posts_per_page' => $postsPerPage,
      'orderby' => 'date',
      'order' => 'DESC',
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
        'orderby' => 'date',
        'order' => 'DESC',
        's' => $search_query
      );
    } else {
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'date',
        'order' => 'DESC',
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
        'orderby' => 'date',
        'order' => 'DESC',
      );
    } else {
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'date',
        'order' => 'DESC',
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

function filter_faqs()
{
  $catID = $_POST['category'];

  if ($catID == 'all') {
    $ajaxposts = new WP_Query([
      'post_type' => 'faq',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
    ]);
  } else {
    $ajaxposts = new WP_Query([
      'post_type' => 'faq',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'tax_query' => array(
        array(
          'taxonomy' => 'faq_category',
          'field'    => 'term_id',
          'terms'    => $catID,
        ),
      ),
    ]);
  }

  $response = '';

  if ($ajaxposts->have_posts()) {

    $uniqueid = uniqid('accordion-');
    $response .= '<div class="accordion" id="' . $uniqueid . '">';
    $row_index = 0;
    $state_class = '';

    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();

      $row_index++;
      if ($row_index == 1) {
        $state_class = '';
      } else {
        $state_class = '';
      }

      $response .= '<div class="accordion-item bg-gray-100 border border-gray-300 mb-4 rounded-lg lg:mb-6">
          <h2 class="accordion-header mb-0" id="heading-' . $row_index . '">
            <button class="accordion-button relative flex justify-between w-full py-4 px-4 text-lg font-semibold text-gray-500 leading-tight text-left bg-white border-0 focus:outline-none rounded-lg md:text-xl md:py-5 md:pl-6 md:pr-4 lg:text-xl lg:py-5 lg:pl-8 lg:pr-6 collapsed ' . $state_class . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-' . $row_index . '" aria-expanded="true" aria-controls="collapse-' . $row_index . '">
              ' . get_the_title() . '
              <svg class="collapsed-arrow text-fiap-teal flex-none mt-0.5 ml-4 w-5 h-5 lg:w-7 lg:h-7 xl:ml-8" xmlns="http://www.w3.org/2000/svg" width="27.455" height="27.456" viewBox="0 0 27.455 27.456">
                <g id="Group_2008" data-name="Group 2008" transform="translate(13.728 1) rotate(45)">
                  <line id="Line_9" data-name="Line 9" x1="18" y2="18" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="2" />
                  <line id="Line_10" data-name="Line 10" x2="18" y2="18" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="2" />
                </g>
              </svg>
              <svg class="not-collapsed-arrow text-fiap-teal flex-none mt-0.5 ml-4 w-5 h-5 lg:w-7 lg:h-7 xl:ml-8" xmlns="http://www.w3.org/2000/svg" width="27.455" height="27.456" viewBox="0 0 27.455 27.456">
                <g id="Group_2009" data-name="Group 2009" transform="translate(13.728 1) rotate(45)">
                  <line id="Line_9" data-name="Line 9" x1="18" y2="18" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="2" />
                </g>
              </svg>
            </button>
          </h2>
          <div id="collapse-' . $row_index . '" class="accordion-collapse collapse ' . $state_class . '" aria-labelledby="heading-' . $row_index . '" data-bs-parent="#' . $uniqueid . '">
            <div class="accordion-body py-4 px-5 lg:px-8 lg:py-8">
              <div class="prose">
                ' . get_the_content() . '
              </div>
            </div>
          </div>
        </div>';

    endwhile;

    $response .= '</div>';
  } else {
    $response = '<div class="text-center py-4 px-8">No FAQs Found</div>';
  }


  $response .= '<div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>';

  echo $response;
  exit;
}
add_action('wp_ajax_filter_faqs', 'filter_faqs');
add_action('wp_ajax_nopriv_filter_faqs', 'filter_faqs');
