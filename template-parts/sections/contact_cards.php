<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$card_contact = get_sub_field('card_contact');
$card_book_meeting = get_sub_field('card_book_meeting');
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="<?php echo $section_container_class ?>">
    <div>
      <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    </div>
    <?php if ($card_contact['title'] || $card_book_meeting['title']) { ?>
      <div class="flex flex-wrap gap-8 lg:flex-nowrap lg:gap-16">
        <?php if ($card_contact['title']) { ?>
          <div class="w-full lg:w-1/2">
            <div class="w-full h-full bg-white border border-solid border-fiap-teal p-6 md:py-12 md:px-16 shadow-md">
              <h4 class="text-fiap-teal font-semibold text-[30px] mb-8"><?php echo $card_contact['title'] ?></h4>
              <ul class="flex flex-col gap-y-4 text-xl">
                <?php if ($card_contact['phone']) { ?>
                  <li class="flex items-center">
                    <div>
                      <?php echo fiap_icon(array('icon' => 'phone', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
                    </div>
                    <div><a href="<?php echo $card_contact['phone']['url'] ?>" target="<?php echo $card_contact['phone']['target'] ?>"><?php echo $card_contact['phone']['title'] ?></a>
                    </div>
                  </li>
                <?php } ?>
                <?php if ($card_contact['email']) { ?>
                  <li class="flex items-center">
                    <div>
                      <?php echo fiap_icon(array('icon' => 'contact', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
                    </div>
                    <div><a href="<?php echo $card_contact['email']['url'] ?>" target="<?php echo $card_contact['email']['target'] ?>"><?php echo $card_contact['email']['title'] ?></a></div>
                  </li>
                <?php } ?>
                <?php if ($card_contact['address']) { ?>
                  <li class="flex items-center">
                    <div>
                      <?php echo fiap_icon(array('icon' => 'locate', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
                    </div>
                    <div><?php echo $card_contact['address'] ?></div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        <?php } ?>
        <?php if ($card_book_meeting['title']) { ?>
          <div class="w-full lg:w-1/2">
            <div class="w-full h-full bg-white border border-solid border-fiap-teal p-6 md:py-12 md:px-16 shadow-md">
              <h4 class="text-fiap-teal font-semibold text-[30px] mb-8"><?php echo $card_book_meeting['title'] ?></h4>
              <?php if ($card_book_meeting['description']) { ?>
                <div class="mb-4 text-xl"><?php echo $card_book_meeting['description'] ?></div>
              <?php } ?>
              <?php if ($card_book_meeting['button']) { ?>
                <a href="<?php echo $card_book_meeting['button']['url'] ?>" target="<?php echo $card_book_meeting['button']['target'] ?>" class="inline-block bg-fiap-teal text-white text-base font-semibold leading-none text-center rounded-lg py-4 px-8 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300"><?php echo $card_book_meeting['button']['title'] ?></a>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>