<?php

/**
 * Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
 */
add_filter('wp_nav_menu_items', 'add_member_link', 10, 2);
function add_member_link($items, $args)
{
  if (is_user_logged_in()) {
    if ($args->menu_id == 'menu-desktop-menu') {
      $items .= '<li class="menu-item menu-item-has-children"><a href="/account">Member Portal</a>';
      $items .= '<ul class="sub-menu">
        <li class="menu-item"><a href="/dashboard">Portal Home</a></li>
        <li class="menu-item"><a href="/forums">Member Forum</a></li>
        <li class="menu-item"><a href="/member-directory">Directory</a></li>
        <li class="menu-item"><a href="' . bbp_get_user_profile_url(get_current_user_id()) . '">My Profile</a></li>
        <li class="menu-item"><a href="' . MeprUtils::logout_url() . '">Logout</a></li>
      </ul>';
      $items .= '</li>';
    }
    if ($args->menu_id == 'menu-mobile-menu') {
      $items .= '<li class="menu-item menu-item-has-children">';
      $items .= '<div class="flex justify-between">';
      $items .= '<a href="/account">Member Portal</a>';
      $items .= '<button class="submenu-toggle inline-block w-6 h-6 bg-slate-100 rounded text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></button>';
      $items .= '</div>';
      $items .= '<ul class="sub-menu">
        <li class="menu-item"><a href="/dashboard">Portal Home</a></li>
        <li class="menu-item"><a href="/forums">Member Forum</a></li>
        <li class="menu-item"><a href="/member-directory">Directory</a></li>
        <li class="menu-item"><a href="' . bbp_get_user_profile_url(get_current_user_id()) . '">My Profile</a></li>
        <li class="menu-item"><a href="' . MeprUtils::logout_url() . '">Logout</a></li>
      </ul>';
      $items .= '</li>';
    }
  }

  return $items;
}
