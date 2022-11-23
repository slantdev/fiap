<?php

/**
 * Single User Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<div class="bbpress-wrapper max-w-screen-lg mx-auto">

  <?php do_action('bbp_template_notices'); ?>

  <?php do_action('bbp_template_before_user_wrapper'); ?>

  <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-10">

    <div class="w-full lg:w-1/4">
      <?php bbp_get_template_part('user', 'details'); ?>
    </div>

    <div id="bbp-user-body" class="w-full lg:w-3/4">
      <?php if (bbp_is_favorites()) bbp_get_template_part('user', 'favorites'); ?>
      <?php if (bbp_is_subscriptions()) bbp_get_template_part('user', 'subscriptions'); ?>
      <?php if (bbp_is_single_user_engagements()) bbp_get_template_part('user', 'engagements'); ?>
      <?php if (bbp_is_single_user_topics()) bbp_get_template_part('user', 'topics-created'); ?>
      <?php if (bbp_is_single_user_replies()) bbp_get_template_part('user', 'replies-created'); ?>
      <?php if (bbp_is_single_user_edit()) bbp_get_template_part('form', 'user-edit'); ?>
      <?php if (bbp_is_single_user_profile()) bbp_get_template_part('user', 'profile'); ?>
    </div>
  </div>

  <?php do_action('bbp_template_after_user_wrapper'); ?>

</div>