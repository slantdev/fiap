<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
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
            <a href="<?php echo home_url() ?>/get-involved" class="inline-block bg-white text-fiap-darkblue text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-fiap-darkblue shadow-md hover:border-transparent hover:bg-fiap-darkblue hover:text-white hover:shadow-lg transition-all duration-300">Contact Us</a>
            <button type="button" class="text-white bg-fiap-darkblue rounded-full p-3 shadow-md hover:shadow-lg transition-all duration-300"><?php echo fiap_icon(array('icon' => 'accessibility', 'group' => 'utility', 'size' => '24', 'class' => '')) ?></button>
            <?php
            if (is_user_logged_in()) {
              echo '<a href="' . home_url() . '/account" class="inline-block text-fiap-darkblue transition-all duration-300">' . fiap_icon(array('icon' => 'account', 'group' => 'utility', 'size' => '32', 'class' => 'text-fiap-darkblue')) . '</a>';
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
      </div>

      <div class="site-nav hidden xl:block bg-fiap-darkblue">
        <div class="mx-auto container">
          <div class="flex justify-between items-end">
            <?php
            wp_nav_menu(
              array(
                'container_id'    => 'desktop-menu',
                'container_class' => '',
                'menu_class'      => 'flex text-white items-end gap-x-8 text-base 2xl:gap-x-14',
                'theme_location'  => 'primary',
                'li_class'        => '',
                'fallback_cb'     => false,
              )
            );
            ?>
            <div class="py-3 pl-6">
              <form class="relative">
                <input type="text" placeholder="Search" class="rounded-md px-3 py-2.5 w-full min-w-[260px] border-transparent" />
                <?php echo fiap_icon(array('icon' => 'search', 'group' => 'utility', 'size' => '20', 'class' => 'absolute right-3 top-3 text-fiap-dark-blue')) ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="content" class="site-content flex-grow">

      <?php do_action('fiap_content_start'); ?>

      <main>