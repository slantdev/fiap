<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$journey_image = get_sub_field('journey_image');
$build_fiap = get_sub_field('build_fiap');
?>
<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="<?php echo $section_container_class ?>">
    <div class="max-w-prose">
      <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    </div>
    <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
    <?php if ($build_fiap) { ?>
      <div class="mt-12 build-fiap-table">
        <?php foreach ($build_fiap as $row) : ?>
          <div class="flex flex-wrap md:flex-nowrap">
            <div class="w-full md:w-1/3 lg:w-1/5 px-6 pt-6 pb-0 lg:px-8 md:py-6 font-bold"><?php echo $row['title'] ?></div>
            <div class="w-full md:w-2/3 lg:w-4/5 px-6 pt-4 pb-6 lg:px-8 md:py-6"><?php echo $row['description'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php } ?>
  </div>
</section>