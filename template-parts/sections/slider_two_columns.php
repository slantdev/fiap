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

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>" class="hero-slider relative">

  <?php
  $slider_repeater = get_sub_field('slider_repeater');
  if ($slider_repeater) :
    if (is_admin()) { ?>
      <div class="relative overflow-hidden">
        <div class="h-full w-full flex bg-fiap-teal">
          <div class="w-full relative bg-fiap-teal h-[620px] xl:h-[700px] overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1/3 md:h-2/5 lg:inset-0 lg:h-full">
              <div class="flex h-full">
                <div class="w-full lg:w-1/2 ml-auto"><img class="object-cover h-full w-full" src="<?php echo $slider_repeater[0]['image']['url'] ?>"></div>
              </div>
            </div>
            <div class="container mx-auto py-8 relative top-1/3 md:top-[40%] lg:py-32 lg:top-0">
              <div class="flex flex-wrap lg:flex-nowrap items-center h-full">
                <div class="w-full md:max-w-xl mx-auto lg:max-w-none lg:mx-0 lg:w-1/2 lg:pr-16 lg:pt-6 text-white relative z-20">
                  <?php if ($slider_repeater[0]['title']) { ?>
                    <h3 class="text-[1.75rem] md:text-3xl xl:text-4xl 2xl:text-5xl font-light text-white leading-[1.2em] xl:leading-[1.1em] mb-4 xl:mb-6"><?php echo $slider_repeater[0]['title'] ?></h3>
                  <?php } ?>
                  <?php if ($slider_repeater[0]['description']) { ?>
                    <div class="prose text-sm max-w-none text-white md:text-base xl:text-lg mb-8"><?php echo $slider_repeater[0]['description'] ?></div>
                  <?php } ?>
                  <?php
                  $button = $slider_repeater[0]['button'];
                  $button_title = $button['button_link']['title'];
                  $button_url = $button['button_link']['url'];
                  $button_target = $button['button_link']['target'];
                  $button_bg_color = $button['button_bg_color'];
                  $button_text_color = $button['button_text_color'];
                  $button_size = $button['button_size'];
                  $button_class = '';
                  switch ($button_size) {
                    case "xs":
                      $button_class = 'px-4 py-2 rounded-md text-xs font-semibold leading-none';
                      break;
                    case "sm":
                      $button_class = 'px-4 py-2 lg:px-4 lg:py-2 rounded-md text-sm font-semibold leading-none';
                      break;
                    case "md":
                      $button_class = 'px-4 py-2.5 text-sm lg:px-5 lg:py-3 rounded-md lg:text-base font-semibold leading-none';
                      break;
                    case "lg":
                      $button_class = 'px-6 py-4 rounded-md text-base lg:px-8 lg:py-4 lg:rounded-lg lg:text-lg font-semibold leading-none';
                      break;
                    case "xl":
                      $button_class = 'px-8 py-4 rounded-lg text-lg lg:px-10 lg:py-5 lg:rounded-xl lg:text-xl font-semibold leading-none';
                      break;
                    default:
                      $button_class = 'px-6 py-3 rounded-md text-base lg:px-8 lg:py-4 lg:rounded-lg lg:text-lg font-semibold leading-none';
                  }
                  $button_style = '';
                  if ($button_bg_color) {
                    $button_style .= 'background-color: ' . $button_bg_color . ';';
                  }
                  if ($button_text_color) {
                    $button_style .= 'color: ' . $button_text_color . ';';
                  }
                  if ($button_url) {
                    echo '<a href="' . $button_url . '" class="inline-block transition duration-300 hover:brightness-[1.2] ' . $button_class . '" style="' . $button_style . '" title="' . $button_title . '" target="' . $button_target . '">' . $button_title . '</a>';
                  }
                  ?>
                </div>
                <div class="absolute z-10 top-4">
                  <?php echo fiap_icon(array('icon' => 'fiap-logo-overlay', 'group' => 'others', 'size' => '480', 'class' => '-translate-x-1/2 h-60 lg:h-full')) ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    <?php } else { ?>
      <div class="swiper slider_two_columns">
        <div class="swiper-wrapper bg-fiap-teal">
          <?php foreach ($slider_repeater as $slide) : ?>
            <div class="swiper-slide relative bg-fiap-teal h-[720px] lg:h-[600px] xl:h-[600px] overflow-hidden xl:flex xl:flex-row xl:items-center">
              <div class="absolute top-0 left-0 right-0 h-1/3 md:h-2/5 lg:inset-0 lg:h-full">
                <div class="flex h-full">
                  <div class="w-full lg:w-1/2 ml-auto"><img class="object-cover h-full w-full" src="<?php echo $slide['image']['url'] ?>"></div>
                </div>
              </div>
              <div class="container mx-auto py-8 relative top-1/3 md:top-[40%] lg:py-20 xl:py-20 lg:top-0">
                <div class="flex flex-wrap lg:flex-nowrap items-center h-full">
                  <div class="w-full md:max-w-xl mx-auto lg:max-w-none lg:mx-0 lg:w-1/2 lg:pr-16 lg:pt-6 text-white relative z-20">
                    <?php if ($slide['title']) { ?>
                      <h2 class="text-[1.75rem] md:text-3xl xl:text-4xl 2xl:text-[45px] font-light text-white leading-[1.2em] xl:leading-[1.1em] mb-4 xl:mb-6"><?php echo $slide['title'] ?></h2>
                    <?php } ?>
                    <?php if ($slide['description']) { ?>
                      <div class="prose prose-a:text-white text-sm max-w-none text-white md:text-base xl:text-lg mb-8"><?php echo $slide['description'] ?></div>
                    <?php } ?>
                    <?php
                    $button = $slide['button'];
                    $button_title = $button['button_link']['title'];
                    $button_url = $button['button_link']['url'];
                    $button_target = $button['button_link']['target'];
                    $button_bg_color = $button['button_bg_color'];
                    $button_text_color = $button['button_text_color'];
                    $button_size = $button['button_size'];
                    $button_class = '';
                    switch ($button_size) {
                      case "xs":
                        $button_class = 'px-4 py-2 rounded-md text-xs font-semibold leading-none';
                        break;
                      case "sm":
                        $button_class = 'px-4 py-2 xl:px-4 xl:py-2 rounded-md text-sm font-semibold leading-none';
                        break;
                      case "md":
                        $button_class = 'px-4 py-2.5 text-sm xl:px-5 xl:py-3 rounded-md xl:text-base font-semibold leading-none';
                        break;
                      case "lg":
                        $button_class = 'px-6 py-4 rounded-md text-base xl:px-8 xl:py-4 xl:rounded-lg xl:text-lg font-semibold leading-none';
                        break;
                      case "xl":
                        $button_class = 'px-8 py-4 rounded-lg text-lg xl:px-10 xl:py-5 xl:rounded-xl xl:text-xl font-semibold leading-none';
                        break;
                      default:
                        $button_class = 'px-6 py-3 rounded-md text-base xl:px-8 xl:py-4 xl:rounded-lg xl:text-lg font-semibold leading-none';
                    }
                    $button_style = '';
                    if ($button_bg_color) {
                      $button_style .= 'background-color: ' . $button_bg_color . ';';
                    }
                    if ($button_text_color) {
                      $button_style .= 'color: ' . $button_text_color . ';';
                    }
                    if ($button_url) {
                      echo '<a href="' . $button_url . '" class="inline-block transition duration-300 hover:brightness-[1.2] ' . $button_class . '" style="' . $button_style . '" title="' . $button_title . '" target="' . $button_target . '">' . $button_title . '</a>';
                    }
                    ?>
                  </div>
                  <div class="absolute z-10 top-4">
                    <?php echo fiap_icon(array('icon' => 'fiap-logo-overlay', 'group' => 'others', 'size' => '480', 'class' => '-translate-x-1/2 h-60 lg:h-full')) ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="slider-buttons absolute top-1/3 md:top-[40%] -translate-y-full -mt-4 lg:translate-y-0 lg:mt-0 lg:top-auto lg:bottom-10 left-0 right-0 z-10">
          <div class="container mx-auto">
            <div class="w-full lg:w-1/2 flex justify-end gap-x-2 lg:gap-x-4 lg:pr-16">
              <button type="button" class="slider--button-prev w-8 h-8 lg:w-10 lg:h-10 flex items-center justify-center bg-fiap-darkblue rounded-full shadow-md hover:bg-white text-white hover:text-gray-500 transition-all duration-200">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.49994 1.00001C7.63154 0.999249 7.76201 1.02447 7.88384 1.07424C8.00568 1.124 8.1165 1.19733 8.20994 1.29001C8.30367 1.38297 8.37806 1.49357 8.42883 1.61543C8.4796 1.73729 8.50574 1.868 8.50574 2.00001C8.50574 2.13202 8.4796 2.26273 8.42883 2.38459C8.37806 2.50645 8.30367 2.61705 8.20994 2.71001L4.89994 6.00001L8.07994 9.31001C8.26619 9.49737 8.37073 9.75082 8.37073 10.015C8.37073 10.2792 8.26619 10.5326 8.07994 10.72C7.98698 10.8137 7.87637 10.8881 7.75452 10.9389C7.63266 10.9897 7.50195 11.0158 7.36994 11.0158C7.23793 11.0158 7.10722 10.9897 6.98536 10.9389C6.8635 10.8881 6.7529 10.8137 6.65994 10.72L2.79994 6.72001C2.61671 6.53308 2.51408 6.28176 2.51408 6.02001C2.51408 5.75826 2.61671 5.50694 2.79994 5.32001L6.79994 1.32001C6.8897 1.22308 6.99777 1.14489 7.11792 1.08997C7.23807 1.03504 7.36791 1.00447 7.49994 1.00001V1.00001Z" fill="currentColor" />
                </svg>
              </button>
              <button type="button" class="slider--button-next w-8 h-8 lg:w-10 lg:h-10 flex items-center justify-center bg-fiap-darkblue rounded-full shadow-md hover:bg-white text-white hover:text-gray-500 transition-all duration-200">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.49994 11C4.36833 11.0008 4.23787 10.9755 4.11603 10.9258C3.9942 10.876 3.88338 10.8027 3.78994 10.71C3.69621 10.617 3.62182 10.5064 3.57105 10.3846C3.52028 10.2627 3.49414 10.132 3.49414 9.99999C3.49414 9.86798 3.52028 9.73727 3.57105 9.61541C3.62182 9.49355 3.69621 9.38295 3.78994 9.28999L7.09994 5.99999L3.91994 2.68999C3.73369 2.50263 3.62915 2.24918 3.62915 1.98499C3.62915 1.7208 3.73369 1.46735 3.91994 1.27999C4.0129 1.18626 4.1235 1.11187 4.24536 1.0611C4.36722 1.01033 4.49793 0.984192 4.62994 0.984192C4.76195 0.984192 4.89266 1.01033 5.01452 1.0611C5.13638 1.11187 5.24698 1.18626 5.33994 1.27999L9.19994 5.27999C9.38317 5.46692 9.4858 5.71824 9.4858 5.97999C9.4858 6.24174 9.38317 6.49306 9.19994 6.67999L5.19994 10.68C5.11018 10.7769 5.00211 10.8551 4.88196 10.91C4.76181 10.965 4.63197 10.9955 4.49994 11V11Z" fill="currentColor" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <script>
        const slider_two_columns = new Swiper('.slider_two_columns', {
          slidesPerView: 1,
          loop: true,
          autoplay: {
            delay: 6000,
            disableOnInteraction: false,
          },
          watchOverflow: true,
          effect: 'fade',
          fadeEffect: {
            crossFade: true,
          },
          navigation: {
            nextEl: '.slider--button-next',
            prevEl: '.slider--button-prev',
          },
        });
      </script>
    <?php } ?>
  <?php endif; ?>
</section>