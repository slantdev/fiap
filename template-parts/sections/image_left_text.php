<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$big_image_column = get_sub_field('big_image_column');
$column_text_class = 'lg:w-2/3 xl:w-3/5';
$column_image_class = 'max-w-[360px] lg:max-w-none lg:w-1/3 xl:w-2/5';
if ($big_image_column) {
  $column_text_class = 'lg:w-1/3';
  $column_image_class = 'lg:w-2/3';
}
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative container mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-16 xl:gap-x-16 3xl:gap-x-24">
      <div class="w-full order-1 <?php echo $column_image_class ?>">
        <?php get_template_part('template-parts/components/image', '', array('aspect_w' => '4', 'aspect_h' => '3', 'class' => 'h-full w-full object-center object-cover')); ?>
      </div>
      <div class="w-full order-2 <?php echo $column_text_class ?>">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'max-w-none xl:prose-lg')); ?>
        <?php get_template_part('template-parts/components/buttons', '', array('field' => 'buttons', 'class' => 'mt-6 xl:mt-12')); ?>
      </div>
    </div>
  </div>
</section>