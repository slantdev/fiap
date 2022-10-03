<?php

/*
 * Add Site Settings
 */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Site Settings',
    'menu_title'  => 'Site Settings',
    'menu_slug'   => 'site-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

/*
 * Add color picker pallete on admin
 */
function cl_acf_input_admin_footer()
{
?>
  <script type="text/javascript">
    (function($) {

      acf.add_filter('color_picker_args', function(args, $field) {

        args.palettes = ['#000000', '#FFFFFF', '#F5F5F5', '#58595B', '#F3F1EF', '#002F56', '#F5813C', '#FFD400', '#BF2031', '#00A79D']

        return args;

      });

    })(jQuery);
  </script>
<?php
}
add_action('acf/input/admin_footer', 'cl_acf_input_admin_footer');

// modify the path to the icons directory
add_filter('acf_icon_path_suffix', 'acf_icon_path_suffix');
function acf_icon_path_suffix($path_suffix)
{
  return 'assets/images/icons/brand/';
}


/*
 * ACF Extended Layout Thumbnails
 * https://www.acf-extended.com/features/fields/flexible-content/advanced-settings
 * @int/string  $thumbnail  Thumbnail ID/URL
 * @array       $field      Field settings
 * @array       $layout     Layout settings
 */
add_filter('acfe/flexible/thumbnail/layout=build_fiap', 'build_fiap_layout_thumbnail', 10, 3);
function build_fiap_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/build_fiap.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=card_features_list', 'card_features_list_layout_thumbnail', 10, 3);
function card_features_list_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/card_features_list.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=card_image_content', 'card_image_content_layout_thumbnail', 10, 3);
function card_image_content_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/card_image_content.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=card_numbers', 'card_numbers_layout_thumbnail', 10, 3);
function card_numbers_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/card_numbers.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=case_studies', 'case_studies_layout_thumbnail', 10, 3);
function case_studies_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/case_studies.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=contact_cards', 'contact_cards_layout_thumbnail', 10, 3);
function contact_cards_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/contact_cards.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=contact_form', 'contact_form_layout_thumbnail', 10, 3);
function contact_form_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/contact_form.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=cta_01', 'cta_01_layout_thumbnail', 10, 3);
function cta_01_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/cta_01.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=cta_02', 'cta_02_layout_thumbnail', 10, 3);
function cta_02_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/cta_02.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=datatable', 'datatable_layout_thumbnail', 10, 3);
function datatable_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/datatable.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=faqs', 'faqs_layout_thumbnail', 10, 3);
function faqs_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/faqs.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=featured_news', 'featured_news_layout_thumbnail', 10, 3);
function featured_news_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/featured_news.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=fiap_journey', 'fiap_journey_layout_thumbnail', 10, 3);
function fiap_journey_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/fiap_journey.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=help_links', 'help_links_layout_thumbnail', 10, 3);
function help_links_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/help_links.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=image_left_text', 'image_left_text_layout_thumbnail', 10, 3);
function image_left_text_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/image_left_text.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=image_right_text', 'image_right_text_layout_thumbnail', 10, 3);
function image_right_text_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/image_right_text.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=logo_carousel', 'logo_carousel_layout_thumbnail', 10, 3);
function logo_carousel_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/logo_carousel.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=select_services', 'select_services_layout_thumbnail', 10, 3);
function select_services_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/select_services.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=slider_two_columns', 'slider_two_columns_layout_thumbnail', 10, 3);
function slider_two_columns_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/slider_two_columns.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=team', 'team_layout_thumbnail', 10, 3);
function team_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/team.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=text_centered', 'text_centered_layout_thumbnail', 10, 3);
function text_centered_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/text_centered.jpg';
}

add_filter('acfe/flexible/thumbnail/layout=white_papers', 'white_papers_layout_thumbnail', 10, 3);
function white_papers_layout_thumbnail($thumbnail, $field, $layout)
{
  return get_stylesheet_directory_uri() . '/assets/images/layouts/white_papers.jpg';
}
