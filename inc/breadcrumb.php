<?php
function fiap_breadcrumb()
{
  global $post;
  echo '<ul class="flex text-base leading-5">';
  echo '<li><a href="' . site_url() . '" class="hover:underline hover:text-fiap-teal">Home</a></li>';
  if (get_post_type() == 'news') {
    echo '<li class="px-4 text-xs leading-5">/</li>';
    echo '<a href="' . site_url() . '/news" class="hover:underline hover:text-fiap-teal">News</a>';
  }
  if (get_post_type() == 'case_study') {
    echo '<li class="px-4 text-xs leading-5">/</li>';
    echo 'Case Studies';
  }
  if (get_post_type() == 'white_paper') {
    echo '<li class="px-4 text-xs leading-5">/</li>';
    echo '<a href="' . site_url() . '/resources" class="hover:underline hover:text-fiap-teal">Resources</a>';
  }
  if (get_post_type() == 'page') {
    echo '<li class="px-4 text-xs leading-5">/</li>';
    echo '<a href="' . site_url() . '/resources" class="hover:underline hover:text-fiap-teal">Resources</a>';
  }
  if (is_page() && $post->post_parent) {
    echo '<li class="px-4 text-xs leading-5">/</li>';
    echo '<a href="' . get_the_permalink($post->post_parent) . '">' . $post->post_parent . '</a>';
  }
  echo '<li class="px-4 text-xs leading-5">/</li>';
  echo '<li><span class="font-semibold">' . get_the_title() . '</span></li>';
  echo '</ul>';
}
