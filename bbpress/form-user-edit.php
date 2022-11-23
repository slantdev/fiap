<?php

/**
 * bbPress User Profile Edit Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<form id="bbp-your-profile" method="post" enctype="multipart/form-data" class="bg-white rounded-xl border border-solid border-neutral-300">

  <?php do_action('bbp_user_edit_before'); ?>

  <div class="p-4 lg:p-8 border-b border-solid border-neutral-300">
    <fieldset class="bbp-form">
      <legend class="block font-bold text-2xl mb-4"><?php esc_html_e('Name', 'bbpress') ?></legend>
      <?php do_action('bbp_user_edit_before_name'); ?>
      <div class="w-full flex flex-wrap lg:flex-nowrap gap-x-4 mb-4">
        <div class="w-full mb-2 lg:mb-0 lg:w-1/2">
          <label class="block" for="first_name"><?php esc_html_e('First Name', 'bbpress') ?></label>
          <input type="text" name="first_name" id="first_name" value="<?php bbp_displayed_user_field('first_name', 'edit'); ?>" class="regular-text w-full border border-solid border-slate-400 rounded-md" />
        </div>
        <div class="w-full lg:w-1/2">
          <label class="block" for="last_name"><?php esc_html_e('Last Name', 'bbpress') ?></label>
          <input type="text" name="last_name" id="last_name" value="<?php bbp_displayed_user_field('last_name', 'edit'); ?>" class="regular-text w-full border border-solid border-slate-400 rounded-md" />
        </div>
      </div>
      <div class="w-full hidden lg:flex-nowrap gap-x-4 mb-4">
        <div class="w-full lg:w-1/2">
          <label class="block" for="nickname"><?php esc_html_e('Nickname', 'bbpress'); ?></label>
          <input type="text" name="nickname" id="nickname" value="<?php bbp_displayed_user_field('nickname', 'edit'); ?>" class="regular-text w-full border border-solid border-slate-400 rounded-md" />
        </div>
        <div class="w-full lg:w-1/2">
          <label class="block" for="display_name"><?php esc_html_e('Display Name', 'bbpress') ?></label>
          <?php bbp_edit_user_display_name(); ?>
        </div>
      </div>
      <?php do_action('bbp_user_edit_after_name'); ?>
    </fieldset>
  </div>

  <div class="hidden p-4 lg:p-8 border-b border-solid border-neutral-300">
    <fieldset class="bbp-form">
      <legend class="block font-bold text-2xl mb-4"><?php esc_html_e('Contact Info', 'bbpress') ?></legend>
      <?php do_action('bbp_user_edit_before_contact'); ?>
      <div>
        <label class="block" for="url"><?php esc_html_e('Website', 'bbpress') ?></label>
        <input type="text" name="url" id="url" value="<?php bbp_displayed_user_field('user_url', 'edit'); ?>" maxlength="200" class="regular-text code w-full border border-solid border-slate-400 rounded-md" />
      </div>
      <?php foreach (bbp_edit_user_contact_methods() as $name => $desc) : ?>
        <div>
          <label for="<?php echo esc_attr($name); ?>"><?php echo apply_filters('user_' . $name . '_label', $desc); ?></label>
          <input type="text" name="<?php echo esc_attr($name); ?>" id="<?php echo esc_attr($name); ?>" value="<?php bbp_displayed_user_field($name, 'edit'); ?>" class="regular-text border border-solid border-slate-400 rounded-md" />
        </div>
      <?php endforeach; ?>
      <?php do_action('bbp_user_edit_after_contact'); ?>
    </fieldset>
  </div>

  <div class="p-4 lg:p-8 border-b border-solid border-neutral-300">
    <fieldset class="bbp-form">
      <legend class="block font-bold text-2xl mb-4">
        <?php bbp_is_user_home_edit()
          ? esc_html_e('About Yourself', 'bbpress')
          : esc_html_e('About the user', 'bbpress');
        ?>
      </legend>

      <?php do_action('bbp_user_edit_before_about'); ?>

      <div>
        <label class="hidden" for="description"><?php esc_html_e('Biographical Info', 'bbpress'); ?></label>
        <textarea class="w-full border border-solid border-slate-400 rounded-md" name="description" id="description" rows="5" cols="30"><?php bbp_displayed_user_field('description', 'edit'); ?></textarea>
      </div>

      <?php do_action('bbp_user_edit_after_about'); ?>

    </fieldset>
  </div>

  <div class="p-4 lg:p-8 border-b border-solid border-neutral-300">
    <fieldset class="bbp-form">
      <legend class="block font-bold text-2xl mb-4"><?php esc_html_e('Account', 'bbpress') ?></legend>
      <?php do_action('bbp_user_edit_before_account'); ?>
      <div class="flex gap-x-4 flex-wrap lg:flex-nowrap mb-4">
        <label class="w-full lg:w-1/4" for="user_login"><?php esc_html_e('Username', 'bbpress'); ?></label>
        <input type="text" name="user_login" id="user_login" value="<?php bbp_displayed_user_field('user_login', 'edit'); ?>" disabled="disabled" class="regular-text w-3/4 border border-solid border-slate-400 rounded-md" />
      </div>
      <div class="flex gap-x-4 flex-wrap lg:flex-nowrap mb-4">
        <label class="w-full lg:w-1/4" for="email"><?php esc_html_e('Email', 'bbpress'); ?></label>
        <input class="w-full lg:w-3/4 border border-solid border-slate-400 rounded-md" type="text" name="email" id="email" value="<?php bbp_displayed_user_field('user_email', 'edit'); ?>" class="regular-text" autocomplete="off" />
      </div>

      <?php bbp_get_template_part('form', 'user-passwords'); ?>

      <?php do_action('bbp_user_edit_after_account'); ?>

    </fieldset>
  </div>

  <div class="p-4 lg:p-8 border-b border-solid border-neutral-300">
    <?php do_action('bbp_user_edit_after'); ?>
  </div>

  <div class="p-4 lg:p-8">
    <fieldset class="submit">
      <!-- <legend><?php esc_html_e('Save Changes', 'bbpress'); ?></legend> -->
      <div>

        <?php bbp_edit_user_form_fields(); ?>

        <button type="submit" id="bbp_user_edit_submit" name="bbp_user_edit_submit" class="button submit user-submit bg-fiap-darkblue hover:brightness-125 px-5 py-2 rounded-md text-white">
          <?php bbp_is_user_home_edit()
            ? esc_html_e('Update Profile', 'bbpress')
            : esc_html_e('Update User',    'bbpress');
          ?>
        </button>
      </div>
    </fieldset>
  </div>
</form>