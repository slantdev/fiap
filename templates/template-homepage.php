<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 */
get_header();
?>

<section id="page-slider">
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
          <h1 class="text-[54px] font-light leading-[1.1em] mb-6">Financial wellbeing is everyone’s business</h1>
          <div class="text-lg mb-12">FIAP Members recognise that Financial Wellbeing is everyone’s business. 28% of Australians report low financial wellbeing, with women experiencing lower wellbeing than men (ANZ 2021). The FIAP Program supports our members to address barriers to financial inclusion and wellbeing,</div>
          <a href="#" class="inline-block bg-white text-fiap-teal text-[21px] font-medium leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:shadow-lg transition-all duration-300">Learn more</a>
        </div>
        <div class="absolute z-10 top-4">
          <?php echo fiap_icon(array('icon' => 'fiap-logo-overlay', 'group' => 'others', 'size' => '480', 'class' => '-translate-x-1/2')) ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-fiap-light py-12 md:py-16">
  <div class="container mx-auto">
    <div class="flex flex-wrap justify-center items-center">
      <div class="mb-4 md:mb-0 md:mr-8"><span class="text-fiap-darkblue text-2xl font-semibold leading-tight">I'm looking for</span></div>
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
          <ul class="dropdown-menu min-w-max w-full absolute bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownSelect">
            <li>
              <a class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8" href="#">Option 1</a>
            </li>
            <li>
              <a class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8" href="#">Option 2</a>
            </li>
            <li>
              <a class="dropdown-item text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 lg:px-8" href="#">Option 3</a>
            </li>
          </ul>
        </div>
        <button type="button" class="bg-fiap-darkblue p-4 py-3 md:px-8 text-white text-2xl rounded-lg leading-7 hover:brightness-125">Go</button>
      </div>
    </div>
  </div>
</section>

<section id="text-center" class="">
  <div class="bg-white py-36">
    <div class="container mx-auto">
      <div class="prose mx-auto text-center">
        <h2 class="text-[34px] font-semibold leading-[1.1em] text-fiap-teal">What is a FIAP?</h2>
        <p>A FIAP (Financial Inclusion Action Plan) is an agreed strategy of practical actions that an organisation will undertake to improve financial inclusion in Australia. A FIAP provides an opportunity for these organisations to take real action to enable financial inclusion, resilience and wellbeing. Together with Good Shepherd Australia New Zealand, organisations are able to put together a series of measurable actions for their staff, customers, supply chain and community.</p>
        <a href="#" class="inline-block mt-12 bg-fiap-teal text-white text-[21px] font-semibold no-underline leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Learn more</a>
      </div>
    </div>
  </div>
</section>

<section id="left-image-text" class="">
  <div class="bg-fiap-light py-36">
    <div class="container mx-auto">
      <div class="flex gap-x-36">
        <div class="w-1/3 order-1">
          <img class="w-full h-full aspect-[3/4] object-cover rounded-xl" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg' ?>" alt="">
        </div>
        <div class="w-2/3 order-2">
          <div class="prose max-w-none">
            <h2 class="text-[34px] font-semibold leading-[1.1em] mt-12">Why join the FIAP Program?</h2>
            <p>Financial Inclusion Action Plans provide an opportunity for organisations to explore their current business operations and to identify potential future actions to support financial inclusion and resilience. The FIAP program provides a robust framework to support this, including quality assurance, monitoring and evaluation. Joining the FIAP Program also provides opportunities to learn from and collaborate with leading organisations from diverse sectors.</p>
            <a href="#" class="inline-block mt-12 bg-fiap-teal text-white text-[21px] font-semibold no-underline leading-none text-center rounded-lg py-4 px-10 border border-transparent hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="carousel" class="">
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
<section id="case-studies" class="">
  <div class="container mx-auto py-36">
    <div>
      <h2 class="text-[34px] font-semibold leading-[1.1em] text-fiap-teal mb-8">Our Case Studies</h2>
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

<section id="cta" class="bg-neutral-100">
  <div class="container mx-auto py-24">
    <div class="flex flex-col gap-y-24">
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
<section id="featured-news" class="bg-fiap-light">
  <div class="container mx-auto py-32">
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

<?php get_footer(); ?>