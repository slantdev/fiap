<?php
/*
 * Single Page Header
 */
?>
<section>
  <div class="relative bg-cover bg-no-repeat min-h-[12rem] lg:h-[24rem] bg-fiap-teal">
    <div class="container mx-auto h-full relative py-10 lg:py-0 z-10">
      <div class="flex h-full items-center pt-6 md:pt-14">
        <div class="md:w-3/4 lg:w-3/5 text-white">
          <h2 class="text-4xl md:text-[45px] font-light leading-[1.1em] mb-4"><?php echo get_the_title() ?></h2>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="bg-fiap-light py-6">
    <div class="container mx-auto">
      <?php /* fiap_breadcrumb(); */ ?>
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs inline-block text-black text-base">', '</div>');
      }
      ?>
    </div>
  </div>
</section>