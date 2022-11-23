<?php

/**
 * User Password Generator
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

// Filters the display of the password fields
if (apply_filters('show_password_fields', true, bbpress()->displayed_user)) : ?>

  <script type="text/javascript">
    document.body.className = document.body.className.replace('no-js', 'js');
  </script>

  <div class="flex flex-wrap lg:flex-nowrap gap-x-4">
    <label class="w-full lg:w-1/4 block" for="user_login"><?php esc_html_e('Password', 'bbpress'); ?></label>
    <div class="w-full lg:w-3/4">
      <div id="password" class="user-pass1-wrap">

        <button type="button" class="button wp-generate-pw hide-if-no-js text-sm text-slate-800 bg-slate-100 border border-solid border-slate-400 shadow rounded-md px-4 py-2 hover:bg-slate-50"><?php esc_html_e('Set New Password', 'bbpress'); ?></button>

        <fieldset class="bbp-form password wp-pwd hide-if-js mt-3">
          <span class="password-input-wrapper inline-block">
            <input type="password" name="pass1" id="pass1" class="regular-text w-[240px] border border-solid border-slate-400 rounded-md" value="" autocomplete="off" data-pw="<?php echo esc_attr(wp_generate_password(12)); ?>" aria-describedby="pass-strength-result" />
          </span>

          <span class="password-button-wrapper inline-block">
            <button type="button" class="button wp-hide-pw hide-if-no-js inline-block bg-slate-100 hover:bg-slate-50 border border-solid border-slate-400 text-sm text-slate-700 shadow rounded-md px-3 py-2 mr-2" data-toggle="0" aria-label="<?php esc_attr_e('Hide password', 'bbpress'); ?>">
              <span class="dashicons dashicons-hidden"></span>
              <span class="text"><?php esc_html_e('Hide', 'bbpress'); ?></span>
            </button><button type="button" class="button wp-cancel-pw hide-if-no-js inline-block bg-slate-100 hover:bg-slate-50 border border-solid border-slate-400 text-sm text-slate-700 shadow rounded-md px-3 py-2" data-toggle="0" aria-label="<?php esc_attr_e('Cancel password change', 'bbpress'); ?>">
              <span class="dashicons dashicons-no"></span>
              <span class="text"><?php esc_html_e('Cancel', 'bbpress'); ?></span>
            </button>
          </span>

          <div style="display:none" id="pass-strength-result" class="w-[240px]" aria-live="polite"></div>
        </fieldset>
      </div>

      <div class="user-pass2-wrap hide-if-js">
        <label for="pass2"><?php esc_html_e('Repeat New Password', 'bbpress'); ?></label>
        <input name="pass2" type="password" id="pass2" class="regular-text" value="" autocomplete="off" />
        <p class="description"><?php esc_html_e('Type your new password again.', 'bbpress'); ?></p>
      </div>

      <div class="pw-weak" style="display:none">
        <div class="flex items-center gap-x-1">
          <input type="checkbox" name="pw_weak" id="pw_weak" class="pw-checkbox checkbox" />
          <label for="pw_weak"><?php esc_html_e('Confirm use of weak password', 'bbpress'); ?></label>
        </div>
        <p class="description indicator-hint"><?php echo wp_get_password_hint(); ?></p>
      </div>
    </div>
  </div>


<?php endif;
