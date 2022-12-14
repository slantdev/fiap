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
    $output .= '<div class="aspect-w-16 aspect-h-11"><img class="w-full h-full object-center object-cover" src="' . $atts['image'] . '" alt=""></div>';
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

function card_hover($atts = array())
{
  $atts = shortcode_atts(array(
    'img_src'  => '',
    'title'  => '',
    'excerpt'  => '',
    'link'  => '#',
  ), $atts);

  $img_src = $atts['img_src'];
  $title = $atts['title'];
  $excerpt = $atts['excerpt'];
  $link = $atts['link'];

  $output = '';
  $output .= '<a href="' . $link . '" class="card-hover h-full rounded-xl bg-slate-100 relative overflow-hidden cursor-pointer shadow-md">';
  $output .= '<div class="aspect-w-1 aspect-h-1">';
  $output .= '<img class="card-image object-center object-cover" src="' . $img_src . '" alt="' . $title . '">';
  $output .= '</div>';
  $output .= '<div class="card-text">
      <h3 class="card-title">' . $title . '</h3>
      <div class="card-excerpt">
      ' . $excerpt . '
      </div>
      <button type="button" class="bg-white p-4 absolute right-6 bottom-6 rounded-full w-8 h-8 xl:w-12 xl:h-12">
        <span class="block w-4 h-1 bg-fiap-darkblue absolute top-1/2 -translate-y-1/2"></span>
        <span class="block w-1 h-4 bg-fiap-darkblue absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2"></span>
      </button>
    </div>
  </a>';
  return $output;
}

function card_article($atts = array())
{
  $atts = shortcode_atts(array(
    'img_src'  => '',
    'title'  => '',
    'date'  => '',
    'excerpt'  => '',
    'link'  => '#',
  ), $atts);

  $img_src = $atts['img_src'];
  $title = $atts['title'];
  $date = $atts['date'];
  $excerpt = $atts['excerpt'];
  $link = $atts['link'];

  $output = '';
  $output .= '<a href="' . $link . '" class="card-article flex flex-col h-full rounded-xl bg-white relative overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition duration-300">';
  $output .= '<div class="aspect-w-16 aspect-h-11 flex-none">';
  $output .= '<img class="w-full h-full object-center object-cover" src="' . $img_src . '" alt="' . $title . '">';
  $output .= '</div>';
  $output .= '<div class="flex flex-col px-6 pt-8 pb-6 xl:pt-12 relative grow">';
  $output .= '<div class="bg-fiap-teal text-white rounded-full flex w-16 h-16 xl:w-[4.5rem] xl:h-[4.5rem] items-center justify-center p-4 absolute right-6 xl:right-8 -top-9">'
    . fiap_icon(array('icon' => 'news', 'group' => 'brand', 'size' => '64', 'class' => 'text-white w-14 h-14 xl:w-16 xl:h-16')) .
    '</div>';
  $output .= '<div class="font-medium mb-4 text-gray-500 text-sm xl:text-base">' . $date . '</div>
      <h3 class="text-[24px] font-semibold leading-[1.25em] mb-4 line-clamp-2">' . $title . '</h3>
      <div class="card-excerpt mb-8 text-gray-500 text-sm xl:text-base">' . $excerpt . '</div>
      <button type="button" class="mt-auto text-fiap-teal text-left text-sm xl:text-base">LEARN MORE</button>
    </div>
  </a>';
  return $output;
}

function card_papers($atts = array())
{
  $atts = shortcode_atts(array(
    'date' => '',
    'title'  => '',
    'link'  => '#',
    'terms' => ''
  ), $atts);

  $date = $atts['date'];
  $title = $atts['title'];
  $link = $atts['link'];
  $terms = $atts['terms'];

  $output = '';

  $output .= '<div class="rounded-lg bg-fiap-light p-6 xl:py-10 xl:px-10 flex flex-col border border-neutral-200">';
  $output .= '<div class="text-sm uppercase tracking-wider mb-4 text-neutral-500">' . $date . '</div>';
  $output .= '<h3 class="text-xl leading-tight mb-6"><a href="' . $link . '" class="hover:underline">' . $title . '</a></h3>';
  if ($terms) {
    $output .= '<div class="flex flex-wrap gap-3 mb-10">';
    foreach ($terms as $term) {
      $output .= '<div class="rounded-md border border-fiap-red py-2 px-4 text-sm bg-white text-center whitespace-nowrap text-fiap-red">' . $term . '</div>';
    }
    $output .= '</div>';
  }

  $output .= '<div class="mt-auto">
    <a href="' . $link . '" class="inline-block bg-fiap-darkblue text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent hover:brightness-150 hover:shadow-lg transition-all duration-300">Read Report</a>
  </div>';
  $output .= '</div>';
  return $output;
}

function card_fiap_members($atts = array())
{
  $atts = shortcode_atts(array(
    'img_src'  => '',
    'title'  => '',
    'excerpt'  => '',
    'link'  => '#',
  ), $atts);

  $img_src = $atts['img_src'];
  $title = $atts['title'];
  $excerpt = $atts['excerpt'];
  $link = $atts['link'];

  $output = '';
  $output .= '<a href="' . $link . '" class="card-fiap-member h-full rounded-xl aspect-w-5 aspect-h-4 bg-white relative overflow-hidden cursor-pointer border border-solid border-slate-200 shadow-md">';
  $output .= '<div class="w-full h-3/4 p-6">';
  $output .= '<img class="card-image h-full w-full object-scale-down" src="' . $img_src . '" alt="' . $title . '">';
  $output .= '</div>';
  $output .= '<div class="card-text transition-all duration-300 bg-fiap-darkblue bg-opacity-80 p-6 h-full w-full text-white absolute top-3/4 left-0 right-0">
      <h3 class="card-title text-2xl font-semibold line-clamp-1">' . $title . '</h3>
      <div class="card-excerpt mt-10 text-base opacity-0 transition duration-300">
      ' . $excerpt . '
      </div>
      <button type="button" class="bg-white p-4 absolute right-6 bottom-6 rounded-full w-12 h-12">
        <span class="block w-4 h-1 bg-fiap-darkblue absolute top-1/2 -translate-y-1/2"></span>
        <span class="block w-1 h-4 bg-fiap-darkblue absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2"></span>
      </button>
    </div>
  </a>';
  return $output;
}

