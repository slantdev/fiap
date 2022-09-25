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
    <div>
      <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
    </div>
    <div class="flex gap-x-16">
      <div class="w-1/2">
        <div class="w-full h-full bg-white border border-solid border-fiap-teal py-12 px-16 shadow-md">
          <h4 class="text-fiap-teal font-semibold text-[30px] mb-8">Victoria</h4>
          <ul class="flex flex-col gap-y-4 text-xl">
            <li class="flex items-center">
              <div>
                <?php echo fiap_icon(array('icon' => 'phone', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
              </div>
              <div>+61 3 9270 9700</div>
            </li>
            <li class="flex items-center">
              <div>
                <?php echo fiap_icon(array('icon' => 'contact', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
              </div>
              <div>fiap@goodshep.org.au </div>
            </li>
            <li class="flex items-center">
              <div>
                <?php echo fiap_icon(array('icon' => 'locate', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
              </div>
              <div>L1, 485 La Trobe St, Melbourne VIC 3000</div>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-1/2">
        <div class="w-full h-full bg-white border border-solid border-fiap-teal py-12 px-16 shadow-md">
          <h4 class="text-fiap-teal font-semibold text-[30px] mb-8">Book a meeting with us:</h4>
          <ul class="flex flex-col gap-y-4">
            <li class="flex">
              <div>
                <?php echo fiap_icon(array('icon' => 'contact', 'group' => 'brand', 'size' => '32', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) ?>
              </div>
              <div>
                <div class="mb-4 text-xl">Click on this link to select a service and fix a meeting with us on a date and time that suits you best.</div>
                <button type="button" class="bg-fiap-teal text-white text-base font-semibold leading-none text-center rounded-lg py-4 px-8 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Book a meeting</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>