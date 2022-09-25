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
  <div class="<?php echo $section_container_class . ' ' . $section_padding_bottom ?>">
    <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    <?php
    $help_links_repeater = get_sub_field('help_links_repeater');
    if ($help_links_repeater) :
    ?>
      <div class="help-links grid grid-cols-3 divide-x divide-neutral-300">
        <?php foreach ($help_links_repeater as $link) : ?>
          <?php
          $icon = $link['icon'];
          $icon_color = $link['icon_color'];
          $title = $link['title'];
          $description = $link['description'];
          $icon_style = '';
          if ($icon_color) {
            $icon_style = 'color: ' . $icon_color;
          }
          ?>
          <div class="flex gap-x-8 pr-10">
            <?php if ($icon) : ?>
              <div class="flex-none" style="<?php echo $icon_style ?>">
                <?php echo fiap_icon(array('icon' => $icon, 'group' => 'brand', 'size' => '72', 'class' => '')); ?>
              </div>
            <?php endif; ?>
            <?php if ($title || $description) : ?>
              <div>
                <?php if ($title) : ?>
                  <h4 class="help-links--title font-semibold text-2xl mb-2"><?php echo $title ?></h4>
                <?php endif; ?>
                <?php if ($description) : ?>
                  <div class="help-links--description text-xl"><?php echo $description ?></div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>