<?php if (!defined('ABSPATH')) {
  die('You are not allowed to call this page directly.');
}

get_template_part('template-parts/layouts/page-header', '', array('breadcrumbs' => false));
?>

<?php if (is_page('1071')) { ?>
  <section class="bg-fiap-light py-10 md:py-12 lg:py-16">
    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center items-center">
        <div class="mb-4 md:mb-0 md:mr-6 lg:mr-8"><span class="text-fiap-darkblue text-xl lg:text-2xl font-semibold leading-tight">I'm looking for</span></div>
        <div class="flex justify-center items-center">
          <div class="dropdown relative mr-2 md:mr-6">
            <button class="dropdown-toggle px-2 py-4 leading-none focus:outline-none focus:ring-0 transition duration-150 ease-in-out flex items-center justify-between whitespace-nowrap min-w-[200px] md:min-w-[300px] lg:min-w-[360px] text-xl bg-white bg-opacity-0 border-b-2 border-solid border-fiap-darkblue text-[#868686] w-full max-w-[380px] tracking-wider font-light lg:px-2" type="button" id="dropdownSelect" data-bs-toggle="dropdown" aria-expanded="false">
              <span>Select</span>
              <svg class="w-4 ml-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" width="28.707" height="14.707" viewBox="0 0 28.707 14.707">
                <g id="Group_234" data-name="Group 234" transform="translate(-2908.146 -887.146)">
                  <line id="Line_3" data-name="Line 3" x2="14" y2="14" transform="translate(2908.5 887.5)" fill="none" stroke="currentColor" stroke-width="1" />
                  <line id="Line_4" data-name="Line 4" x1="14" y2="14" transform="translate(2922.5 887.5)" fill="none" stroke="currentColor" stroke-width="1" />
                </g>
              </svg>
            </button>
            <ul class="dropdown-menu min-w-max w-full absolute bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownSelect">
              <li>
                <?php
                $im_looking_for_select = get_field('im_looking_for_select');
                if ($im_looking_for_select) {
                  foreach ($im_looking_for_select as $option) {
                    echo '<a href="' . $option['option_link']['url'] . '" class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8">' . $option['option_link']['title'] . '</a>';
                  }
                }
                ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-12 md:py-12 lg:py-24">
    <div class="container mx-auto">
      <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-6">
        <div class="w-full lg:w-2/3 mb-8 lg:mb-0">
          <?php
          $card_shortcut = get_field('card_shortcut');
          if ($card_shortcut) {
            echo '<div class="grid grid-cols-2 gap-2 md:gap-6 md:grid-cols-3">';
            foreach ($card_shortcut as $card) {
              echo '<div>';
              $atts = array(
                'img_src' => $card['card_image']['url'],
                'title' => $card['card_link']['title'],
                'link' => $card['card_link']['url'],
              );
              echo card_shortcut($atts);
              echo '</div>';
            }
            echo '</div>';
          }
          ?>
        </div>
        <div class="w-full lg:w-1/3">
          <div class="flex flex-col gap-6">
            <div class="bg-fiap-teal text-white p-6 rounded-lg lg:min-h-[256px] flex flex-col">
              <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 1,
                'orderby' => 'date'
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                  $the_query->the_post();
                  $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
                  echo '<h3 class="text-3xl mb-4">' . get_the_title() . '</h3>';
                  echo '<div class="mb-6 text-base">' . $excerpt . '</div>';
                  echo '<div class="mt-auto"><a href="' . get_the_permalink() . '" class="inline-flex px-6 py-2 rounded bg-white text-fiap-darkblue text-sm shadow hover:shadow-md font-medium">Explore</a></div>';
                }
              }
              wp_reset_postdata();
              ?>
            </div>
            <div>
              <a href="/get-involved" class="inline-flex w-full py-5 px-6 hover:shadow-lg text-white bg-fiap-darkblue hover:brightness-125 transition-all rounded-lg uppercase font-medium">Ask a Question</a>
            </div>
            <div>
              <div class="py-4 px-6 bg-[#E8E8E8] rounded-lg font-medium">ACCOUNT MANAGEMENT</div>
              <ul class="p-6 flex flex-col gap-y-1">
                <li><a href="/account/my-profile" class="hover:text-fiap-teal">My Profile</a></li>
                <li><a href="/invite-member" class="hover:text-fiap-teal">Invite a member</a></li>
                <li><a href="<?php echo MeprUtils::logout_url(); ?>" class="hover:text-fiap-teal">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/page', 'builder'); ?>

