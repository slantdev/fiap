<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,900;1,300;1,400;1,500;1,600;1,900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-lg'); ?>>

  <?php do_action('fiap_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col">

    <?php do_action('fiap_header'); ?>

    <header>

      <div class="mx-auto container">
        <div class="lg:flex lg:justify-between lg:items-center pt-11 pb-6">
          <div class="flex w-full justify-between items-center">
            <div>
              <a href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-fiap.svg'  ?>" alt="FIAP" class=""></a>
            </div>

            <div class="flex items-center gap-x-4">
              <button type="button" class="bg-fiap-teal text-white text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-transparent shadow-md hover:bg-fiap-teal-hover hover:shadow-lg transition-all duration-300">Member Login</button>
              <button type="button" class="bg-white text-fiap-darkblue text-sm font-semibold leading-none text-center rounded-lg py-3 px-8 border border-fiap-darkblue shadow-md hover:border-transparent hover:bg-fiap-darkblue hover:text-white hover:shadow-lg transition-all duration-300">Contact Us</button>
              <button type="button" class="text-white bg-fiap-darkblue rounded-full p-3 shadow-md hover:shadow-lg transition-all duration-300"><?php echo fiap_icon(array('icon' => 'accessibility', 'group' => 'utility', 'size' => '24', 'class' => '')) ?></button>
            </div>
            <div class="lg:hidden">
              <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                    <g id="icon-shape">
                      <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                    </g>
                  </g>
                </svg>
              </a>
            </div>
          </div>


        </div>
      </div>

      <div class="bg-fiap-darkblue">
        <div class="mx-auto container">
          <div class="flex justify-between items-end">
            <?php
            wp_nav_menu(
              array(
                'container_id'    => 'primary-menu',
                'container_class' => '',
                'menu_class'      => 'flex text-white items-end gap-x-14 text-base',
                'theme_location'  => 'primary',
                'li_class'        => '',
                'fallback_cb'     => false,
              )
            );
            ?>
            <div class="py-3">
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