<?php

/**
 * Template Name: Components
 * Template Post Type: page
 *
 */
get_header();
?>
<section id="typography" class="py-16 border-y border-gray-200">
  <div class="container mx-auto">
    <div class="mb-8">
      <h2 class="inline-block bg-slate-200 text-xl font-semibold uppercase py-2 px-4">TYPOGRAPHY</h2>
    </div>
    <div class="flex flex-col gap-y-8">
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H1</div>
        <h1 class="text-[54px] font-light leading-[1.1em]">Financial Inclusion Action Plan</h1>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H2</div>
        <h2 class="text-[45px] font-semibold leading-[1.1em]">Financial Inclusion Action Plan</h2>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H3</div>
        <h3 class="text-[34px] font-semibold leading-[1.1em]">Financial Inclusion Action Plan</h3>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H4</div>
        <h4 class="text-[28px] font-semibold leading-[1.1em]">Financial Inclusion Action Plan</h4>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H5</div>
        <h5 class="text-[24px] font-normal leading-[1.1em]">Financial Inclusion Action Plan</h5>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H6</div>
        <h6 class="text-[18px] font-black leading-[1.1em]">Financial Inclusion Action Plan</h6>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">H7</div>
        <h7 class="text-[18px] font-medium leading-[1.1em]">Financial Inclusion Action Plan</h7>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">P1</div>
        <p class="text-[21px] font-medium leading-normal">Financial Inclusion Action Plan</p>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">P2</div>
        <p class="text-lg font-normal">Financial Inclusion Action Plan</p>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">P3</div>
        <p class="text-base font-normal">Financial Inclusion Action Plan</p>
      </div>
      <div class="flex items-baseline">
        <div class="flex-none w-5 mr-8">Link</div>
        <p class="text-base font-normal underline">Financial Inclusion Action Plan</p>
      </div>
    </div>
  </div>
</section>

<section id="buttons" class="py-16 border-y border-gray-200">
  <div class="container mx-auto">
    <div class="mb-8">
      <h2 class="inline-block bg-slate-200 text-xl font-semibold uppercase py-2 px-4">BUTTONS</h2>
    </div>
    <div class="flex gap-x-4 gap-y-8">
      <button type="button" class="bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Primary</button>
      <button type="button" class="bg-white text-fiap-darkblue text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-fiap-darkblue hover:border-transparent hover:bg-fiap-darkblue hover:text-white hover:shadow-lg transition-all duration-300">Secondary</button>
      <button type="button" class="bg-fiap-red text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-red-hover hover:shadow-lg transition-all duration-300">Primary</button>
    </div>
    <div class="mt-8 flex gap-x-4 gap-y-8">
      <button type="button" class="bg-fiap-teal text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Primary</button>
      <button type="button" class="bg-white text-fiap-darkblue text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-fiap-darkblue hover:border-transparent hover:bg-fiap-darkblue hover:text-white hover:shadow-lg transition-all duration-300">Secondary</button>
      <button type="button" class="bg-fiap-red text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent hover:bg-fiap-red-hover hover:shadow-lg transition-all duration-300">Primary</button>
    </div>
  </div>
</section>

