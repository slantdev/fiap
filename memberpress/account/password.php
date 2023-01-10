<?php if (!defined('ABSPATH')) {
  die('You are not allowed to call this page directly.');
} ?>

<div class="relative bg-slate-50 py-12 xl:py-24">
  <div class="container mx-auto">
    <div class="max-w-screen-md mx-auto">
      <h1 class="mb-4 lg:mb-6 font-bold text-2xl lg:text-4xl">Change Password</h1>
      <div class="mp_wrapper">
        <div class="bg-white rounded-xl border border-solid border-neutral-300">

          <div class="p-4 lg:p-8">
            <?php MeprView::render('/shared/errors', get_defined_vars()); ?>
            <form action="<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>" class="mepr-newpassword-form mepr-form" method="post" novalidate>
              <input type="hidden" name="plugin" value="mepr" />
              <input type="hidden" name="action" value="updatepassword" />
              <?php wp_nonce_field('update_password', 'mepr_account_nonce'); ?>

              <div class="mp-form-row mepr_new_password">
                <label for="mepr-new-password"><?php _ex('New Password', 'ui', 'memberpress'); ?></label>
                <div class="mp-hide-pw">
                  <input type="password" name="mepr-new-password" id="mepr-new-password" class="mepr-form-input mepr-new-password" required />
                  <button type="button" class="button mp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e('Show password', 'memberpress'); ?>">
                    <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                  </button>
                </div>
              </div>
              <div class="mp-form-row mepr_confirm_password">
                <label for="mepr-confirm-password"><?php _ex('Confirm New Password', 'ui', 'memberpress'); ?></label>
                <div class="mp-hide-pw">
                  <input type="password" name="mepr-confirm-password" id="mepr-confirm-password" class="mepr-form-input mepr-new-password-confirm" required />
                  <button type="button" class="button mp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e('Show password', 'memberpress'); ?>">
                    <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                  </button>
                </div>
              </div>
              <?php MeprHooks::do_action('mepr-account-after-password-fields', $mepr_current_user); ?>

              <?php MeprView::render('/shared/has_errors', get_defined_vars()); ?>
              <div class="mt-4 lg:mt-6">
                <div class="flex flex-col md:flex-row gap-4 md:items-center">
                  <div class="flex items-center gap-x-2">
                    <input type="submit" name="new-password-submit" value="<?php _ex('Update Password', 'ui', 'memberpress'); ?>" class="mepr-submit bg-fiap-darkblue hover:brightness-125 px-5 py-2 rounded-md text-white cursor-pointer" />
                    <div class="w-4">
                      <img src="<?php echo admin_url('images/loading.gif'); ?>" alt="<?php _e('Loading...', 'memberpress'); ?>" style="display: none;" class="mepr-loading-gif" />
                    </div>
                  </div>

                  <div>
                    <a class="text-base hover:underline hover:text-fiap-teal-hover" href="<?php echo esc_url($mepr_options->account_page_url() . 'my-profile'); ?>"><?php _ex('Cancel', 'ui', 'memberpress'); ?></a>
                  </div>
                </div>
              </div>
            </form>

            <?php MeprHooks::do_action('mepr_account_password', $mepr_current_user); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>