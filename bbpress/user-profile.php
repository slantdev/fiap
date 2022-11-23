<?php

/**
 * User Profile
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

do_action('bbp_template_before_user_profile'); ?>

<div id="bbp-user-profile" class="bbp-user-profile bg-white rounded-xl border border-solid border-neutral-300">
  <div class="bbp-user-section">
    <div class="p-4 lg:p-8 border-b border-solid border-neutral-300">
      <h2 class="entry-title hidden">@<?php bbp_displayed_user_field('user_nicename'); ?></h2>
      <h3 class="hidden"><?php esc_html_e('Profile', 'bbpress'); ?></h3>

      <?php if (bbp_get_displayed_user_field('user_firstname')) : ?>
        <div class="mb-4">
          <h2 class="text-4xl font-bold mb-0"><?php bbp_displayed_user_field('user_firstname'); ?> <?php bbp_get_displayed_user_field('user_lastname') ? bbp_displayed_user_field('user_lastname') : '' ?></h2>
        </div>
      <?php endif; ?>

      <p class="bbp-user-forum-role hidden"><?php printf(esc_html__('Registered: %s', 'bbpress'), bbp_get_time_since(bbp_get_displayed_user_field('user_registered'))); ?></p>
      <?php if (bbp_get_displayed_user_field('description')) : ?>
        <p class="bbp-user-description"><?php echo bbp_rel_nofollow(bbp_get_displayed_user_field('description')); ?></p>
      <?php endif; ?>
    </div>

    <div class="hidden">
      <h3><?php esc_html_e('Forums', 'bbpress'); ?></h3>

      <?php if (bbp_get_user_last_posted()) : ?>
        <p class="bbp-user-last-activity"><?php printf(esc_html__('Last Activity: %s',  'bbpress'), bbp_get_time_since(bbp_get_user_last_posted(), false, true)); ?></p>
      <?php endif; ?>
      <p class="bbp-user-topic-count"><?php printf(esc_html__('Topics Started: %s',  'bbpress'), bbp_get_user_topic_count()); ?></p>
      <p class="bbp-user-reply-count"><?php printf(esc_html__('Replies Created: %s', 'bbpress'), bbp_get_user_reply_count()); ?></p>
      <p class="bbp-user-forum-role"><?php printf(esc_html__('Forum Role: %s',      'bbpress'), bbp_get_user_display_role()); ?></p>
    </div>

  </div>
</div><!-- #bbp-author-topics-started -->

<?php do_action('bbp_template_after_user_profile');
