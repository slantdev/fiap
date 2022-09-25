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
$cta_image = get_sub_field('cta_image');
$cta_heading = get_sub_field('cta_heading');
$cta_description = get_sub_field('cta_description');
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative container mx-auto <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">
    <div class="rounded-xl overflow-hidden shadow-lg" style="<?php echo $cta_style ?>">
      <div class="flex">
        <?php if ($cta_image) : ?>
          <div class="w-2/5">
            <img class="w-full h-full object-cover" src="<?php echo $cta_image['url'] ?>" alt="<?php echo $cta_image['alt'] ?>">
          </div>
        <?php endif; ?>

        <?php if ($cta_heading || $cta_description) : ?>
          <div class="py-20 px-24">
            <?php get_template_part('template-parts/components/heading', '', array('field' => 'cta_heading', 'class' => '')); ?>
            <?php get_template_part('template-parts/components/description', '', array('field' => 'cta_description', 'class' => '')); ?>
            <?php get_template_part('template-parts/components/buttons', '', array('field' => 'buttons', 'class' => '')); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>