<?php

/**
 * Archive Topic Content Part
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
      <h3 class="text-2xl xl:text-3xl mb-2">Topics</h3>
    </div>

    <?php if (bbp_allow_search()) : ?>

      <div class="bbp-search-form w-full lg:w-auto">

        <?php bbp_get_template_part('form', 'search'); ?>

      </div>

    <?php endif; ?>

  </div>


  <?php do_action('bbp_template_before_topic_tag_description'); ?>

  <?php if (bbp_is_topic_tag()) : ?>

    <?php bbp_topic_tag_description(array('before' => '<div class="bbp-template-notice info"><ul><li>', 'after' => '</li></ul></div>')); ?>

  <?php endif; ?>

  <?php do_action('bbp_template_after_topic_tag_description'); ?>

  <?php do_action('bbp_template_before_topics_index'); ?>

  <?php if (bbp_has_topics()) : ?>

    <?php /* bbp_get_template_part('pagination', 'topics'); */ ?>

    <?php bbp_get_template_part('loop', 'topics'); ?>

    <?php bbp_get_template_part('pagination', 'topics'); ?>

  <?php else : ?>

    <?php bbp_get_template_part('feedback',   'no-topics'); ?>

  <?php endif; ?>

  <?php do_action('bbp_template_after_topics_index'); ?>

</div>