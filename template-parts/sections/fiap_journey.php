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
$journey_cards = get_sub_field('journey_cards');
?>
<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="<?php echo $section_container_class ?>">
    <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
    <?php if ($journey_image) { ?>
      <div class="mb-12 text-center">
        <img class="mx-auto" src="<?php echo $journey_image['url'] ?>" alt="<?php echo $journey_image['alt'] ?>">
      </div>
    <?php } ?>
    <?php if ($journey_cards) { ?>
      <div class="grid grid-cols-3 gap-x-10">
        <?php foreach ($journey_cards as $card) : ?>
          <div class="px-8 pt-12 pb-8 rounded-xl bg-white xl:px-12 xl:pt-16 xl:pb-12">
            <h4 class="mb-4"><?php echo $card['card_title'] ?></h4>
            <div class="prose">
              <?php echo $card['card_description'] ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php } ?>
  </div>
</section>