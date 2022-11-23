<?php

function fiap_bbpress_title()
{
  $postID = get_queried_object_id();
  //global $post;
  echo '<h3 class="text-2xl xl:text-3xl">' . get_the_title($postID) . '</h3>';
}
//add_action('bbp_template_before_forums_index', 'fiap_bbpress_title', 0);


add_filter('wp_nav_menu_items', 'fiap_add_my_profile_menu', 10, 2);
function fiap_add_my_profile_menu($items, $args)
{
  if ($args->menu == 'member-main-menu') {
    $items .=  '<li class=""><a href="' . bbp_get_user_profile_url(get_current_user_id()) . '">My Profile</a></li>';
  }
  return $items;
}
