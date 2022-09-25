<?php

/**
 * Get Icon
 * This function is in charge of displaying SVG icons across the site.
 *
 * Place each <svg> source in the /assets/icons/{group}/ directory, without adding
 * both `width` and `height` attributes, since these are added dynamically,
 * before rendering the SVG code.
 *
 * All icons are assumed to have equal width and height, hence the option
 * to only specify a `$size` parameter in the svg methods.
 *
 */
function fiap_icon($atts = array())
{
  $atts = shortcode_atts(array(
    'icon'  => false,
    'icon_src' => '',
    'group'  => 'utility',
    'size'  => 16,
    'class'  => false,
    'label'  => false,
  ), $atts);

  if (empty($atts['icon']) && empty($atts['icon_src']))
    return;

  if ($atts['icon_src']) {
    $icon_path = get_attached_file($atts['icon_src']);
  } else {
    $icon_path = get_theme_file_path('/assets/images/icons/' . $atts['group'] . '/' . $atts['icon'] . '.svg');
  }
  if (!file_exists($icon_path))
    return;

  $icon = file_get_contents($icon_path);

  $class = 'svg-icon';
  if (!empty($atts['class']))
    $class .= ' ' . esc_attr($atts['class']);

  if (false !== $atts['size']) {
    $repl = sprintf('<svg class="' . $class . '" width="%d" height="%d" aria-hidden="true" role="img" focusable="false" ', $atts['size'], $atts['size']);
    $svg  = preg_replace('/^<svg /', $repl, trim($icon)); // Add extra attributes to SVG code.
  } else {
    $svg = preg_replace('/^<svg /', '<svg class="' . $class . '"', trim($icon));
  }
  $svg  = preg_replace("/([\n\t]+)/", ' ', $svg); // Remove newlines & tabs.
  $svg  = preg_replace('/>\s*</', '><', $svg); // Remove white space between SVG tags.

  if (!empty($atts['label'])) {
    $svg = str_replace('<svg class', '<svg aria-label="' . esc_attr($atts['label']) . '" class', $svg);
    $svg = str_replace('aria-hidden="true"', '', $svg);
  }

  return $svg;
}


/**
 * Add container to video embeds in WordPress
 *
 * @refer  http://alxmedia.se/code/2013/10/make-wordpress-default-video-embeds-responsive/
 */
function fiap_video_container($html)
{
  return '<div class="aspect-w-16 aspect-h-9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'cl_video_container', 10, 3);
add_filter('video_embed_html', 'cl_video_container'); // Jetpack