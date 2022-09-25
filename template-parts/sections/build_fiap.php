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
      <div class="mt-12">
        <?php foreach ($build_fiap as $row) : ?>
          <div class="flex bg-fiap-light border-y -mt-px border-solid border-slate-300 transition duration-200 relative z-0 hover:bg-fiap-teal hover:text-white hover:shadow-lg hover:z-10">
            <div class="w-1/5 px-8 py-6"><?php echo $row['title'] ?></div>
            <div class="w-4/5 px-8 py-6"><?php echo $row['description'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php } ?>
  </div>
</section>