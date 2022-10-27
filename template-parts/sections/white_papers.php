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
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-24">
      <div class="w-full lg:w-2/3">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
      </div>
    </div>
    <?php if (get_sub_field('show_search_bar')) { ?>
      <div class="flex flex-wrap md:flex-nowrap gap-x-4 gap-y-2 items-center mt-4 mb-8 lg:mt-8 lg:mb-8">
        <input id="whitepaper-search" name="whitepaper-search" class="w-full h-[55px] rounded-md shadow-inner py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200" type="text" placeholder="Search query">
        <span class="hidden lg:inline-block flex-none">In</span>
        <select id="whitepaper-filter" name="whitepaper-filter" class="flex-none w-full md:w-52 h-[55px] rounded-md py-3 px-6 bg-neutral-100 border border-neutral-200 focus:ring-0 focus:outline-none focus:border-neutral-200" name="" id="">
          <option value="all" selected>Filter</option>
          <?php
          $taxonomies = get_terms(array(
            'taxonomy' => 'white_paper_category',
            'hide_empty' => false,
            'orderby' => 'term_order'
          ));
          if (!empty($taxonomies)) :
            foreach ($taxonomies as $category) {
              $output .= '<option value="' . esc_attr($category->term_id) . '">' . esc_attr($category->name) . '</option>';
            }
            echo $output;
          endif;
          ?>
        </select>
        <button id="whitepaper-search-button" type="button" class="flex-none bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-4 border border-transparent shadow-md hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300 w-48">
          <div class="spinner-border animate-spin inline-block w-5 h-5 border-4 text-white rounded-full opacity-0 -ml-6" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <span class="inline-block ml-1">Search</span>
        </button>
      </div>
    <?php } ?>
    <div class="whitepapers-grid relative">
      <?php
      $args = array(
        'post_type' => 'white_paper',
        'posts_per_page' => -1,
        'orderby' => 'term_order'
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) {
        echo '<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8 2xl:gap-10">';
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
      <div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>
    </div>
  </div>
</section>