<?php } else { ?>

  <div class="relative bg-slate-50 py-12 xl:py-24">
    <div class="container mx-auto">
      <div class="max-w-screen-md mx-auto">
        <h1 class="mb-4 lg:mb-6 font-bold text-2xl lg:text-4xl">My Profile</h1>
        <div class="mp_wrapper">

          <div class="bg-white rounded-xl border border-solid border-neutral-300">
            <?php if (!empty($mepr_current_user->user_message)) : ?>
              <div id="mepr-account-user-message">
                <?php echo MeprHooks::apply_filters('mepr-user-message', wpautop(do_shortcode($mepr_current_user->user_message)), $mepr_current_user); ?>
              </div>
            <?php endif; ?>

            <?php MeprView::render('/shared/errors', get_defined_vars()); ?>

            <form class="mepr-account-form mepr-form" id="mepr_account_form" action="" method="post" enctype="multipart/form-data" novalidate>
              <div class="p-4 lg:p-8 border-b border-solid border-neutral-300">
                <input type="hidden" name="mepr-process-account" value="Y" />
                <?php wp_nonce_field('update_account', 'mepr_account_nonce'); ?>

                <?php MeprHooks::do_action('mepr-account-home-before-name', $mepr_current_user); ?>

                <?php if ($mepr_options->show_fname_lname) : ?>
                  <div class="w-full flex flex-wrap lg:flex-nowrap gap-x-4 mb-4">
                    <div class="w-full mb-2 lg:mb-0 lg:w-1/2">
                      <div class="mp-form-row mepr_first_name<?php echo ($mepr_options->require_fname_lname) ? ' mepr-field-required' : ''; ?>">
                        <div class="mp-form-label">
                          <label for="user_first_name"><?php _ex('First Name:', 'ui', 'memberpress');
                                                        echo ($mepr_options->require_fname_lname) ? ' *' : ''; ?></label>
                          <span class="cc-error"><?php _ex('First Name Required', 'ui', 'memberpress'); ?></span>
                        </div>
                        <input type="text" name="user_first_name" id="user_first_name" class="mepr-form-input" value="<?php echo $mepr_current_user->first_name; ?>" <?php echo ($mepr_options->require_fname_lname) ? 'required' : ''; ?> />
                      </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                      <div class="mp-form-row mepr_last_name<?php echo ($mepr_options->require_fname_lname) ? ' mepr-field-required' : ''; ?>">
                        <div class="mp-form-label">
                          <label for="user_last_name" class="!text-base !mb-1 !inline-block"><?php _ex('Last Name:', 'ui', 'memberpress');
                                                                                              echo ($mepr_options->require_fname_lname) ? ' *' : ''; ?></label>
                          <span class="cc-error"><?php _ex('Last Name Required', 'ui', 'memberpress'); ?></span>
                        </div>
                        <input type="text" id="user_last_name" name="user_last_name" class="mepr-form-input" value="<?php echo $mepr_current_user->last_name; ?>" <?php echo ($mepr_options->require_fname_lname) ? 'required' : ''; ?> />
                      </div>
                    </div>
                  </div>
                <?php else : ?>
                  <input type="hidden" name="user_first_name" value="<?php echo $mepr_current_user->first_name; ?>" />
                  <input type="hidden" name="user_last_name" value="<?php echo $mepr_current_user->last_name; ?>" />
                <?php endif; ?>
                <div class="mp-form-row mepr_email mepr-field-required">
                  <div class="mp-form-label">
                    <label for="user_email" class="!text-base !mb-1 !inline-block"><?php _ex('Email:*', 'ui', 'memberpress');  ?></label>
                    <span class="cc-error"><?php _ex('Invalid Email', 'ui', 'memberpress'); ?></span>
                  </div>
                  <input type="email" id="user_email" name="user_email" class="mepr-form-input" value="<?php echo $mepr_current_user->user_email; ?>" required />
                </div>
                <?php
                MeprUsersHelper::render_custom_fields(null, 'account');
                MeprHooks::do_action('mepr-account-home-fields', $mepr_current_user);
                ?>
              </div>
              <div class="p-4 lg:p-8">
                <?php MeprView::render('/shared/has_errors', get_defined_vars()); ?>
                <div class="flex flex-col md:flex-row gap-4 md:items-center">
                  <div class="flex items-center gap-x-2">
                    <input class="bg-fiap-darkblue hover:brightness-125 px-5 py-2 rounded-md text-white cursor-pointer" type="submit" name="mepr-account-form" value="<?php _ex('Save Profile', 'ui', 'memberpress'); ?>" class="mepr-submit mepr-share-button" />
                    <div class="w-4">
                      <img src="<?php echo admin_url('images/loading.gif'); ?>" alt="<?php _e('Loading...', 'memberpress'); ?>" style="display: none;" class="mepr-loading-gif" />
                    </div>
                  </div>
                  <div>
                    <span class="mepr-account-change-password">
                      <a class="text-base hover:underline hover:text-fiap-teal-hover" href="<?php echo $account_url . $delim . 'action=newpassword'; ?>"><?php _ex('Change Password', 'ui', 'memberpress'); ?></a>
                    </span>
                  </div>
                </div>
              </div>
              <div>
                <!-- <img src="<?php echo admin_url('images/loading.gif'); ?>" alt="<?php _e('Loading...', 'memberpress'); ?>" style="display: none;" class="mepr-loading-gif" /> -->


              </div>
            </form>

            <?php MeprHooks::do_action('mepr_account_home', $mepr_current_user); ?>

          </div>

        </div>
      </div>
    </div>
  </div>

<?php } ?>