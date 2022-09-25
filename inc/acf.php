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
