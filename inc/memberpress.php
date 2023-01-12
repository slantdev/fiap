<?php

/**
 * Hide CPT Access Column
 * https://docs.memberpress.com/article/329-filter-hooks-in-memberpress#mepr-hide-cpt-access-column
 */
add_filter('mepr-hide-cpt-access-column', 'mepr_hide_cpt_access_column');
function mepr_hide_cpt_access_column($except)
{
  // Do what you need
  $except = ['post', 'page', 'case_study', 'news', 'faq', 'fiap_members', 'team', 'white_paper', 'topic', 'reply'];
  return $except;
}


/**
 * Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
 */
add_filter('wp_nav_menu_items', 'add_member_link', 10, 2);
function add_member_link($items, $args)
{
  if (is_user_logged_in()) {
    if ($args->menu_id == 'menu-desktop-menu') {
      $items .= '<li class="menu-item menu-item-has-children"><a href="/account" class="!px-4 bg-fiap-teal hover:!text-white">Member Portal</a>';
      $items .= '<ul class="sub-menu">
        <li class="menu-item"><a href="/account">Portal Home</a></li>
        <li class="menu-item"><a href="/forums">Member Forum</a></li>
        <li class="menu-item"><a href="/member-directory">Directory</a></li>
        <li class="menu-item"><a href="/account/my-profile">My Profile</a></li>
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
        <li class="menu-item"><a href="/account">Portal Home</a></li>
        <li class="menu-item"><a href="/forums">Member Forum</a></li>
        <li class="menu-item"><a href="/member-directory">Directory</a></li>
      </ul>';
      $items .= '</li>';
      $items .= '<li class="menu-item menu-item-has-children">';
      $items .= '<div class="flex justify-between">';
      $items .= '<a href="/account">My Account</a>';
      $items .= '<button class="submenu-toggle inline-block w-6 h-6 bg-slate-100 rounded text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></button>';
      $items .= '</div>';
      $items .= '<ul class="sub-menu">
        <li class="menu-item"><a href="/account/my-profile">My Profile</a></li>
        <li class="menu-item"><a href="/account/?action=newpassword">Change Password</a></li>
        <li class="menu-item"><a href="' . MeprUtils::logout_url() . '">Logout</a></li>
      </ul>';
      $items .= '</li>';
    }
  }

  return $items;
}
