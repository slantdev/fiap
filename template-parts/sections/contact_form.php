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
    <div>
      <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    </div>
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-20">
      <div class="w-full lg:w-1/2">
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
      </div>
      <div class="w-full lg:w-1/2">
        <?php
        $form_shortcode = get_sub_field('form_shortcode');
        if ($form_shortcode) {
          echo do_shortcode($form_shortcode);
        }
        ?>
      </div>
    </div>
  </div>
</section>