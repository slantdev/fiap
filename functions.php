<?php

/**
 * Theme setup.
 */
function fiap_setup()
{
  add_theme_support('title-tag');

  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'fiap'),
    )
  );

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  add_theme_support('align-wide');
  add_theme_support('wp-block-styles');

  add_theme_support('editor-styles');
  add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'fiap_setup');

/**
 * Enqueue theme assets.
 */
function fiap_enqueue_scripts()
{
  $theme = wp_get_theme();
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.2.2');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.2.2');
  //wp_enqueue_script('tw-elements', 'https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js', array(), $theme->get('Version'));
  wp_enqueue_style('fiap', fiap_asset('css/app.css'), array(), $theme->get('Version'));
  wp_enqueue_script('fiap', fiap_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'fiap_enqueue_scripts');

function fiap_admin_styles()
{
  $theme = wp_get_theme();
  wp_enqueue_style('admin_css', get_template_directory_uri() . '/css/admin-style.css', false, $theme->get('Version'));
}
add_action('admin_enqueue_scripts', 'fiap_admin_styles');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function fiap_asset($path)
{
  if (wp_get_environment_type() === 'production') {
    return get_stylesheet_directory_uri() . '/' . $path;
  }

  return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function fiap_nav_menu_add_li_class($classes, $item, $args, $depth)
{
  if (isset($args->li_class)) {
    $classes[] = $args->li_class;
  }

  if (isset($args->{"li_class_$depth"})) {
    $classes[] = $args->{"li_class_$depth"};
  }

  return $classes;
}

add_filter('nav_menu_css_class', 'fiap_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function fiap_nav_menu_add_submenu_class($classes, $args, $depth)
{
  if (isset($args->submenu_class)) {
    $classes[] = $args->submenu_class;
  }

  if (isset($args->{"submenu_class_$depth"})) {
    $classes[] = $args->{"submenu_class_$depth"};
  }

  return $classes;
}

add_filter('nav_menu_submenu_css_class', 'fiap_nav_menu_add_submenu_class', 10, 3);

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/utilities.php';
require get_template_directory() . '/inc/card.php';
require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/breadcrumb.php';
//require get_template_directory() . '/inc/acf-debug.php';
