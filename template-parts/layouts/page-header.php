<?php
/*
 * Page Settings
 */
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
    <div class="relative bg-cover bg-no-repeat h-[30rem]" style="<?php echo $hero_bg_style; ?>">
      <div class="container mx-auto h-full relative z-10">
        <div class="flex h-full items-center pt-14">
          <div class="w-3/5 text-white">
            <?php
            if ($hero_title) {
              echo '<h1 class="text-[54px] font-light leading-[1.1em] mb-4">' . $hero_title . '</h1>';
            }
            ?>
            <?php
            if ($hero_text) {
              echo '<div class="text-lg">' . $hero_text . '</div>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="absolute inset-0 z-0" style="<?php echo $hero_overlay_style ?>">
      </div>
    </div>
    <div class="bg-fiap-light py-6">
      <div class="container mx-auto">
        <?php
        // if (function_exists('yoast_breadcrumb')) {
        //   yoast_breadcrumb('<div class="breadcrumbs inline-block bg-white bg-opacity-50 py-2 px-4 text-black text-sm">', '</p>');
        // }
        ?>
        <ul class="flex text-base">
          <li><a href="<?php echo site_url() ?>" class="hover:underline">Home</a></li>
          <li class="px-4">/</li>
          <li><?php echo get_the_title() ?></li>
        </ul>
      </div>
    </div>
  </section>
<?php endif; ?>