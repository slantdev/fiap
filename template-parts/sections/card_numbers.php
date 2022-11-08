<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative container mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="w-full flex flex-wrap lg:flex-nowrap lg:gap-x-14">
      <div class="w-full order-2 lg:order-1 lg:w-2/3">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => 'w-full')); ?>
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'max-w-none xl:prose-lg')); ?>
      </div>
      <div class="w-full order-1 lg:order-2 lg:w-1/3 max-w-[360px] lg:max-w-none">
        <?php get_template_part('template-parts/components/image', '', array('aspect_w' => '1', 'aspect_h' => '1', 'class' => 'h-full w-full object-center object-cover')); ?>
      </div>
    </div>
    <?php get_template_part('template-parts/components/card_numbers', '', array('field' => 'cards_number_repeater', 'class' => '')); ?>
  </div>
</section>