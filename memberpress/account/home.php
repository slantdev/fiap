<?php if (!defined('ABSPATH')) {
  die('You are not allowed to call this page directly.');
}

get_template_part('template-parts/layouts/page-header', '', array('breadcrumbs' => false));
?>

<section class="bg-fiap-light py-10 md:py-12 lg:py-16">
  <div class="container mx-auto">
    <div class="flex flex-wrap justify-center items-center">
      <div class="mb-4 md:mb-0 md:mr-6 lg:mr-8"><span class="text-fiap-darkblue text-xl lg:text-2xl font-semibold leading-tight">I'm looking for</span></div>
      <div class="flex justify-center items-center">
        <div class="dropdown relative mr-2 md:mr-6">
          <button class="dropdown-toggle px-4 py-4 leading-none rounded-lg focus:outline-none focus:ring-0 transition duration-150 ease-in-out flex items-center justify-between whitespace-nowrap min-w-[200px] md:min-w-[300px] lg:min-w-[360px] text-lg bg-white border border-solid border-[#E3E3E3] text-[#868686] w-full max-w-[380px] tracking-wider font-light lg:px-8" type="button" id="dropdownSelect" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a href="#" class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8">Option 1</a>
              <a href="#" class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8">Option 1</a>
              <a href="#" class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8">Option 1</a>
              <a href="#" class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8">Option 1</a>
            </li>
          </ul>
        </div>
        <button type="button" class="bg-fiap-darkblue p-4 py-2 h-[52px] md:px-8 text-white text-lg lg:text-2xl rounded-lg leading-7 hover:brightness-125">Go</button>
      </div>
    </div>
  </div>
</section>

<section class="bg-white py-12 md:py-12 lg:py-24">
  <div class="container mx-auto">
    <div class="flex lg:gap-x-6">
      <div class="w-full lg:w-2/3">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
          <div>
            <?php
            $atts = array(
              'img_src' => 'http://fiap.local/wp-content/uploads/2022/09/ae946ffb-53fe-3ead-a770-38425e21321b.jpg',
              'title' => 'MEMBER RESOURCES',
              'link' => site_url() . '/resources',
            );
            echo card_shortcut($atts);
            ?>
          </div>
          <div>
            <?php
            $atts = array(
              'img_src' => 'http://fiap.local/wp-content/uploads/2022/09/ae946ffb-53fe-3ead-a770-38425e21321b.jpg',
              'title' => 'COMMUNITY FORUM',
              'link' => site_url() . '/forums',
            );
            echo card_shortcut($atts);
            ?>
          </div>
          <div>
            <?php
            $atts = array(
              'img_src' => 'http://fiap.local/wp-content/uploads/2022/09/ae946ffb-53fe-3ead-a770-38425e21321b.jpg',
              'title' => 'ACTION PLANS',
              'link' => site_url() . '/action-plans',
            );
            echo card_shortcut($atts);
            ?>
          </div>
          <div>
            <?php
            $atts = array(
              'img_src' => 'http://fiap.local/wp-content/uploads/2022/09/ae946ffb-53fe-3ead-a770-38425e21321b.jpg',
              'title' => 'MEMBER DIRECTORY',
              'link' => '#',
            );
            echo card_shortcut($atts);
            ?>
          </div>
          <div>
            <?php
            $atts = array(
              'img_src' => 'http://fiap.local/wp-content/uploads/2022/09/ae946ffb-53fe-3ead-a770-38425e21321b.jpg',
              'title' => 'LATEST NEWS',
              'link' => site_url() . '/news',
            );
            echo card_shortcut($atts);
            ?>
          </div>
          <div>
            <?php
            $atts = array(
              'img_src' => 'http://fiap.local/wp-content/uploads/2022/09/ae946ffb-53fe-3ead-a770-38425e21321b.jpg',
              'title' => 'FAQS',
              'link' => site_url() . '/faqs',
            );
            echo card_shortcut($atts);
            ?>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3">
        <div class="flex flex-col gap-6">
          <div class="bg-fiap-teal text-white p-6 rounded-lg lg:min-h-[256px] flex flex-col">
            <h3 class="text-3xl mb-4">FEATURED</h3>
            <div class="mb-6 lg:w-3/4 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet.</div>
            <div class="mt-auto"><a href="#" class="inline-flex px-6 py-2 rounded bg-white text-fiap-darkblue text-sm shadow hover:shadow-md font-medium">Explore</a></div>
          </div>
          <div>
            <a href="#" class="inline-flex w-full py-5 px-6 hover:shadow-md text-white bg-fiap-darkblue rounded-lg uppercase font-medium">Ask a Question</a>
          </div>
          <div>
            <div class="py-4 px-6 bg-[#E8E8E8] rounded-lg font-medium">ACCOUNT MANAGEMENT</div>
            <ul class="p-6 flex flex-col gap-y-1">
              <li><a href="#" class="hover:text-fiap-teal">My Account</a></li>
              <li><a href="#" class="hover:text-fiap-teal">Edit your information</a></li>
              <li><a href="#" class="hover:text-fiap-teal">Change your password</a></li>
              <li><a href="#" class="hover:text-fiap-teal">Invite a member</a></li>
              <li><a href="<?php echo wp_logout_url(home_url()); ?>" class="hover:text-fiap-teal">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/page', 'builder'); ?>
