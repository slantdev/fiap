<?php
/*
 * Page Settings
 */
$breadcrumbs = $args['breadcrumbs'];
if ($breadcrumbs !== true) {
  $breadcrumbs = false;
} else {
  $breadcrumbs = true;
}

//echo $args['breadcrumbs'];

$enabled = get_field('enable_page_header');

if ($enabled) :
  $page_header = get_field('page_header');
  $hero_title = $page_header['hero_title'];
  $hero_text = $page_header['hero_text'];
  $hero_background = $page_header['hero_background'];
  $hero_bg_color = $page_header['hero_bg_color'];
  $hero_overlay_color = $page_header['hero_overlay_color'];

  if (!$hero_title) {
    $hero_title = get_the_title();
  }

  $hero_bg_style = '';
  if ($hero_background) {
    $hero_bg_style .= 'background-image: url(' . $hero_background . ');';
  }
  if ($hero_bg_color) {
    $hero_bg_style .= 'background-color: ' . $hero_bg_color . ';';
  }

  $hero_overlay_style = '';
  if ($hero_overlay_color) {
    $hero_overlay_style = 'background-color: ' . $hero_overlay_color;
  }
?>
  <section>
    <div class="relative bg-cover bg-no-repeat h-96 md:h-[30rem]" style="<?php echo $hero_bg_style; ?>">
      <div class="container mx-auto h-full relative z-10">
        <div class="flex h-full items-center pt-6 md:pt-14">
          <div class="md:w-3/4 lg:w-3/5 text-white">
            <?php
            if ($hero_title) {
              echo '<h1 class="text-4xl md:text-[45px] font-light leading-[1.1em] mb-4">' . $hero_title . '</h1>';
            }
            ?>
            <?php
            if ($hero_text) {
              echo '<div class="text-base md:text-lg">' . $hero_text . '</div>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="absolute inset-0 z-0" style="<?php echo $hero_overlay_style ?>">
      </div>
    </div>
    <?php if ($breadcrumbs) { ?>
      <div class="bg-fiap-light py-6">
        <div class="container mx-auto">
          <?php
          if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="breadcrumbs inline-block text-black text-base">', '</div>');
          }
          ?>
        </div>
      </div>
    <?php } ?>
  </section>
<?php endif; ?>