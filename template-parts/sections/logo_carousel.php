<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
//get_template_part('template-parts/layouts/', 'section_settings');
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
?>

<section id="<?php echo $section_id ?>" class="overflow-hidden" style="<?php echo $section_style ?>">
  <div class="relative container mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
    <?php get_template_part('template-parts/components/logo_carousel', '', array('field' => 'image_carousel', 'class' => 'mt-12')); ?>
  </div>
</section>