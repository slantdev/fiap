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
    <div class="flex gap-x-24">
      <div class="w-2/3">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
      </div>
    </div>
    <?php if (get_sub_field('show_search_bar')) { ?>
      <div class="flex gap-x-4 items-center mt-8">
        <input class="w-full h-[55px] rounded-md shadow-inner py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200" type="text" placeholder="Search query">
        <span class="inline-block flex-none">In</span>
        <select class="flex-none w-52 h-[55px] rounded-md shadow-md py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200" name="" id="">
          <option value="">Filter</option>
          <option value="">Option 1</option>
          <option value="">Option 2</option>
          <option value="">Option 3</option>
        </select>
        <button type="button" class="flex-none bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent shadow-md hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Search</button>
      </div>
    <?php } ?>
    <?php
    $args = array(
      'post_type' => 'white_paper',
      'posts_per_page' => -1,
      'orderby' => 'term_order'
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
      echo '<div class="grid grid-cols-3 gap-10 mt-16">';
      while ($the_query->have_posts()) {
        $the_query->the_post();
        $terms = get_the_terms(get_the_ID(), 'white_paper_category');
        $terms_string = join(',', wp_list_pluck($terms, 'name'));
        $terms_array = explode(',', $terms_string);
        $atts = array(
          'title' => get_the_title(),
          'date' => get_the_date('j M Y'),
          'link' => get_the_permalink(),
          'terms' => $terms_array,
        );
        echo card_papers($atts);
      }
      echo '</div>';
    }
    wp_reset_postdata();
    ?>
  </div>
</section>