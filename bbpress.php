<?php

get_header();
?>

<div class="relative bg-slate-50 py-12 xl:py-24">

  <div class="container mx-auto">
    <?php if (have_posts()) : ?>
      <?php
      while (have_posts()) :
        the_post();
      ?>
        <div id="post-<?php the_ID(); ?>" class="mx-auto">
          <div class="max-w-screen-xl mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

</div>

<?php

get_footer();
