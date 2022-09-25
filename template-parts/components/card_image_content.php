<?php
$field = $args['field'];
$class = $args['class'];

if ($field) {
  $cards_repeater = get_sub_field($field);
} else {
  $cards_repeater = get_sub_field('cards_repeater');
}

if ($cards_repeater) : ?>
  <div class="mt-12 grid grid-cols-2 gap-32">
    <?php foreach ($cards_repeater as $card) : ?>
      <?php
      $card_image = $card['card_image_content']['card_image'];
      $card_title = $card['card_image_content']['card_title'];
      $card_description = $card['card_image_content']['card_description'];
      $card_check_list = $card['card_image_content']['card_check_list'];
      ?>
      <div class="card-image-content h-full rounded-xl bg-white relative overflow-hidden shadow-md">
        <?php
        if ($card_image) {
          echo '<div class="aspect-[16/11]"><img class="w-full h-full object-cover" src="' . $card_image['url'] . '" alt="' . $card_image['alt'] . '"></div>';
        }
        ?>
        <?php if ($card_title || $card_description || $card_check_list) : ?>
          <div class="px-8 py-12">
            <?php
            if ($card_title) {
              echo '<h4 class="text-[28px] leading-tight font-semibold mb-8">' . $card_title . '</h4>';
            }
            if ($card_description) {
              echo '<div class="prose">' . $card_description . '</div>';
            }
            ?>
            <?php if ($card_check_list) : ?>
              <ul class="flex flex-col gap-y-4 mt-8 text-base">
                <?php foreach ($card_check_list as $list) : ?>
                  <li class="flex">
                    <?php echo fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
                    <div><?php echo $list['list'] ?></div>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>