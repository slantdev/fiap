<?php
$field = $args['field'];
$class = $args['class'];

if ($field) {
  $images_card = get_sub_field($field);
} else {
  $images_card = get_sub_field('images_card');
}
$show_caption = get_sub_field('show_caption');

?>

<?php if ($images_card) { ?>
  <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-4 lg:gap-8 <?php echo $class ?>">
    <?php foreach ($images_card as $image) : ?>
      <div class="bg-white shadow-lg rounded-lg pt-8 pb-4 px-8 flex flex-col items-center justify-center">
        <img class="mb-4" src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
        <?php
        if ($show_caption) {
          echo '<div class="text-center mt-2 text-gray-500">' . $image['caption'] . '</div>';
        }
        ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php } ?>