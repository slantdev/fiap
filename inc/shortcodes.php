<?php

add_shortcode('fiap_member_directory', 'fiap_member_directory_shortcode');
function fiap_member_directory_shortcode($atts)
{

  $args = array(
    'role__in' => array('Subscriber', 'Administrator'),
    'exclude' => array(1, 2)
  );

  // The Query
  $user_query = new WP_User_Query($args);

  //preint_r($user_query);

  if (!empty($user_query->get_results())) {
    $output = '<div class="grid grid-cols-1 gap-4 lg:gap-12 lg:grid-cols-3">';
    foreach ($user_query->get_results() as $user) {
      $user_id = $user->ID;
      $display_name = $user->display_name;
      $avatar = get_avatar($user_id, 64);
      $email = $user->user_email;
      $link = bbp_get_user_profile_url($user_id);
      $output .= '<div class="p-4 rounded-lg border border-solid border-slate-300 lg:p-8 flex gap-x-4 items-center shadow lg:shadow-md">';
      $output .= '<a href="' . $link . '" class="block flex-none w-12 h-12 lg:w-16 lg:h-16 rounded-full overflow-hidden">';
      $output .= $avatar;
      $output .= '</a>';
      $output .= '<div class="leading-none">';
      $output .= '<h4 class="text-lg lg:text-xl font-bold"><a class="hover:underline" href="' . $link . '">' . $user->display_name . '</a></h4>';
      $output .= '<p><a class="inline-block mt-0.5 lg:mt-2 text-xs lg:text-sm text-fiap-teal hover:text-fiap-teal-hover hover:underline" href="mailto:' . $email . '">' . $email . '</a></p>';
      $output .= '</div>';
      $output .= '</div>';
    }
    $output .= '</div>';
  } else {
    $output = 'No users found.';
  }


  return $output;
}
