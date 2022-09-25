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

<section class="bg-fiap-light py-12 md:py-16" style="<?php echo $section_style ?>">
  <div class="container mx-auto">
    <div class="flex flex-wrap justify-center items-center">
      <div class="mb-4 md:mb-0 md:mr-8"><span class="text-fiap-darkblue text-2xl font-semibold leading-tight"><?php echo get_sub_field('intro_text') ?></span></div>
      <div class="flex justify-center items-center">
        <div class="dropdown relative mr-2 md:mr-6">
          <button class="dropdown-toggle px-4 py-4 leading-none rounded-lg focus:outline-none focus:ring-0 transition duration-150 ease-in-out flex items-center justify-between whitespace-nowrap xl:min-w-[360px] text-lg bg-white border border-solid border-[#E3E3E3] text-[#868686] w-full max-w-[380px] tracking-wider font-light lg:px-8" type="button" id="dropdownSelect" data-bs-toggle="dropdown" aria-expanded="false">
            <span>Select</span>
            <svg class="w-6 ml-6" xmlns="http://www.w3.org/2000/svg" width="28.707" height="14.707" viewBox="0 0 28.707 14.707">
              <g id="Group_234" data-name="Group 234" transform="translate(-2908.146 -887.146)">
                <line id="Line_3" data-name="Line 3" x2="14" y2="14" transform="translate(2908.5 887.5)" fill="none" stroke="currentColor" stroke-width="1" />
                <line id="Line_4" data-name="Line 4" x1="14" y2="14" transform="translate(2922.5 887.5)" fill="none" stroke="currentColor" stroke-width="1" />
              </g>
            </svg>
          </button>
          <?php
          $select_links_repeater = get_sub_field('select_links_repeater');
          if ($select_links_repeater) :
          ?>
            <ul class="dropdown-menu min-w-max w-full absolute bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownSelect">
              <?php foreach ($select_links_repeater as $link) : ?>
                <li>
                  <a href="<?php echo $link['link']['url'] ?>" class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8"><?php echo $link['link']['title'] ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
        <button type="button" class="bg-fiap-darkblue p-4 py-3 md:px-8 text-white text-2xl rounded-lg leading-7 hover:brightness-125">Go</button>
      </div>
    </div>
  </div>
</section>