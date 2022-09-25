<?php
$field = $args['field'];
$class = $args['class'];

if ($field) {
  $features_list_cards = get_sub_field($field);
} else {
  $features_list_cards = get_sub_field('features_list_cards');
}

//preint_r($features_list_cards);
if ($features_list_cards) : ?>
  <div class="grid grid-cols-3 gap-10">
    <?php foreach ($features_list_cards as $card) : ?>
      <?php
      $icon_svg = $card['icon_svg'];
      $icon_color = $card['icon_color'];
      $card_title = $card['card_title'];
      $feature_list = $card['feature_list'];
      $icon_style = '';
      if ($icon_color) {
        $icon_style = 'color: ' . $icon_color;
      }
      ?>
      <div class="rounded-xl bg-white px-8 py-12 shadow-lg border border-neutral-200">
        <?php if ($icon_svg) : ?>
          <div style="<?php echo $icon_style ?>">
            <?php echo fiap_icon(array('icon' => $icon_svg, 'group' => 'brand', 'size' => '64', 'class' => 'mb-4')); ?>
          </div>
        <?php endif; ?>
        <?php if ($card_title) : ?>
          <h3 class="text-2xl"><?php echo $card_title ?></h3>
        <?php endif; ?>
        <?php if ($feature_list) : ?>
          <ul class="flex flex-col gap-y-4 mt-12 text-base">
            <?php foreach ($feature_list as $list) : ?>
              <li class="flex">
                <div style="<?php echo $icon_style ?>">
                  <?php echo fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'flex-none mr-4 mt-1')) ?>
                </div>
                <div><?php echo $list['feature'] ?></div>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>