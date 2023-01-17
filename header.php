<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/images/icons/brand/logo.svg'  ?>" type="image/svg+xml">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/images/favicon.png'  ?>" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-lg'); ?>>

  <?php do_action('fiap_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col pt-[88px] lg:pt-[112px] xl:pt-0">

    <?php do_action('fiap_header'); ?>

    <header id="site-header" class="site-header fixed top-0 left-0 w-full z-40 bg-transparent xl:relative">

      <div class="header-top bg-white">
        <div class="flex w-full justify-between items-center">
          <div class="site-logo">
            <a href="<?php echo home_url() ?>"><img class="" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-fiap.svg'  ?>" alt="FIAP"></a>
          </div>
          <div class="site-header-buttons hidden xl:flex items-center gap-x-4">
            <?php
            if (!is_user_logged_in()) {
              echo '<a href="' . home_url() . '/login" class="inline-block bg-fiap-teal text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent shadow-md hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Member Login</a>';
            }
            ?>
            <a href="<?php echo home_url() ?>/contact-us" class="inline-block bg-white text-fiap-darkblue text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-fiap-darkblue shadow-md hover:border-transparent hover:bg-fiap-darkblue hover:text-white hover:shadow-lg transition-all duration-300">Contact Us</a>
            <?php
            if (is_user_logged_in()) {
            ?>
              <div class="faq-dropdown dropdown relative">
                <button class="dropdown-toggle focus:outline-none focus:ring-0 transition duration-150 ease-in-out flex items-center justify-between whitespace-nowrap" type="button" id="dropdownAccount" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo fiap_icon(array('icon' => 'account', 'group' => 'utility', 'size' => '32', 'class' => 'text-fiap-darkblue')); ?>
                </button>
                <ul class="dropdown-menu max-h-96 overflow-y-auto min-w-max w-36 absolute bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownAccount">
                  <li><a class="text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="/account/my-profile">My Profile</a></li>
                  <li><a class="text-base py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="<?php echo MeprUtils::logout_url(); ?>">Logout</a></li>
                </ul>
              </div>
            <?php
            }
            ?>
          </div>
          <button id="mobilemenuToggle" class="xl:hidden">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <div id="mobilemenuDrawer" class="">
        <div class="px-6 pt-24 pb-6">
          <?php
          wp_nav_menu(
            array(
              'container_id'    => 'mobile-menu',
              'container_class' => '',
              'menu_id'         => 'menu-mobile-menu',
              'menu_class'      => '',
              'theme_location'  => 'primary',
              'li_class'        => '',
              'fallback_cb'     => false,
              'walker' => new Mobile_Menu_Walker(),
            )
          );
          ?>
        </div>

        <?php
        if (!is_user_logged_in()) {
          echo '<div class="px-6 pt-6 border-t border-solid border-slate-200">';
          echo '<a href="' . home_url() . '/login" class="block bg-fiap-teal text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent shadow-md hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Member Login</a>';
          echo '</div>';
        }
        ?>
      </div>

      <div class="site-nav hidden xl:block bg-fiap-darkblue">
        <div class="mx-auto container">
          <div class="flex justify-between items-end">
            <?php
            wp_nav_menu(
              array(
                'container_id'    => 'desktop-menu',
                'container_class' => 'grow',
                'menu_id'         => 'menu-desktop-menu',
                'menu_class'      => 'flex text-white items-end justify-between text-base',
                'theme_location'  => 'primary',
                'li_class'        => '',
                'fallback_cb'     => false,
              )
            );
            ?>
            <div class="py-3 pl-10 flex-none">
              <!-- <form class="relative">
                <input type="text" placeholder="Search" class="rounded-md px-3 py-2.5 w-full min-w-[260px] border-transparent" />
                <?php echo fiap_icon(array('icon' => 'search', 'group' => 'utility', 'size' => '20', 'class' => 'absolute right-3 top-3 text-fiap-dark-blue')) ?>
              </form> -->
              <form id="header-searchform" class="flex relative bg-white border border-gray-100 shadow-xl rounded-md" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input id="searchform-input" type="text" class="text-gray-700 px-3 py-2 w-full min-w-[180px] bg-transparent border-transparent focus:outline-none focus:border-transparent focus:ring-0" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                <button class="flex-none w-[42px] h-[42px] flex items-center justify-center text-sm rounded-full bg-primary font-semibold text-fiap-dark-blue hover:bg-opacity-80 whitespace-nowrap cursor-pointer" type="submit">
                  <?php echo fiap_icon(array('icon' => 'search', 'group' => 'utility', 'size' => '20', 'class' => 'text-fiap-dark-blue')) ?>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="content" class="site-content flex-grow">

      <?php do_action('fiap_content_start'); ?>

      <main>