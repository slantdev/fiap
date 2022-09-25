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
    <?php
    $datatable = get_sub_field('wpdatatables_shortcode');
    if ($datatable) {
      echo do_shortcode($datatable);
    }
    ?>
  </div>
</section>