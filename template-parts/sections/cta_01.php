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
    <div class="rounded-xl py-20 px-24 shadow-lg" style="<?php echo $cta_style ?>">
      <div class="flex items-center">
        <div class="w-3/4">
          <?php get_template_part('template-parts/components/heading', '', array('field' => 'cta_text_line_01', 'class' => '')); ?>
          <?php get_template_part('template-parts/components/heading', '', array('field' => 'cta_text_line_02', 'class' => '')); ?>
        </div>
        <div class="w-1/4">
          <?php get_template_part('template-parts/components/buttons', '', array('field' => 'buttons', 'class' => '')); ?>
        </div>
      </div>
    </div>
  </div>
</section>