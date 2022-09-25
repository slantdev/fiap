</main>

<?php do_action('fiap_content_end'); ?>

</div>

<?php do_action('fiap_content_after'); ?>


<footer class="site-footer bg-white border-t border-solid border-slate-200" role="contentinfo">
  <?php do_action('fiap_footer'); ?>

  <div class="container mx-auto border-b border-neutral-300 py-24">
    <div class="flex gap-x-32 items-center">
      <div class="w-3/5">
        <div class="flex divide-x divide-neutral-300 space-x-6">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-goodshepherd.svg'  ?>" />
          <img class="pl-6" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-fiap.svg'  ?>" />
        </div>
      </div>
      <div class="w-2/5">
        The FIAP Program is supported by Good Shepherd Australia New Zealand.
      </div>
    </div>
  </div>
  <div class="container mx-auto">
    <div class="flex">
      <div class="w-1/2">
        <div class="py-20">
          <div class="prose max-w-md">
            We acknowledge Aboriginal and Torres Strait Islander people as the traditional custodians of this land and pay our respects to their history, their living culture and to Elders past and present.
          </div>
          <div class="mt-24">
            <div class="flex items-center my-4 gap-4">
              <img class="w-auto h-10 md:h-12" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/AustralianAboriginalFlag.png' ?>" width="80" height="48" alt="Australian Aboriginal">
              <img class="w-auto h-10 md:h-12" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/TorresStraitIslanderFlag.png' ?>" width="80" height="48" alt="Torress Strait Island">
              <img class="w-auto h-10 md:h-12" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/ProgressPrideFlag.png' ?>" width="80" height="48" alt="Prograss Pride">
              <img class="w-auto h-14 md:h-16" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/RegisteredCharity.png' ?>" width="64" height="64" alt="registered charity">
            </div>
          </div>
        </div>
      </div>
      <div class="w-1/2">
        <div class="flex gap-x-20">
          <div class="py-20 w-1/3">
            <h4 class="font-semibold mb-6 text-2xl">Helpful Links</h4>
            <?php
            wp_nav_menu(
              array(
                'menu'            => 'helpful-links',
                'container_id'    => 'helpful-links-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col gap-y-4',
                'li_class'        => '',
                'fallback_cb'     => false,
              )
            );
            ?>
          </div>
          <div class="py-20 w-1/3">
            <h4 class="font-semibold mb-6 text-2xl">About Us</h4>
            <?php
            wp_nav_menu(
              array(
                'menu'            => 'about-us',
                'container_id'    => 'about-us-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col gap-y-4',
                'li_class'        => '',
                'fallback_cb'     => false,
              )
            );
            ?>
          </div>
          <div class="py-20 w-1/3">
            <h4 class="font-semibold mb-6 text-2xl">Get in Touch</h4>
            <?php
            wp_nav_menu(
              array(
                'menu'            => 'get-in-touch',
                'container_id'    => 'get-in-touch-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col gap-y-4',
                'li_class'        => '',
                'fallback_cb'     => false,
              )
            );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-fiap-light py-8">
    <div class="container mx-auto">
      <div class="flex justify-between text-sm">
        <div>&copy;<?php echo date_i18n('Y'); ?> Good Shepherd AU & NZ</div>
        <div class="flex">
          <div>
            <ul class="flex gap-x-16 items-center">
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
          <div class="ml-48">Social Icons</div>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>