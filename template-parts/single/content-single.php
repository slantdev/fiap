<article id="post-<?php the_ID(); ?>" <?php post_class('py-28'); ?>>
  <div class="flex gap-x-36">
    <div class="w-1/3 lg:order-2">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', array('class' => 'rounded-xl aspect-[4/5] object-cover')); ?>
      <?php endif; ?>
    </div>
    <div class="w-2/3 lg:order-1">
      <header class="entry-header mb-16">
        <?php if (get_post_type() == 'news') { ?>
          <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-lg text-gray-600 mb-3 inline-block"><?php echo get_the_date(); ?></time>
        <?php } ?>
        <?php the_title(sprintf('<h1 class="font-[34px] leading-tight font-semibold"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
      </header>

      <div class="prose max-w-none xl:prose-lg">
        <?php the_content(); ?>
        <?php get_template_part('template-parts/single/download-pdf'); ?>
      </div>
    </div>
  </div>
</article>