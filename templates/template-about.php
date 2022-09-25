<?php

/**
 * Template Name: About
 * Template Post Type: page
 *
 */
get_header();
?>

<section id="page-banner" class="">
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
        <li>About FIAP</li>
      </ul>
    </div>
  </div>
</section>

<section id="right-image-text" class="">
  <div class="bg-white py-36">
    <div class="container mx-auto">
      <div class="flex gap-x-36">
        <div class="w-1/3 order-2">
          <img class="w-full h-full aspect-[3/4] object-cover rounded-xl" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg' ?>" alt="">
        </div>
        <div class="w-2/3 order-1">
          <div class="prose max-w-none">
            <h2 class="text-[34px] font-semibold leading-[1.1em] mt-12">Financial distress is now Australia’s most significant welfare issue.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eu, nunc adipiscing risus sit tristique eget lacinia. Lacus, velit eget molestie quis tellus neque, vel, consectetur. Amet, non euismod ornare et. In porta augue tristique morbi.</p>
            <p>Vulputate donec mattis maecenas non in. Pulvinar vitae proin volutpat morbi integer leo. Odio amet viverra auctor integer nulla. Volutpat magna nunc purus dictum sit dignissim quis. In urna ultricies felis elementum neque lacus sit tincidunt in. Vitae mauris nibh condimentum vitae cra.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="left-image-text" class="">
  <div class="bg-fiap-teal py-36">
    <div class="container mx-auto">
      <div class="flex gap-x-36">
        <div class="w-1/3 order-1">
          <img class="w-full h-full aspect-[3/4] object-cover rounded-xl" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/content/img-01.jpg' ?>" alt="">
        </div>
        <div class="w-2/3 order-2">
          <div class="prose max-w-none text-white">
            <h2 class="text-[34px] font-semibold leading-[1.1em] mt-12 text-white">FIAP Program Background</h2>
            <p>Financial Inclusion Action Plans provide an opportunity for organisations to explore their current business operations and to identify potential future actions to support financial inclusion and resilience. The FIAP program provides a robust framework to support this, including quality assurance, monitoring and evaluation. Joining the FIAP Program also provides opportunities to learn from and collaborate with leading organisations from diverse sectors.</p>
          </div>
        </div>
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

<section id="features-card" class="py-16 bg-fiap-light">
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

<section id="numbers-card" class="py-16 bg-white">
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

<section id="" class="py-16 bg-white border-t border-neutral-200">
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

<?php get_footer(); ?>