<!-- <div class="mp_wrapper">
  <?php if (!empty($welcome_message)) : ?>
    <div id="mepr-account-welcome-message">
      <?php echo MeprHooks::apply_filters('mepr-account-welcome-message', do_shortcode($welcome_message), $mepr_current_user); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($mepr_current_user->user_message)) : ?>
    <div id="mepr-account-user-message">
      <?php echo MeprHooks::apply_filters('mepr-user-message', wpautop(do_shortcode($mepr_current_user->user_message)), $mepr_current_user); ?>
    </div>
  <?php endif; ?>

  <?php MeprView::render('/shared/errors', get_defined_vars()); ?>

  <form class="mepr-account-form mepr-form" id="mepr_account_form" action="" method="post" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="mepr-process-account" value="Y" />
    <?php wp_nonce_field('update_account', 'mepr_account_nonce'); ?>

    <?php MeprHooks::do_action('mepr-account-home-before-name', $mepr_current_user); ?>

    <?php if ($mepr_options->show_fname_lname) : ?>
      <div class="mp-form-row mepr_first_name<?php echo ($mepr_options->require_fname_lname) ? ' mepr-field-required' : ''; ?>">
        <div class="mp-form-label">
          <label for="user_first_name"><?php _ex('First Name:', 'ui', 'memberpress');
                                        echo ($mepr_options->require_fname_lname) ? '*' : ''; ?></label>
          <span class="cc-error"><?php _ex('First Name Required', 'ui', 'memberpress'); ?></span>
        </div>
        <input type="text" name="user_first_name" id="user_first_name" class="mepr-form-input" value="<?php echo $mepr_current_user->first_name; ?>" <?php echo ($mepr_options->require_fname_lname) ? 'required' : ''; ?> />
      </div>
      <div class="mp-form-row mepr_last_name<?php echo ($mepr_options->require_fname_lname) ? ' mepr-field-required' : ''; ?>">
        <div class="mp-form-label">
          <label for="user_last_name"><?php _ex('Last Name:', 'ui', 'memberpress');
                                      echo ($mepr_options->require_fname_lname) ? '*' : ''; ?></label>
          <span class="cc-error"><?php _ex('Last Name Required', 'ui', 'memberpress'); ?></span>
        </div>
        <input type="text" id="user_last_name" name="user_last_name" class="mepr-form-input" value="<?php echo $mepr_current_user->last_name; ?>" <?php echo ($mepr_options->require_fname_lname) ? 'required' : ''; ?> />
      </div>
    <?php else : ?>
      <input type="hidden" name="user_first_name" value="<?php echo $mepr_current_user->first_name; ?>" />
      <input type="hidden" name="user_last_name" value="<?php echo $mepr_current_user->last_name; ?>" />
    <?php endif; ?>
    <div class="mp-form-row mepr_email mepr-field-required">
      <div class="mp-form-label">
        <label for="user_email"><?php _ex('Email:*', 'ui', 'memberpress');  ?></label>
        <span class="cc-error"><?php _ex('Invalid Email', 'ui', 'memberpress'); ?></span>
      </div>
      <input type="email" id="user_email" name="user_email" class="mepr-form-input" value="<?php echo $mepr_current_user->user_email; ?>" required />
    </div>
    <?php
    MeprUsersHelper::render_custom_fields(null, 'account');
    MeprHooks::do_action('mepr-account-home-fields', $mepr_current_user);
    ?>

    <div class="mepr_spacer">&nbsp;</div>

    <input type="submit" name="mepr-account-form" value="<?php _ex('Save Profile', 'ui', 'memberpress'); ?>" class="mepr-submit mepr-share-button" />
    <img src="<?php echo admin_url('images/loading.gif'); ?>" alt="<?php _e('Loading...', 'memberpress'); ?>" style="display: none;" class="mepr-loading-gif" />
    <?php MeprView::render('/shared/has_errors', get_defined_vars()); ?>
  </form>

  <div class="mepr_spacer">&nbsp;</div>

  <span class="mepr-account-change-password">
    <a href="<?php echo $account_url . $delim . 'action=newpassword'; ?>"><?php _ex('Change Password', 'ui', 'memberpress'); ?></a>
  </span>

  <?php MeprHooks::do_action('mepr_account_home', $mepr_current_user); ?>
</div> -->