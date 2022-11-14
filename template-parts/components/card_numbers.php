<?php
$field = $args['field'];
$class = $args['class'];

if ($field) {
  $cards_number_repeater = get_sub_field($field);
} else {
  $cards_number_repeater = get_sub_field('cards_number_repeater');
}

if ($cards_number_repeater) : ?>
  <div class="mt-4 grid grid-cols-1 gap-8 md:gap-6 md:grid-cols-2 lg:mt-12 lg:grid-cols-3 xl:gap-10">
    <?php foreach ($cards_number_repeater as $i => $card) : ?>
      <div class="rounded-xl bg-white px-8 pt-8 pb-8 shadow-lg border border-neutral-200">
        <?php
        if ($card['card_image']) {
          echo '<div class="h-[88px] w-[88px] rounded-md overflow-hidden mb-6">';
          echo '<img class="rounded-md h-full w-full object-center object-cover" src="' . $card['card_image']['url'] . '" />';
          echo '</div>';
        }
        ?>
        <div class="text-neutral-500">
          <?php echo $card['card_content'] ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>