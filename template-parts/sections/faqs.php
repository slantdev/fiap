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

    echo '<div class="max-w-screen-md mx-auto mt-10"><div class="faq-container">';

    $args = array(
      'post_type' => 'faq',
      'posts_per_page' => -1
    );

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
      echo '</div></div>';
    }
    wp_reset_postdata();
    echo '</div>';
    ?>

  </div>
</section>