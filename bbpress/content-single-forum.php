<?php

/**
 * Single Forum Content Part
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
      <h3 class="text-2xl xl:text-4xl mb-2 lg:mb-0 max-w-6xl"><?php the_title() ?></h3>
      <?php bbp_forum_subscription_link(); ?>
    </div>
  </div>

  <?php /* do_action('bbp_template_before_single_forum'); */ ?>

  <?php if (post_password_required()) : ?>

    <?php bbp_get_template_part('form', 'protected'); ?>

  <?php else : ?>

    <?php /* bbp_single_forum_description(); */ ?>

    <?php if (bbp_has_forums()) : ?>

      <?php bbp_get_template_part('loop', 'forums'); ?>

    <?php endif; ?>

    <?php if (!bbp_is_forum_category() && bbp_has_topics()) : ?>

      <?php /* bbp_get_template_part('pagination', 'topics'); */ ?>

      <?php bbp_get_template_part('loop', 'topics'); ?>

      <?php bbp_get_template_part('pagination', 'topics'); ?>

      <?php bbp_get_template_part('form', 'topic'); ?>

    <?php elseif (!bbp_is_forum_category()) : ?>

      <?php bbp_get_template_part('feedback', 'no-topics'); ?>

      <?php bbp_get_template_part('form', 'topic'); ?>

    <?php endif; ?>

  <?php endif; ?>

  <?php do_action('bbp_template_after_single_forum'); ?>

</div>