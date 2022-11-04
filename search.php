<?php
/*
 * Search
 */

get_header();

$s = get_search_query();
$args = array(
  's' => $s
);

?>

<section>
  <div class="relative bg-cover bg-no-repeat bg-fiap-teal">
    <div class="container mx-auto h-full relative z-10">
      <div class="flex h-full items-center py-8 md:py-14 xl:py-20">
        <div class="md:w-3/4 lg:w-3/5 text-white">
          <h1 class="text-4xl md:text-5xl lg:text-[54px] font-light tracking-tight leading-[1.1em] mb-0">
            Search Results : <?php echo $s ?>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-fiap-light py-6">
    <div class="container mx-auto">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs inline-block text-black text-base">', '</div>');
      }
      ?>
    </div>
  </div>
</section>

<?php
// The Query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
  <div class="bg-slate-50">
    <div class="container mx-auto max-w-4xl relative py-16 lg:py-24">
      <ul class="search-results">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="mb-4 lg:mb-8">
            <a href="<?php the_permalink(); ?>" class="block bg-white shadow-md border border-gray-100 rounded-lg transition duration-300 hover:shadow-xl">
              <div class="flex flex-wrap md:flex-nowrap">
                <!-- <div class="w-full rounded-t-lg aspect-w-16 aspect-h-9 md:hidden">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('medium', array('class' => 'object-cover h-full w-full rounded-t-lg md:hidden')); ?>
                <?php } ?>
              </div>
              <div class="hidden md:block w-1/4 rounded-l-lg">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('medium', array('class' => 'object-cover h-full w-full rounded-l-lg')); ?>
                <?php } ?>
              </div> -->
                <div class="w-full p-4 lg:p-8">
                  <h3 class="font-bold mb-2 text-xl lg:text-2xl"><?php the_title(); ?></h3>
                  <div class="text-sm"><?php the_excerpt() ?></div>
                </div>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>

    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <div class="container mx-auto max-w-4xl relative py-16 lg:py-24">
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    </div>
  <?php endif; ?>

  </div>
  <?php
  get_footer();
