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
    <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => 'text-center')); ?>
    <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'xl:prose-lg')); ?>
    <?php
    echo '<div class="max-w-screen-md mx-auto mt-10">';

    $faq_settings = get_sub_field('faq_settings');
    $show_faq_filter = $faq_settings['show_faq_filter'];
    $limit_by_faq_category = $faq_settings['limit_by_faq_category'];


    if ($show_faq_filter) {
    ?>
      <div class="flex justify-center relative mb-6 lg:mb-8">
        <div class="faq-dropdown dropdown relative">
          <button class="dropdown-toggle px-10 py-3 lg:px-8 lg:py-4 bg-white border border-solid border-gray-300 font-medium text-base leading-tight rounded-full focus:outline-none focus:ring-0 transition duration-150 ease-in-out flex items-center justify-between whitespace-nowrap xl:min-w-[360px]" type="button" id="dropdownSelect" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="dropdown-label">Filter</span>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-3 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
            </svg>
          </button>
          <ul class="dropdown-menu max-h-96 overflow-y-auto min-w-max w-full absolute bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownSelect">
            <?php
            if (!$limit_by_faq_category) {
              $limit_by_faq_category = 'all';
            }
            $taxonomies = get_terms(array(
              'taxonomy' => 'faq_category',
              'hide_empty' => true,
              'include' => $limit_by_faq_category
            ));
            if (!empty($taxonomies)) :
              $output = '';
              foreach ($taxonomies as $category) {
                $output .= '<li><a class="faq-dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#!" data-id="' . esc_attr($category->term_id) . '">' . esc_attr($category->name) . '</a></li>';
              }
              echo $output;
            endif;
            ?>
            <hr class="h-0 my-2 border border-solid border-t-0 border-gray-700 opacity-10" />
            <li>
              <a href="#!" data-id="all" class="faq-dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">Show All</a>
            </li>
          </ul>
          <div class="filter-faq-loader absolute -right-8 top-1/2 -translate-y-1/2">
            <div class="flex items-center justify-center">
              <div class="spinner-border animate-spin inline-block w-6 h-6 border-4 text-fiap-teal rounded-full opacity-0" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>

      </div>
      <?php
    }

    $limit_by_faq_category = $faq_settings['limit_by_faq_category'];
    if (is_user_logged_in()) {
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
      );
    } else {
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'member_only',
            'field'    => 'slug',
            'terms'    => 'member-only',
            'operator' => 'NOT IN',
          ),
        ),
      );
    }
    if ($limit_by_faq_category) {
      if (is_user_logged_in()) {
        $args = array(
          'post_type' => 'faq',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'tax_query' => array(
            array(
              'taxonomy' => 'faq_category',
              'field'    => 'term_id',
              'terms'    => $limit_by_faq_category,
            ),
          ),
        );
      } else {
        $args = array(
          'post_type' => 'faq',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'tax_query' => array(
            'relation' => 'AND',
            array(
              'taxonomy' => 'member_only',
              'field'    => 'slug',
              'terms'    => 'member-only',
              'operator' => 'NOT IN',
            ),
            array(
              'taxonomy' => 'faq_category',
              'field'    => 'term_id',
              'terms'    => $limit_by_faq_category,
            ),
          ),
        );
      }
    }

    echo '<div class="faq-container relative">';

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) {

      $uniqueid = uniqid('accordion-');
      echo '<div class="accordion" id="' . $uniqueid . '">';
      $row_index = 0;
      $state_class = '';

      while ($the_query->have_posts()) {
        $the_query->the_post();

        $row_index++;
        if ($row_index == 1) {
          $state_class = '';
        } else {
          $state_class = '';
        }
      ?>
        <div class="accordion-item bg-gray-100 border border-gray-300 mb-4 rounded-lg lg:mb-6">
          <h2 class="accordion-header mb-0" id="heading-<?php echo $row_index ?>">
            <button class="accordion-button relative flex justify-between w-full py-4 px-4 text-lg font-semibold text-gray-500 leading-tight text-left bg-white border-0 focus:outline-none rounded-lg md:text-xl md:py-5 md:pl-6 md:pr-4 lg:text-xl lg:py-5 lg:pl-8 lg:pr-6 collapsed <?php echo $state_class ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $row_index ?>" aria-expanded="true" aria-controls="collapse-<?php echo $row_index ?>">
              <?php echo get_the_title(); ?>
              <svg class="collapsed-arrow text-fiap-teal flex-none mt-0.5 ml-4 w-5 h-5 lg:w-7 lg:h-7 xl:ml-8" xmlns="http://www.w3.org/2000/svg" width="27.455" height="27.456" viewBox="0 0 27.455 27.456">
                <g id="Group_2008" data-name="Group 2008" transform="translate(13.728 1) rotate(45)">
                  <line id="Line_9" data-name="Line 9" x1="18" y2="18" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="2" />
                  <line id="Line_10" data-name="Line 10" x2="18" y2="18" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="2" />
                </g>
              </svg>
              <svg class="not-collapsed-arrow text-fiap-teal flex-none mt-0.5 ml-4 w-5 h-5 lg:w-7 lg:h-7 xl:ml-8" xmlns="http://www.w3.org/2000/svg" width="27.455" height="27.456" viewBox="0 0 27.455 27.456">
                <g id="Group_2009" data-name="Group 2009" transform="translate(13.728 1) rotate(45)">
                  <line id="Line_9" data-name="Line 9" x1="18" y2="18" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="2" />
                </g>
              </svg>
            </button>
          </h2>
          <div id="collapse-<?php echo $row_index ?>" class="accordion-collapse collapse <?php echo $state_class ?>" aria-labelledby="heading-<?php echo $row_index ?>" data-bs-parent="#<?php echo $uniqueid ?>">
            <div class="accordion-body py-4 px-5 lg:px-8 lg:py-8">
              <div class="prose">
                <?php echo get_the_content(); ?>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
      echo '</div>';
    }

    echo '<div class="blocker absolute inset-0 bg-white bg-opacity-40" style="display: none;"></div>';

    echo '</div>';

    wp_reset_postdata();
    echo '</div>';
    ?>

  </div>
</section>