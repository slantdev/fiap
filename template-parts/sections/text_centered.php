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
  <div class="<?php echo $section_container_class ?>">
    <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
    <?php get_template_part('template-parts/components/buttons', '', array('field' => 'buttons', 'class' => 'mt-6 xl:mt-12')); ?>
  </div>
</section>