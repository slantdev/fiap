<?php

/**
 * Template Name: Directory
 * Template Post Type: page
 *
 */
get_header();

//get_template_part('template-parts/layouts/page-header', '', array('breadcrumbs' => true));

// while (have_posts()) :
//   the_post();
//   echo '<div class="pt-12 lg:pt-20 xl:pt-20 pb-12 lg:pb-20 xl:pb-20 relative container mx-auto">';
//   echo '<div class="prose xl:prose-lg  mb-6 xl:mb-8">';
//   the_content();
//   echo '</div>';
//   echo '</div>';
// endwhile;

//get_template_part('template-parts/page', 'builder');
?>
<div class="pt-12 lg:pt-20 xl:pt-20 pb-12 lg:pb-20 xl:pb-20 relative container mx-auto">
  <h1 class="text-3xl lg:text-[34px] leading-tight font-semibold mb-6 lg:mb-12"><?php echo get_the_title() ?></h1>
  <?php
  $args = array(
    'role__in' => array('Subscriber', 'Administrator'),
    'exclude' => array(1, 2)
  );

  // The Query
  $user_query = new WP_User_Query($args);

  // User Loop
  if (!empty($user_query->get_results())) {
  ?>
    <div class="grid grid-cols-1 gap-4 lg:gap-12 lg:grid-cols-3">
      <?php
      foreach ($user_query->get_results() as $user) {
        //preint_r($user);
        $user_id = $user->ID;
        $display_name = $user->display_name;
        $avatar = get_avatar($user_id, 64);
        $email = $user->user_email;
        $link = bbp_get_user_profile_url($user_id);
        echo '<div class="p-4 rounded-lg border border-solid border-slate-300 lg:p-8 flex gap-x-4 items-center shadow lg:shadow-md">';
        echo '<a href="' . $link . '" class="block flex-none w-12 h-12 lg:w-16 lg:h-16 rounded-full overflow-hidden">';
        echo $avatar;
        echo '</a>';
        echo '<div class="leading-none">';
        echo '<h4 class="text-lg lg:text-xl font-bold"><a class="hover:underline" href="' . $link . '">' . $user->display_name . '</a></h4>';
        echo '<p><a class="inline-block mt-0.5 lg:mt-2 text-xs lg:text-sm text-fiap-teal hover:text-fiap-teal-hover hover:underline" href="mailto:' . $email . '">' . $email . '</a></p>';
        echo '</div>';
        echo '</div>';
      }
      ?>
    </div>
  <?php
  } else {
    echo 'No users found.';
  }
  ?>

</div>

<?php
get_footer();
