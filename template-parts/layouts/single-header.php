<?php
/*
 * Single Page Header
 */
?>
<section>
  <div class="relative bg-cover bg-no-repeat h-[24rem] bg-fiap-teal">
    <div class="container mx-auto h-full relative z-10">
      <div class="flex h-full items-center pt-6">
        <div class="w-3/5 text-white">
          <h2 class="text-[45px] font-semibold leading-[1.1em]"><?php echo get_the_title() ?></h2>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="bg-fiap-light py-6">
    <div class="container mx-auto">
      <?php fiap_breadcrumb(); ?>
    </div>
  </div>
</section>