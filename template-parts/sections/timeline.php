<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$swiper_id = 'swiper_' . uniqid();
$section_container_class = $section_padding_top . ' ' . $section_padding_bottom  . ' ';
//$section_container_class .= 'relative container mx-auto ';
?>
<section id="<?php echo $section_id ?>" class="<?php echo $section_container_class ?>" style="<?php echo $section_style ?>">
  <div class="container mx-auto relative">
    <div class="w-full flex flex-wrap lg:flex-nowrap">
      <div class="w-full lg:w-1/3">
        <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => '')); ?>
      </div>
      <div class="w-full lg:w-2/3">
        <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => '')); ?>
      </div>
    </div>
  </div>
  <?php
  if (have_rows('timeline')) :
  ?>
    <?php if (is_admin()) { ?>
      <div class="pt-14 pl-8 relative">
        <div class="flex overflow-hidden gap-x-6">
          <?php
          while (have_rows('timeline')) : the_row();
            echo '<div class="max-w-md h-[432px] flex-none">';
            echo '<div class="w-full h-full bg-white rounded-lg shadow-md py-10 pl-10 pr-6 flex flex-col gap-y-6">';
            if (get_sub_field('title')) {
              echo '<h4 class="font-semibold text-xl leading-snug">' . get_sub_field('title') . '</h4>';
            }
            if (get_sub_field('thumbnail')) {
              echo '<img class="rounded-full h-20 w-20 object-cover" src="' . get_sub_field('thumbnail')['url'] . '" />';
            }
            if (get_sub_field('description')) {
              echo '<div class="prose max-w-none lg:prose-lg overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-50 scrollbar-thumb-rounded-full scrollbar-track-rounded-full pr-8">
            ' . get_sub_field('description') . '
            </div>';
            }
            echo '</div>';
            echo '</div>';
          endwhile;
          ?>
        </div>
      </div>
    <?php } else { ?>
      <div class="pt-0 px-4 relative md:pr-0 lg:pt-14 lg:pl-24">
        <div class="<?php echo $swiper_id ?>_button_prev text-white absolute top-1/2 left-0 bg-black bg-opacity-40 transition duration-300 hover:bg-opacity-75 z-10 w-12 h-16 -translate-y-3/4 justify-center items-center hidden lg:flex">
          <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="10.553" height="18.277" viewBox="0 0 10.553 18.277">
            <path d="M102.474,67.483l8.432,8.432-8.432,8.431" transform="translate(-101.766 -66.776)" fill="none" stroke="#fff" stroke-width="2" />
          </svg>
        </div>
        <div class="<?php echo $swiper_id ?>_button_next text-white absolute top-1/2 right-0 bg-black bg-opacity-40 transition duration-300 hover:bg-opacity-75 z-10 w-12 h-16 -translate-y-3/4 justify-center items-center hidden lg:flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="10.553" height="18.277" viewBox="0 0 10.553 18.277">
            <path d="M102.474,67.483l8.432,8.432-8.432,8.431" transform="translate(-101.766 -66.776)" fill="none" stroke="#fff" stroke-width="2" />
          </svg>
        </div>

        <div id="<?php echo $swiper_id ?>" class="swiper timelineSwiper pb-14 lg:pb-24">
          <div class="swiper-wrapper">
            <?php
            while (have_rows('timeline')) : the_row();
              echo '<div class="swiper-slide max-w-md h-[432px]">';
              echo '<div class="w-full h-full bg-white rounded-lg shadow-md py-10 pl-10 pr-6 flex flex-col gap-y-6">';
              if (get_sub_field('title')) {
                echo '<h4 class="font-semibold text-xl leading-snug">' . get_sub_field('title') . '</h4>';
              }
              if (get_sub_field('thumbnail')) {
                echo '<img class="rounded-full h-20 w-20 object-cover" src="' . get_sub_field('thumbnail')['url'] . '" />';
              }
              if (get_sub_field('description')) {
                echo '<div class="prose max-w-none lg:prose-lg overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-50 scrollbar-thumb-rounded-full scrollbar-track-rounded-full pr-8">
              ' . get_sub_field('description') . '
              </div>';
              }
              echo '</div>';
              echo '</div>';
            endwhile;
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <script>
          var <?php echo $swiper_id ?>_swiper = new Swiper("#<?php echo $swiper_id ?>", {
            slidesPerView: "auto",
            spaceBetween: 40,
            watchOverflow: true,
            centerInsufficientSlides: true,
            navigation: {
              nextEl: ".<?php echo $swiper_id ?>_button_next",
              prevEl: ".<?php echo $swiper_id ?>_button_prev",
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });
        </script>
        <style>
          .timelineSwiper.swiper-horizontal>.swiper-pagination-bullets,
          .timelineSwiper .swiper-pagination-bullets.swiper-pagination-horizontal {
            bottom: 0px;
            text-align: left;
          }

          .timelineSwiper .swiper-pagination-bullet {
            width: 20px;
            height: 10px;
            border-radius: 50px;
            background-color: white;
            transition: all 500ms ease-in;
          }

          .timelineSwiper .swiper-pagination-bullet-active {
            width: 60px;
            background-color: #074c6c;
          }
        </style>
      </div>
    <?php } ?>
  <?php endif; ?>
</section>