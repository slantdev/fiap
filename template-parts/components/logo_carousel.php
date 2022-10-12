<?php
$field = $args['field'];
$class = $args['class'];

if ($field) {
  $image_carousel = get_sub_field($field);
} else {
  $image_carousel = get_sub_field('image_carousel');
}
$carousel_images = $image_carousel['carousel_images'];
$carousel_caption = $image_carousel['carousel_caption'];
$carousel_loop = $image_carousel['carousel_loop'];
if ($carousel_loop) {
  $carousel_loop = 'true';
} else {
  $carousel_loop = 'false';
}
$carousel_autoplay = $image_carousel['carousel_autoplay'];
$carousel_autoplay_delay = $image_carousel['carousel_autoplay_delay'];
$carousel_autoplay_setting = '';
if ($carousel_autoplay) {
  $carousel_autoplay_setting = '
  autoplay: {
    delay: ' . $carousel_autoplay_delay . ',
    disableOnInteraction: false,
  }
  ';
}
$carousel_id = uniqid('carousel-');

$args = array(
  'post_type' => 'fiap_members',
  'posts_per_page' => -1,
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) { ?>
  <div id="<?php echo $carousel_id ?>" class="swiper overflow-visible px-8 <?php echo $class ?>">
    <div class="swiper-wrapper">
      <?php
      while ($the_query->have_posts()) {
        $the_query->the_post(); ?>
        <div class="swiper-slide">
          <a href="<?php echo get_the_permalink() ?>" class="bg-white shadow-lg rounded-lg pt-8 pb-8 px-8 flex flex-col items-center justify-center">
            <img class="" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="<?php echo get_the_title() ?>" />
          </a>
        </div>
      <?php } ?>
    </div>
    <div class="flex items-center justify-center gap-x-4 mt-8">
      <button type="button" class="<?php echo $carousel_id ?>--button-prev button-prev w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-fiap-teal text-gray-500 hover:text-white transition-all duration-200">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.49994 1.00001C7.63154 0.999249 7.76201 1.02447 7.88384 1.07424C8.00568 1.124 8.1165 1.19733 8.20994 1.29001C8.30367 1.38297 8.37806 1.49357 8.42883 1.61543C8.4796 1.73729 8.50574 1.868 8.50574 2.00001C8.50574 2.13202 8.4796 2.26273 8.42883 2.38459C8.37806 2.50645 8.30367 2.61705 8.20994 2.71001L4.89994 6.00001L8.07994 9.31001C8.26619 9.49737 8.37073 9.75082 8.37073 10.015C8.37073 10.2792 8.26619 10.5326 8.07994 10.72C7.98698 10.8137 7.87637 10.8881 7.75452 10.9389C7.63266 10.9897 7.50195 11.0158 7.36994 11.0158C7.23793 11.0158 7.10722 10.9897 6.98536 10.9389C6.8635 10.8881 6.7529 10.8137 6.65994 10.72L2.79994 6.72001C2.61671 6.53308 2.51408 6.28176 2.51408 6.02001C2.51408 5.75826 2.61671 5.50694 2.79994 5.32001L6.79994 1.32001C6.8897 1.22308 6.99777 1.14489 7.11792 1.08997C7.23807 1.03504 7.36791 1.00447 7.49994 1.00001V1.00001Z" fill="currentColor" />
        </svg>
      </button>
      <button type="button" class="<?php echo $carousel_id ?>--button-next button-next w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-fiap-teal text-gray-500 hover:text-white transition-all duration-200">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4.49994 11C4.36833 11.0008 4.23787 10.9755 4.11603 10.9258C3.9942 10.876 3.88338 10.8027 3.78994 10.71C3.69621 10.617 3.62182 10.5064 3.57105 10.3846C3.52028 10.2627 3.49414 10.132 3.49414 9.99999C3.49414 9.86798 3.52028 9.73727 3.57105 9.61541C3.62182 9.49355 3.69621 9.38295 3.78994 9.28999L7.09994 5.99999L3.91994 2.68999C3.73369 2.50263 3.62915 2.24918 3.62915 1.98499C3.62915 1.7208 3.73369 1.46735 3.91994 1.27999C4.0129 1.18626 4.1235 1.11187 4.24536 1.0611C4.36722 1.01033 4.49793 0.984192 4.62994 0.984192C4.76195 0.984192 4.89266 1.01033 5.01452 1.0611C5.13638 1.11187 5.24698 1.18626 5.33994 1.27999L9.19994 5.27999C9.38317 5.46692 9.4858 5.71824 9.4858 5.97999C9.4858 6.24174 9.38317 6.49306 9.19994 6.67999L5.19994 10.68C5.11018 10.7769 5.00211 10.8551 4.88196 10.91C4.76181 10.965 4.63197 10.9955 4.49994 11V11Z" fill="currentColor" />
        </svg>
      </button>
    </div>
  </div>
  <?php
  echo '<script>';
  echo 'new Swiper("#' . $carousel_id . '", {';
  echo '
      slidesPerView: "2",
      spaceBetween: 24,
      watchOverflow: true,
      centerInsufficientSlides: true,
      breakpoints: {
        768: {
          slidesPerView: "3",
          spaceBetween: 32
        },
        1280: {
          slidesPerView: "4",
          spaceBetween: 40
        }
      },
      ';
  echo 'navigation: {
      nextEl: ".' . $carousel_id . '--button-next",
      prevEl: ".' . $carousel_id . '--button-prev",
    },';
  echo 'loop: ' . $carousel_loop . ',';
  echo $carousel_autoplay_setting;
  echo '});';
  echo '</script>';
  ?>
<?php } ?>