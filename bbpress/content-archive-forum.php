<?php

/**
 * Archive Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<div id="bbpress-forums" class="bbpress-wrapper">

  <div class="flex flex-wrap mb-4 lg:flex-nowrap lg:justify-between lg:items-end">
    <div class="w-full lg:w-auto">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs inline-block text-black text-sm mb-2">', '</div>');
      }
      ?>
      <?php /* bbp_breadcrumb(); */ ?>
      <h3 class="text-2xl xl:text-3xl mb-2">Community Forum</h3>
    </div>
    <div class="w-full lg:w-auto">
      <?php bbp_get_template_part('form', 'search'); ?>
    </div>
  </div>

  <?php /* bbp_forum_subscription_link(); */ ?>

  <?php do_action('bbp_template_before_forums_index'); ?>

  <?php if (bbp_has_forums()) : ?>

    <?php bbp_get_template_part('loop', 'forums'); ?>

  <?php else : ?>

    <?php bbp_get_template_part('feedback', 'no-forums'); ?>

  <?php endif; ?>

  <?php do_action('bbp_template_after_forums_index'); ?>

</div>