function card_team_member($atts = array())
{
  $atts = shortcode_atts(array(
    'layout' => '',
    'team_photo'  => '',
    'team_name'  => '',
    'team_position'  => '',
    'team_bio' => '',
    'team_linkedin' => '',
    'team_email' => '',
    'team_mobile' => ''
  ), $atts);

  if (empty($atts['team_name']))
    return;

  $slug = fiap_slugify($atts['team_name']) . '-' . rand(11, 99);

  $output = '';
  if ($atts['layout'] == 'layout-01') {
    $output .= '<button type="button" class="block w-full max-w-md text-left bg-white border border-solid border-slate-200 py-8 px-6 xl:px-12" data-bs-toggle="modal" data-bs-target="#' . $slug . '">';
  } else {
    $output .= '<button type="button" class="block w-full text-left" data-bs-toggle="modal" data-bs-target="#' . $slug . '">';
  }
  $output .= '<div class="max-w-xs mx-auto">';
  $output .= '<div class="mb-3 max-w-[200px] mx-auto xl:mb-4"><img class="rounded-full mx-auto" src="' . $atts['team_photo'] . '" alt=""></div>';
  $output .= '<div class="flex">
      <div>
        <h4 class="text-lg font-thin text-black xl:text-2xl">' . $atts['team_name'] . '</h4>
        <h5 class="font-semibold text-black text-sm lg:text-base">' . $atts['team_position'] . '</h5>
      </div>
      <div class="ml-auto pl-3 pt-1.5 lg:pl-4 xl:pt-2">' . fiap_icon(array('icon' => 'plus-thin', 'group' => 'utility', 'size' => 24, 'class' => 'h-3 w-auto text-fiap-teal xl:h-5')) . '</div>
    </div>';
  $output .= '</div>';
  $output .= '</button>';

  $output .= '<div id="' . $slug . '" aria-labelledby="' . $slug . '" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-xl outline-none text-current overflow-hidden">
        <button type="button" class="btn-close z-10 absolute top-4 right-4 box-content w-6 h-6 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body relative">
          <div class="flex flex-wrap md:flex-nowrap">
            <div class="w-full md:w-1/2">
              <div class="w-full h-auto md:h-full">
                <img class="w-full h-full md:object-cover" src="' . $atts['team_photo'] . '" alt="">
              </div>
            </div>
            <div class="w-full md:w-1/2">
              <div class="flex flex-col py-6 px-6 max-h-[512px] md:p-8">
                <div class="pt-0 mb-4 md:pt-4 md:mb-8">
                  <h4 class="text-black text-2xl font-thin md:text-3x;">' . $atts['team_name'] . '</h4>
                  <h5 class="text-black text-xl font-semibold md:text-2xl">' . $atts['team_position'] . '</h5>
                </div>
                <div class="overflow-y-auto text-base">' . $atts['team_bio'] . '</div>
                <div class="mt-auto pt-6 md:pt-8">
                  <ul class="flex items-center gap-x-4">';
  if ($atts['team_linkedin']) {
    $output .= '<li><a href="' . $atts['team_linkedin'] . '" class="inline-block">' . fiap_icon(array('icon' => 'team-linkedin', 'group' => 'utility', 'size' => false, 'class' => 'text-black')) . '</a></li>';
  }
  if ($atts['team_email']) {
    $output .= '<li><a href="' . $atts['team_email'] . '" class="inline-block">' . fiap_icon(array('icon' => 'team-email', 'group' => 'utility', 'size' => false, 'class' => 'text-black')) . '</a></li>';
  }
  if ($atts['team_mobile']) {
    $output .= '<li><a href="' . $atts['team_mobile'] . '" class="inline-block">' . fiap_icon(array('icon' => 'team-mobile', 'group' => 'utility', 'size' => false, 'class' => 'text-black')) . '</a></li>';
  }

  $output .= '</ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';

  return $output;
}

function card_shortcut($atts = array())
{
  $atts = shortcode_atts(array(
    'img_src'  => '',
    'title'  => '',
    'link'  => '#',
  ), $atts);

  $img_src = $atts['img_src'];
  $title = $atts['title'];
  $link = $atts['link'];

  $output = '';
  $output .= '<a href="' . $link . '" class="card-shortcut block relative w-full h-full rounded-lg aspect-w-1 aspect-h-1 bg-slate-100 cursor-pointer shadow-md overflow-hidden">';
  $output .= '<img class="h-full w-full object-center object-cover rounded-xl transition-all duration-300" src="' . $img_src . '" alt="' . $title . '">';
  $output .= '<div class="absolute w-full h-full inset-0 z-10 flex items-center justify-center bg-black/50 p-6 rounded-xl text-center">
      <h3 class="text-white text-xl lg:text-3xl">' . $title . '</h3>
    </div>
  </a>';
  return $output;
}
