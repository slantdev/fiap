<?php
$field = $args['field'];
$class = $args['class'];

if ($field) {
  $cards_number_repeater = get_sub_field($field);
} else {
  $cards_number_repeater = get_sub_field('cards_number_repeater');
}

if ($cards_number_repeater) : ?>
  <div class="mt-4 grid grid-cols-1 gap-8 md:gap-6 md:grid-cols-2 lg:mt-12 lg:grid-cols-3 xl:gap-16">
    <?php foreach ($cards_number_repeater as $i => $card) : ?>
      <div class="rounded-xl bg-white px-8 pt-8 pb-14 shadow-lg border border-neutral-200">
        <div class="rounded-full bg-fiap-darkblue text-white w-14 h-14 flex font-semibold items-center justify-center mb-8"><?php echo $i + 1 ?></div>
        <div class="text-neutral-500">
          <?php echo $card['card_content'] ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>