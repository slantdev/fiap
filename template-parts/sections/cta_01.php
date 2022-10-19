<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$cta_bg_color = get_sub_field('cta_bg_color');
$cta_style = '';
if ($cta_bg_color) {
  $cta_style .= 'background-color: ' . $cta_bg_color . ';';
}
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative container mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="rounded-xl pt-8 pb-2 px-8 md:py-10 md:px-10 lg:py-20 lg:px-24 shadow-lg" style="<?php echo $cta_style ?>">
      <div class="flex flex-wrap md:flex-nowrap items-center">
        <div class="w-full md:w-3/4">
          <?php get_template_part('template-parts/components/heading', '', array('field' => 'cta_text_line_01', 'class' => '')); ?>
          <?php get_template_part('template-parts/components/heading', '', array('field' => 'cta_text_line_02', 'class' => '')); ?>
        </div>
        <div class="w-full md:w-1/4 mt-6 md:mt-0">
          <?php get_template_part('template-parts/components/buttons', '', array('field' => 'buttons', 'class' => '')); ?>
        </div>
      </div>
    </div>
  </div>
</section>