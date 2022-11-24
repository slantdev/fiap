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
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-20">
      <div class="w-full lg:w-1/2">
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
      </div>
      <div class="w-full lg:w-1/2">
        <?php
        $form_shortcode = get_sub_field('form_shortcode');
        if ($form_shortcode) {
          echo do_shortcode($form_shortcode);
        }
        ?>
        <div class="flex flex-col gap-y-4">
          <div>
            <label class="block mb-1" for="">Name <span class="text-red-500">*</span></label>
            <input type="text" class="w-full h-[55px] rounded-md shadow-inner py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200">
          </div>
          <div>
            <label class="block mb-1" for="">Email <span class="text-red-500">*</span></label>
            <input type="email" class="w-full h-[55px] rounded-md shadow-inner py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200">
          </div>
          <div>
            <label class="block mb-1" for="">Message <span class="text-red-500">*</span></label>
            <textarea class="w-full rounded-md shadow-inner py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200" name="" id="" cols="30" rows="3"></textarea>
          </div>
          <div>
            <button type="button" class="bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>