<section id="icons" class="py-16 border-y border-gray-200">
  <div class="container mx-auto">
    <div class="mb-8">
      <h2 class="inline-block bg-slate-200 text-xl font-semibold uppercase py-2 px-4">ICONS</h2>
    </div>
    <div class="grid grid-cols-10 gap-6">
      <?php echo fiap_icon(array('icon' => 'articles', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'contact', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'document_search', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'domestic_violence', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'economic_wellbeing', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'education', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'event', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'family_counselling', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'faq', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'financial_counselling', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'former_resident', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'homeless_information', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'loans_insurance', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'locate', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'news', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'parent_family', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'partner_volunteer', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'phone', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'research_advocacy', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'resources', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'safety_resilience', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'support', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
      <?php echo fiap_icon(array('icon' => 'youth', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal')) ?>
    </div>
    <div class="grid grid-cols-10 gap-6 mt-6">
      <div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 items-center justify-center p-3">
        <?php echo fiap_icon(array('icon' => 'document_search', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) ?>
      </div>
      <div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 items-center justify-center p-3">
        <?php echo fiap_icon(array('icon' => 'news', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) ?>
      </div>
      <div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 items-center justify-center p-3">
        <?php echo fiap_icon(array('icon' => 'faq', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) ?>
      </div>
      <div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 items-center justify-center p-3">
        <?php echo fiap_icon(array('icon' => 'resources', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) ?>
      </div>
      <div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 items-center justify-center p-3">
        <?php echo fiap_icon(array('icon' => 'event', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) ?>
      </div>
      <div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 items-center justify-center p-3">
        <?php echo fiap_icon(array('icon' => 'articles', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) ?>
      </div>
    </div>
  </div>
</section>

<section id="page-banner" class="py-16 border-y border-gray-200">
  <div class="container mx-auto">
    <div class="mb-8">
      <h2 class="inline-block bg-slate-200 text-xl font-semibold uppercase py-2 px-4">PAGE BANNER</h2>
    </div>
  </div>
  <div class="relative bg-cover bg-no-repeat h-[30rem]" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/banners/page-banner-01.jpg' ?>)">
    <div class="container mx-auto h-full relative z-10">
      <div class="flex h-full items-center pt-14">
        <div class="w-1/2 text-white">
          <h1 class="text-[54px] font-light leading-[1.1em] mb-4">About FIAP</h1>
          <div class="text-lg">The Financial Inclusion Action Plan (FIAP) Program is a call to action – and we invite organisations from across all sectors to partner with us and play their part in promoting financial resilience and wellbeing in Australia.</div>
        </div>
      </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent bg-opacity-20 z-0"></div>
  </div>
  <div class="bg-fiap-light py-6">
    <div class="container mx-auto">
      <ul class="flex text-base">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li class="px-4">/</li>
        <li><a href="#" class="hover:underline">Loans</a></li>
        <li class="px-4">/</li>
        <li>Loan Comparison</li>
      </ul>
    </div>
  </div>
</section>

<section id="page-slider" class="py-16 border-y border-gray-200">
  <div class="container mx-auto">
    <div class="mb-8">
      <h2 class="inline-block bg-slate-200 text-xl font-semibold uppercase py-2 px-4">PAGE SLIDER</h2>
    </div>
  </div>
  <div class="relative">
    <div class="absolute inset-0">
      <div class="flex h-full">
        <div class="w-1/2 bg-fiap-teal"></div>
        <div class="w-1/2"><img class="object-cover h-full w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/slider/slide-01.jpg' ?>"></div>
      </div>
    </div>
    <div class="container mx-auto py-36">
      <div class="flex items-center h-full">
        <div class="w-1/2 pr-16 pt-6 text-white relative z-20">
          <h1 class="text-[54px] font-light leading-[1.1em] mb-4">Financial wellbeing is everyone’s business</h1>
          <div class="text-lg mb-8">FIAP Members recognise that Financial Wellbeing is everyone’s business. 28% of Australians report low financial wellbeing, with women experiencing lower wellbeing than men (ANZ 2021). The FIAP Program supports our members to address barriers to financial inclusion and wellbeing,</div>
          <a href="#" class="inline-block mt-8 bg-white text-fiap-teal text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:shadow-lg transition-all duration-300">Learn more</a>
        </div>
        <div class="absolute z-10 top-4">
          <?php echo fiap_icon(array('icon' => 'fiap-logo-overlay', 'group' => 'others', 'size' => '480', 'class' => '-translate-x-1/2')) ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="right-image-text" class="py-16 border-y border-gray-200">
  <div class="bg-white py-36">
    <div class="container mx-auto">
      <div class="flex gap-x-36">
        <div class="w-1/3 order-2">
          <img class="w-full h-full aspect-[3/4] object-cover rounded-xl" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg' ?>" alt="">
        </div>
        <div class="w-2/3 order-1">
          <div class="prose max-w-none">
            <h2 class="text-[34px] font-semibold leading-[1.1em] mt-12">Right Image with text</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur. Amet, non euismod ornare et. In porta augue tristique morbi.</p>
            <p>Vulputate donec mattis maecenas non in. Pulvinar vitae proin volutpat morbi integer leo. Odio amet viverra auctor integer nulla. Volutpat magna nunc purus dictum sit dignissim quis. In urna ultricies felis elementum neque lacus sit tincidunt in. Vitae mauris nibh condimentum vitae cra.</p>
            <a href="#" class="inline-block mt-12 bg-fiap-teal text-white text-[21px] font-semibold no-underline leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="left-image-text" class="py-16 border-y border-gray-200">
  <div class="bg-white py-36">
    <div class="container mx-auto">
      <div class="flex gap-x-36">
        <div class="w-1/3 order-1">
          <img class="w-full h-full aspect-[3/4] object-cover rounded-xl" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg' ?>" alt="">
        </div>
        <div class="w-2/3 order-2">
          <div class="prose max-w-none">
            <h2 class="text-[34px] font-semibold leading-[1.1em] mt-12">Left Image with text</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur. Amet, non euismod ornare et. In porta augue tristique morbi.</p>
            <p>Vulputate donec mattis maecenas non in. Pulvinar vitae proin volutpat morbi integer leo. Odio amet viverra auctor integer nulla. Volutpat magna nunc purus dictum sit dignissim quis. In urna ultricies felis elementum neque lacus sit tincidunt in. Vitae mauris nibh condimentum vitae cra.</p>
            <a href="#" class="inline-block mt-12 bg-fiap-teal text-white text-[21px] font-semibold no-underline leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="text-center" class="py-16 border-y border-gray-200">
  <div class="bg-fiap-light py-36">
    <div class="container mx-auto">
      <div class="prose mx-auto text-center">
        <h2 class="text-[34px] font-semibold leading-[1.1em]">Text Center</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur. Amet, non euismod ornare et. In porta augue tristique morbi.</p>
        <p>Vulputate donec mattis maecenas non in. Pulvinar vitae proin volutpat morbi integer leo. Odio amet viverra auctor integer nulla. Volutpat magna nunc purus dictum sit dignissim quis. In urna ultricies felis elementum neque lacus sit tincidunt in. Vitae mauris nibh condimentum vitae cra.</p>
        <a href="#" class="inline-block mt-12 bg-fiap-teal text-white text-[21px] font-semibold no-underline leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Button</a>
      </div>
    </div>
  </div>
</section>

<section id="carousel" class="py-16 border-y border-gray-200">
  <div class="bg-neutral-100 py-36">
    <h2 class="text-[34px] font-semibold leading-[1.1em] text-center text-fiap-teal">We’ve made an impact with</h2>
    <div class="grid grid-cols-5 gap-10 px-12 mt-20">
      <div class="bg-white shadow-lg rounded-lg py-8 px-8 flex items-center justify-center">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/impact/origin.png' ?>" alt="">
      </div>
      <div class="bg-white shadow-lg rounded-lg py-8 px-8 flex items-center justify-center">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/impact/vicsuper.png' ?>" alt="">
      </div>
      <div class="bg-white shadow-lg rounded-lg py-8 px-8 flex items-center justify-center">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/impact/anz.png' ?>" alt="">
      </div>
      <div class="bg-white shadow-lg rounded-lg py-8 px-8 flex items-center justify-center">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/impact/commonwealth.png' ?>" alt="">
      </div>
      <div class="bg-white shadow-lg rounded-lg py-8 px-8 flex items-center justify-center">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/impact/allianz.png' ?>" alt="">
      </div>
    </div>
  </div>
</section>

<?php
function card_hover()
{
  $output = '';
  $output .= '<a class="card-hover h-full rounded-xl aspect-square bg-slate-100 relative overflow-hidden cursor-pointer shadow-md">';
  $output .= '<img class="card-image" src="' . get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg" alt="">';
  $output .= '<div class="card-text">
      <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</h3>
      <div class="card-excerpt">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur.
      </div>
      <button type="button" class="bg-white p-4 absolute right-6 bottom-6 rounded-full w-12 h-12">
        <span class="block w-4 h-1 bg-fiap-darkblue absolute top-1/2 -translate-y-1/2"></span>
        <span class="block w-1 h-4 bg-fiap-darkblue absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2"></span>
      </button>
    </div>
  </a>';
  return $output;
}
?>
<section id="case-studies" class="py-16 border-y border-gray-200">
  <div class="container mx-auto py-24">
    <div>
      <h2 class="text-[34px] font-semibold leading-[1.1em] text-fiap-teal mb-8">Case Studies</h2>
    </div>
    <div class="flex gap-x-24">
      <div class="w-2/3">
        <div class="prose">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur.</p>
        </div>
      </div>
      <div class="w-1/3">
        <div class="relative flex w-full bg-fiap-light shadow-inner p-1.5 rounded-lg">
          <input class="w-full border-none bg-transparent focus:outline-none focus:ring-0" type="text" placeholder="Insert your query">
          <button type="button" class="flex-none bg-fiap-darkblue text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent hover:brightness-110 transition-all duration-300">SEARCH</button>
        </div>
      </div>
    </div>
    <div class="mt-12">
      <div class="flex gap-x-6 justify-center">
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">All</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Banking</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Finance</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Insurance</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Retail</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Utilities</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Startup</button>
      </div>
    </div>
    <div class="mt-12">
      <div class="grid grid-cols-3 gap-10">
        <?php echo card_hover() ?>
        <?php echo card_hover() ?>
        <?php echo card_hover() ?>
        <?php echo card_hover() ?>
        <?php echo card_hover() ?>
        <?php echo card_hover() ?>
      </div>
      <div class="mt-20 text-center">
        <button type="button" class="inline-block bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">View more</button>
      </div>
    </div>
  </div>
</section>

<?php
function card_article()
{
  $output = '';
  $output .= '<a class="card-article h-full rounded-xl bg-white relative overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition duration-300">';
  $output .= '<div class="aspect-[16/11]"><img class="w-full h-full object-cover" src="' . get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg" alt=""></div>';
  $output .= '<div class="flex flex-col px-6 pt-12 pb-32 relative">';
  $output .= '<div class="bg-fiap-teal text-white rounded-full flex w-[4.5rem] h-[4.5rem] items-center justify-center p-4 absolute right-8 -top-9">'
    . fiap_icon(array('icon' => 'news', 'group' => 'brand', 'size' => '64', 'class' => 'text-white')) .
    '</div>';
  $output .= '<div class="font-medium text-base mb-4">7th August 2021</div>
      <h3 class="text-[24px] font-semibold leading-[1.25em] mb-4 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</h3>
      <div class="card-excerpt">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur.
      </div>
      <button class="absolute bottom-6 left-6 text-fiap-teal">LEARN MORE</button>
    </div>
  </a>';
  return $output;
}
?>
<section id="featured-news" class="py-16 border-y border-gray-200 bg-fiap-light">
  <div class="container mx-auto py-24">
    <div>
      <h2 class="text-[34px] font-semibold leading-[1.1em] text-fiap-teal mb-8">Featured News</h2>
    </div>
    <div class="flex gap-x-24">
      <div class="w-2/3">
        <div class="prose">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur.</p>
        </div>
      </div>
      <div class="w-1/3">
        <div class="relative flex w-full bg-white shadow-inner p-1.5 rounded-lg">
          <input class="w-full border-none bg-transparent focus:outline-none focus:ring-0" type="text" placeholder="Insert your query">
          <button type="button" class="flex-none bg-fiap-darkblue text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent hover:brightness-110 transition-all duration-300">SEARCH</button>
        </div>
      </div>
    </div>
    <div class="mt-12">
      <div class="flex gap-x-6 justify-center">
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">All</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Banking</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Finance</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Insurance</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Retail</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Utilities</button>
        <button type="button" class="rounded-full px-10 py-3 bg-white border border-neutral-100 shadow-md hover:shadow-lg transition-all duration-200">Startup</button>
      </div>
    </div>
    <div class="mt-12">
      <div class="grid grid-cols-3 gap-10">
        <?php echo card_article() ?>
        <?php echo card_article() ?>
        <?php echo card_article() ?>
        <?php echo card_article() ?>
        <?php echo card_article() ?>
        <?php echo card_article() ?>
      </div>
      <div class="mt-20 text-center">
        <button type="button" class="inline-block bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">View more</button>
      </div>
    </div>
  </div>
</section>

<?php
function card_features()
{
  $output = '';
  $output .= '<div class="rounded-xl bg-white px-8 py-12 shadow-lg border border-neutral-200">';
  $output .= fiap_icon(array('icon' => 'loans_insurance', 'group' => 'brand', 'size' => '64', 'class' => 'text-fiap-teal mb-4'));
  $output .= '<h3 class="text-2xl">Good for Customers</h3>';
  $output .= '<ul class="flex flex-col gap-y-4 mt-12 text-base">';
  $output .= '<li class="flex">'
    . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
    '<span>Improve access to safe, affordable and appropriate financial products and services.</span>
  </li>';
  $output .= '<li class="flex">'
    . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
    '<span>Provide better pathways to support in difficult situations.</span>
  </li>';
  $output .= '<li class="flex">'
    . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
    '<span>Improve financial resilience to deal with shocks.</span>
  </li>';
  $output .= '<li class="flex">'
    . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
    '<span>Improve financial wellbeing - the ability to comfortably meet and maintain current financial commitments and needs.</span>
  </li>';
  $output .= '</ul>';
  $output .= '</div>';
  return $output;
}
?>

<section id="features-card" class="py-16 border-y border-gray-200 bg-fiap-light">
  <div class="container mx-auto py-24">
    <div>
      <h2 class="text-[34px] font-semibold leading-[1.1em] mb-12">FIAP aims for mutual benefit for all stakeholders</h2>
    </div>
    <div class="grid grid-cols-3 gap-10">
      <?php echo card_features() ?>
      <?php echo card_features() ?>
      <?php echo card_features() ?>
    </div>
  </div>
</section>

<?php
function card_number($atts = array())
{
  $atts = shortcode_atts(array(
    'number'  => '',
    'text' => '',
  ), $atts);

  $output = '';
  $output .= '<div class="rounded-xl bg-white px-8 pt-8 pb-14 shadow-lg border border-neutral-200">';
  $output .= '<div class="rounded-full bg-fiap-darkblue text-white w-14 h-14 flex font-semibold items-center justify-center mb-8">' . $atts['number'] . '</div>';
  $output .= '<div class="text-neutral-500">';
  $output .= $atts['text'];
  $output .= '</div>';
  $output .= '</div>';
  return $output;
}
?>

<section id="numbers-card" class="py-16 border-y border-gray-200 bg-white">
  <div class="container mx-auto py-24">
    <div class="w-full">
      <h2 class="text-[34px] font-semibold leading-tight text-fiap-teal mb-12 w-2/3">Financial Inclusion and the Sustainable Development Goals</h2>
      <div class="prose max-w-none">
        <p>Financial inclusion is not an end in itself, but a means to an end, offering pathways to economic opportunities which enable people to realise their full potential. Across the globe, policymakers are also recognising that financial inclusion is a powerful engine of progress, and a catalytic tool to advance human development.</p>
        <p>Actions undertaken as part of the FIAP program contribute to 12 of the 17 Sustainable Development Goals (SDGs 1-10 and 16-17) which are associated with reducing inequalities and promoting inclusive growth. For more detail, refer to Good Shepherd Microfinance’s Submission to Senate Inquiry into the Sustainable Development Goals March 2018.</p>
      </div>
    </div>
    <div class="mt-12 grid grid-cols-3 gap-16">
      <?php
      echo card_number(
        array(
          'number' => '1',
          'text' => 'Savings help families escape poverty as they absorb financial shocks, smooth consumption, accumulate assets and invest in health and education.'
        )
      )
      ?>
      <?php
      echo card_number(
        array(
          'number' => '2',
          'text' => 'Farmers with access to finance produce better harvests, and are able to be more resilient to external shocks.'
        )
      )
      ?>
      <?php
      echo card_number(
        array(
          'number' => '3',
          'text' => 'Access to finance enables people to better manage medical expenses and rebound from health crises.'
        )
      )
      ?>
      <?php
      echo card_number(
        array(
          'number' => '4',
          'text' => 'Savings help families plan for and manage education expenses, building human capital which fuels economic growth.'
        )
      )
      ?>
      <?php
      echo card_number(
        array(
          'number' => '5',
          'text' => 'Financial services help women assert economic power, and have greater control over their finances such as prioritising spend on household necessities.'
        )
      )
      ?>
      <?php
      echo card_number(
        array(
          'number' => '6',
          'text' => 'Access to clean and affordable utilities including water and energy is a basic necessity; users must also be treated fairly when faced with financial hardship.'
        )
      )
      ?>
    </div>
  </div>
</section>

<?php
function card_content($atts = array())
{
  $atts = shortcode_atts(array(
    'image'  => '',
    'title' => '',
    'text' => '',
    'list' => false
  ), $atts);

  $output = '';
  $output .= '<a class="card-article h-full rounded-xl bg-white relative overflow-hidden shadow-md">';
  if ($atts['image']) {
    $output .= '<div class="aspect-[16/11]"><img class="w-full h-full object-cover" src="' . $atts['image'] . '" alt=""></div>';
  }
  if ($atts['title'] || $atts['text']) {
    $output .= '<div class="px-8 py-12">';
    if ($atts['title']) {
      $output .= '<h4 class="text-[28px] leading-tight font-semibold mb-8">' . $atts['title'] . '</h4>';
    }
    if ($atts['text']) {
      $output .= '<div class="prose">' . $atts['text'] . '</div>';
    }
    if ($atts['list']) {
      $output .= '<ul class="flex flex-col gap-y-4 mt-12 text-base">';
      $output .= '<li class="flex">'
        . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
        '<span>Improve access to safe, affordable and appropriate financial products and services.</span>
      </li>';
      $output .= '<li class="flex">'
        . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
        '<span>Provide better pathways to support in difficult situations.</span>
      </li>';
      $output .= '<li class="flex">'
        . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
        '<span>Improve financial resilience to deal with shocks.</span>
      </li>';
      $output .= '<li class="flex">'
        . fiap_icon(array('icon' => 'check', 'group' => 'utility', 'size' => '16', 'class' => 'text-fiap-teal flex-none mr-4 mt-1')) .
        '<span>Improve financial wellbeing - the ability to comfortably meet and maintain current financial commitments and needs.</span>
      </li>';
      $output .= '</ul>';
    }
    $output .= '</div>';
  }
  $output .= '</a>';
  return $output;
}
?>
<section id="content-card" class="py-16 border-y border-gray-200 bg-fiap-light">
  <div class="container mx-auto py-24">
    <div class="mt-12 grid grid-cols-2 gap-32">
      <?php
      echo card_content(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg',
          'title' => 'FIAP Members',
          'text' => '<p>Organisations who wish to develop a FIAP must first join as a FIAP member. This could be as part of the National FIAP program, or one of the place-based programs. Good Shepherd works with potential members and the FIAP Advisory Group to ensure that all organisations who join the program have a genuine commitment to improving financial wellbeing in Australia.</p>
          <p>Click here for more information on FIAP membership and how to apply.</p>'
        )
      )
      ?>
      <?php
      echo card_content(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg',
          'title' => 'Developing a FIAP',
          'text' => '<p>Good Shepherd staff work closely with member organisations to facilitate the development of action plans. This will typically involve a self-evaluation and a number of structured workshops to identify existing, planned, and potential activities. The actions are developed according to the FIAP Framework. FIAPs represent public commitments, so every plan must have the endorsement of the organisation’s executive team before being published.</p>'
        )
      )
      ?>
      <?php
      echo card_content(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg',
          'title' => 'Progress Verification',
          'text' => '<p>As part of the FIAP process, all actions must feature specific and measurable outputs, and intended outcomes. The outcomes are reviewed at the end of the FIAP period, with results made public to show an organisation’s progress towards its financial inclusion goals.</p>'
        )
      )
      ?>
      <?php
      echo card_content(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg',
          'title' => 'The FIAP Community',
          'text' => '<p>FIAP member organisations join a community of like-minded organisations working towards financial inclusion. The Good Shepherd team facilitates quarterly Community of Practice meetings, and a range of other information sessions, to help them share learnings and communicate with each other.</p>'
        )
      )
      ?>
      <?php
      echo card_content(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg',
          'title' => 'Core Commitments',
          'list' => true
        )
      )
      ?>
      <?php
      echo card_content(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg',
          'title' => 'Leadership Actions',
          'list' => true
        )
      )
      ?>
    </div>
  </div>
</section>

<section id="cta" class="py-16 border-y border-gray-200 bg-white">
  <div class="container mx-auto py-24">
    <div class="flex flex-col gap-y-24">
      <div class="rounded-xl py-20 px-24 bg-fiap-light shadow-lg">
        <div class="flex items-center">
          <div class="w-3/4">
            <h3 class="text-fiap-teal text-[34px] font-semibold leading-tight">Learn how to join FIAP and</h3>
            <h3 class="text-[34px] font-medium leading-tight">Introduce FIAP to your organisation</h3>
          </div>
          <div class="w-1/4">
            <button type="button" class="w-full bg-fiap-darkblue text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent  hover:shadow-lg hover:brightness-150 transition-all duration-300">Enquire</button>
          </div>
        </div>
      </div>
      <div class="rounded-xl py-20 px-24 bg-fiap-teal shadow-lg">
        <div class="flex items-center">
          <div class="w-3/4">
            <h3 class="text-white text-[34px] font-medium leading-tight">Learn how to join FIAP and</h3>
            <h3 class="text-white text-[34px] font-medium leading-tight">Introduce FIAP to your organisation</h3>
          </div>
          <div class="w-1/4">
            <button type="button" class="w-full bg-fiap-darkblue text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent  hover:shadow-lg hover:brightness-150 transition-all duration-300">Enquire</button>
          </div>
        </div>
      </div>
      <div class="rounded-xl bg-fiap-light overflow-hidden shadow-lg">
        <div class="flex">
          <div class="w-2/5">
            <img class="w-full h-full object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg' ?>" alt="">
          </div>
          <div class="w-3/5">
            <div class="py-20 px-24">
              <h3 class="text-fiap-darkblue text-[34px] font-semibold leading-tight">Lorem Ipsum</h3>
              <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque gravida ultrices fermentum maecenas. Scelerisque aliquam tristique odio dis</p>
              <button type="button" class="bg-fiap-darkblue text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent  hover:shadow-lg hover:brightness-150 transition-all duration-300">Enquire</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="" class="py-16 border-y border-gray-200 bg-white">
  <div class="container mx-auto py-24">
    <h2 class="text-[34px] font-semibold leading-[1.1em] text-fiap-teal mb-12">We are here to help</h2>
    <div class="grid grid-cols-3 divide-x divide-neutral-300">
      <div class="flex gap-x-8 pr-10">
        <div class="flex-none">
          <?php echo fiap_icon(array('icon' => 'logo', 'group' => 'brand', 'size' => '72', 'class' => '')) ?>
        </div>
        <div class="">
          <h4 class="font-semibold text-2xl mb-2">About Us</h4>
          <p class="text-xl">Learn more about FIAP <a class="underline" href="#">here &raquo;</a></p>
        </div>
      </div>
      <div class="flex gap-x-8 px-10">
        <div class="flex-none">
          <?php echo fiap_icon(array('icon' => 'contact', 'group' => 'brand', 'size' => '72', 'class' => 'text-fiap-teal')) ?>
        </div>
        <div class="">
          <h4 class="font-semibold text-2xl mb-2">Contact Us</h4>
          <p class="text-xl">Get in touch by phone or email <a class="underline" href="#">here &raquo;</a></p>
        </div>
      </div>
      <div class="flex gap-x-8 pl-10">
        <div class="flex-none">
          <?php echo fiap_icon(array('icon' => 'family_counselling', 'group' => 'brand', 'size' => '72', 'class' => 'text-fiap-teal')) ?>
        </div>
        <div class="">
          <h4 class="font-semibold text-2xl mb-2">Book a meeting</h4>
          <p class="text-xl">Book a meeting with us <a class="underline" href="#">here &raquo;</a></p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="" class="py-16 border-y border-gray-200 bg-fiap-light">
  <div class="container mx-auto py-24">
    <div class="w-1/2">
      <h2 class="text-[34px] font-semibold leading-tight mb-12">The FIAP Journey</h2>
      <p>There are three FIAP levels that an organisation progresses through on their financial inclusion journey.</p>
    </div>
    <div class="text-center mt-8 mb-16">
      <img class="inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/fiap-journey.png' ?>" alt="">
    </div>
    <div class="grid grid-cols-3 gap-x-12">
      <div class="rounded-xl bg-white px-12 py-20 shadow-lg">
        <h3 class="text-[24px] font-semibold leading-tight mb-4">Foundation</h3>
        <div class="prose">
          <p>The first step is a 12-month commitment to deepening your organisation’s understanding of issues related to financial hardship and resilience; and to explore what your role is in promoting financial wellbeing amongst the stakeholders of your organisation.</p>

          <p>The Foundation FIAP is broad in focus and allows an organisation to identify actions aligned to its business strategy and sphere of influence, act and learn; and critically, begin to build organisation capacity to do this work.</p>
        </div>
      </div>
      <div class="rounded-xl bg-white px-12 py-20 shadow-lg">
        <h3 class="text-[24px] font-semibold leading-tight mb-4">Build</h3>
        <div class="prose">
          <p>With a longer timeframe of 2-3 years, a Build FIAP allows your organisation to reflect on the actions taken as part of the Foundation FIAP, and to explore further your unique vision for promoting financial inclusion.</p>
          <p>With an increased focus on measurable outcomes, what will become business as usual as part of your organisation’s strategy? Where would the organisation like to stand out and take a leadership role in helping to promote financial wellbeing in Australia?</p>
        </div>
      </div>
      <div class="rounded-xl bg-white px-12 py-20 shadow-lg">
        <h3 class="text-[24px] font-semibold leading-tight mb-4">Extend</h3>
        <div class="prose">
          <p>At the final level, the Extend FIAP is for organisations that have established a strong internal approach towards promoting financial wellbeing and are ready to take a leadership role in advocating for and influencing broader systems change to promote financial wellbeing in Australia.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
function card_papers()
{
  $output = '';

  $output .= '<div class="rounded-lg bg-fiap-light py-10 px-10 flex flex-col border border-neutral-200">
  <div class="text-sm uppercase tracking-wider mb-4 text-neutral-500">20 Nov 2022</div>
  <h3 class="text-xl mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt ut labore et dolore magna aliqua.</h3>
  <div class="flex gap-3 mb-20">
    <div class="rounded-md border border-fiap-red py-2 px-4 text-sm bg-white text-center text-fiap-red">Finance</div>
    <div class="rounded-md border border-fiap-red py-2 px-4 text-sm bg-white text-center text-fiap-red">Mining</div>
  </div>
  <div class="mt-auto">
    <a href="#" class="inline-block bg-fiap-darkblue text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent hover:brightness-150 hover:shadow-lg transition-all duration-300">Read Report</a>
  </div>
</div>';
  return $output;
}
?>
<section id="" class="py-16 border-y border-gray-200 bg-white">
  <div class="container mx-auto py-24">
    <div class="w-1/2">
      <h2 class="text-[34px] font-semibold leading-tight mb-12">White papers</h2>
      <div class="prose">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur.</p>
      </div>
    </div>
    <div class="flex gap-x-4 items-center mt-16">
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
    <div class="grid grid-cols-3 gap-10 mt-16">
      <?php echo card_papers() ?>
      <?php echo card_papers() ?>
      <?php echo card_papers() ?>
      <?php echo card_papers() ?>
      <?php echo card_papers() ?>
      <?php echo card_papers() ?>
    </div>
    <div class="mt-20 text-center">
      <button type="button" class="mx-auto bg-fiap-teal text-white text-[21px] font-semibold leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Load more</button>
    </div>
  </div>
</section>

<?php
function team_card($atts = array())
{
  $atts = shortcode_atts(array(
    'image'  => '',
    'name' => '',
    'title' => '',
  ), $atts);

  $output = '';

  $output .= '<div class="p-20">
  <img class="rounded-full mb-4 mx-auto aspect-square" src="' . $atts['image'] . '" alt="">
  <div class="flex justify-between">
    <div>
      <h4 class="font-light text-2xl leading-tight mb-1">' . $atts['name'] . '</h4>
      <div class="font-semibold">' . $atts['title'] . '</div>
    </div>
    <div class="flex-none">
      <div class="relative w-5 h-5 mt-2 ml-8">
        <span class="inline-block h-0.5 w-5 bg-fiap-teal absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
        <span class="inline-block h-5 w-0.5 bg-fiap-teal absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
      </div>
    </div>
  </div>
</div>';
  return $output;
}
?>
<section id="" class="py-16 border-y border-gray-200 bg-white">
  <div class="container mx-auto py-24">
    <div class="mx-auto max-w-prose">
      <h2 class="text-[34px] font-semibold leading-tight mb-12 text-center">The Team</h2>
      <div class="prose text-center max-w-none">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="grid grid-cols-3 divide-x divide-neutral-200 border border-neutral-200 mt-16">
      <?php echo team_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-01.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo team_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-02.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo team_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-03.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>

    </div>
  </div>
</section>

<?php
function advisory_card($atts = array())
{
  $atts = shortcode_atts(array(
    'image'  => '',
    'name' => '',
    'title' => '',
  ), $atts);

  $output = '';

  $output .= '<div class="p-16">
  <img class="rounded-full mb-4 mx-auto aspect-square" src="' . $atts['image'] . '" alt="">
  <div class="flex justify-between">
    <div>
      <h4 class="font-light text-xl leading-tight mb-1">' . $atts['name'] . '</h4>
      <div class="font-semibold text-sm">' . $atts['title'] . '</div>
    </div>
    <div class="flex-none">
      <div class="relative w-5 h-5 mt-2 ml-8">
        <span class="inline-block h-0.5 w-5 bg-fiap-teal absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
        <span class="inline-block h-5 w-0.5 bg-fiap-teal absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></span>
      </div>
    </div>
  </div>
</div>';
  return $output;
}
?>
<section id="" class="py-16 border-y border-gray-200 bg-fiap-light">
  <div class="container mx-auto py-24">
    <div class="mx-auto max-w-prose">
      <h2 class="text-[34px] font-semibold leading-tight mb-12 text-center">FIAP Advisory Group</h2>
      <div class="prose text-center max-w-none">
        <p>The FIAP Program was developed with support from CSI, UNSW, EY, and the Australian Government.
          CSI and EY continue to provide program support, progress verification, and evaluation.
          The FIAP Program is also supported by the following Advisory Group members:</p>
      </div>
    </div>
    <div class="grid grid-cols-4 mt-16">
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-01.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-02.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-03.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-04.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-05.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-06.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-01.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>
      <?php echo advisory_card(
        array(
          'image' => get_stylesheet_directory_uri() . '/assets/images/content/team-02.jpg',
          'name' => 'Lorem Ipsum',
          'title' => 'Designation'
        )
      ) ?>

    </div>
  </div>
</section>
<?php get_footer(); ?>