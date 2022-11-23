<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<div id="bbpress-forums" class="bbpress-wrapper">

  <div>
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<div class="breadcrumbs inline-block text-black text-sm mb-4">', '</div>');
    }
    ?>
    <?php /* bbp_breadcrumb(); */ ?>
    <div class="lg:flex lg:items-center lg:gap-x-3 lg:mb-8">
      <h3 class="text-2xl xl:text-4xl mb-2 lg:mb-0  max-w-6xl"><?php the_title() ?></h3>
      <div>
        <?php bbp_topic_subscription_link(array('before' => '')); ?>
        <?php bbp_topic_favorite_link(); ?>
      </div>
    </div>
  </div>

  <?php do_action('bbp_template_before_single_topic'); ?>

  <?php if (post_password_required()) : ?>

    <?php bbp_get_template_part('form', 'protected'); ?>

  <?php else : ?>

    <?php bbp_topic_tag_list(); ?>

    <?php bbp_single_topic_description(); ?>

    <?php if (bbp_show_lead_topic()) : ?>

      <?php bbp_get_template_part('content', 'single-topic-lead'); ?>

    <?php endif; ?>

    <?php if (bbp_has_replies()) : ?>

      <?php /* bbp_get_template_part('pagination', 'replies'); */ ?>

      <?php bbp_get_template_part('loop', 'replies'); ?>

      <?php bbp_get_template_part('pagination', 'replies'); ?>

    <?php endif; ?>

    <?php bbp_get_template_part('form', 'reply'); ?>

  <?php endif; ?>

  <?php bbp_get_template_part('alert', 'topic-lock'); ?>

  <?php do_action('bbp_template_after_single_topic'); ?>

</div>