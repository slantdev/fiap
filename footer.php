</main>

<?php do_action('fiap_content_end'); ?>

</div>

<?php do_action('fiap_content_after'); ?>


<footer class="site-footer bg-white border-t border-solid border-slate-200" role="contentinfo">
  <?php do_action('fiap_footer'); ?>

  <div class="container mx-auto border-b border-neutral-300 py-12 md:py-16 lg:py-24">
    <div class="flex flex-wrap gap-y-10 lg:flex-nowrap lg:gap-x-24 xl:gap-x-32 items-center">
      <div class="w-full lg:w-3/5">
        <div class="flex flex-wrap gap-y-10 md:flex-nowrap md:divide-x md:divide-neutral-300 md:space-x-6">
          <img class="h-16 xl:h-20" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-goodshepherd.svg'  ?>" />
          <img class="h-16 xl:h-20 md:pl-6" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-fiap.svg'  ?>" />
        </div>
      </div>
      <div class="w-full lg:w-2/5">
        The FIAP Program is supported by Good Shepherd Australia New Zealand.
      </div>
    </div>
  </div>
  <div class="container mx-auto">
    <div class="flex flex-wrap lg:flex-nowrap">
      <div class="w-full lg:w-1/2">
        <div class="py-12 lg:py-20">
          <div class="prose max-w-md">
            <?php
            $footer_text = get_field('footer_text', 'option');
            if ($footer_text) {
              echo $footer_text;
            } else {
              echo 'We acknowledge Aboriginal and Torres Strait Islander people as the traditional custodians of this land and pay our respects to their history, their living culture and to Elders past and present.';
            } ?>
          </div>
          <div class="mt-10 lg:mt-24">
            <div class="flex items-center my-4 gap-4">
              <img class="w-auto h-10 md:h-12" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/AustralianAboriginalFlag.png' ?>" width="80" height="48" alt="Australian Aboriginal">
              <img class="w-auto h-10 md:h-12" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/TorresStraitIslanderFlag.png' ?>" width="80" height="48" alt="Torress Strait Island">
              <img class="w-auto h-10 md:h-12" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/ProgressPrideFlag.png' ?>" width="80" height="48" alt="Prograss Pride">
              <img class="w-auto h-14 md:h-16" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flags/RegisteredCharity.png' ?>" width="64" height="64" alt="registered charity">
            </div>
          </div>
        </div>
      </div>
      <div class="w-full pb-12 lg:pb-0 lg:w-1/2">
        <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-8 xl:gap-x-20">
          <div class="w-full py-6 lg:py-20 md:w-1/3">
            <h4 class="font-semibold mb-6 text-xl 2xl:text-2xl">Helpful Links</h4>
            <?php
            wp_nav_menu(
              array(
                'menu'            => 'helpful-links',
                'container_id'    => 'helpful-links-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col gap-y-2 lg:gap-y-4',
                'li_class'        => 'text-base 2xl:text-lg',
                'fallback_cb'     => false,
              )
            );
            ?>
          </div>
          <div class="w-full py-6 lg:py-20 md:w-1/3">
            <h4 class="font-semibold mb-6 text-xl 2xl:text-2xl">About Us</h4>
            <?php
            wp_nav_menu(
              array(
                'menu'            => 'about-us',
                'container_id'    => 'about-us-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col gap-y-2 lg:gap-y-4',
                'li_class'        => 'text-base 2xl:text-lg',
                'fallback_cb'     => false,
              )
            );
            ?>
          </div>
          <div class="w-full py-6 lg:py-20 md:w-1/3">
            <h4 class="font-semibold mb-6 text-xl 2xl:text-2xl">Get in Touch</h4>
            <?php
            wp_nav_menu(
              array(
                'menu'            => 'get-in-touch',
                'container_id'    => 'get-in-touch-menu',
                'container_class' => '',
                'menu_class'      => 'flex flex-col gap-y-2 lg:gap-y-4',
                'li_class'        => 'text-base 2xl:text-lg',
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
      <div class="flex flex-col items-center gap-y-6 md:flex-row md:items-start md:justify-between text-sm">
        <div class="md:whitespace-nowrap">&copy;<?php echo date_i18n('Y'); ?> Good Shepherd AU & NZ</div>
        <div class="flex flex-col items-center gap-y-6 md:items-end lg:flex-row">

          <?php
          $footer_links = get_field('footer_links', 'options');
          if ($footer_links) {
            echo '<div>';
            echo '<ul class="flex flex-col gap-y-3 text-center whitespace-nowrap md:flex-row md:gap-x-10 lg:gap-x-10 xl:gap-x-16 items-center">';
            foreach ($footer_links as $link) {
              echo '<li><a href="' . $link['link']['url'] . '" target="' . $link['link']['target'] . '">' . $link['link']['title'] . '</a></li>';
            }
            echo '</ul>';
            echo '</div>';
          }
          ?>
          <div class="ml-0 lg:ml-28 xl:ml-48 whitespace-nowrap">
            <div class="flex gap-x-2">
              <?php
              $social_links = get_field('social_links', 'options');
              $facebook = $social_links['facebook'];
              $instagram = $social_links['instagram'];
              $twitter = $social_links['twitter'];
              $linked_in = $social_links['linked_in'];
              $youtube = $social_links['youtube'];

              if ($facebook) {
                echo '<a href="' . $facebook['url'] . '" class="inline-block" target="_blank">' . fiap_icon(array('icon' => 'facebook', 'group' => 'social', 'size' => '24', 'class' => 'text-fiap-dark-blue')) . '</a>';
              }
              if ($instagram) {
                echo '<a href="' . $instagram['url'] . '" class="inline-block" target="_blank">' . fiap_icon(array('icon' => 'instagram', 'group' => 'social', 'size' => '24', 'class' => 'text-fiap-dark-blue')) . '</a>';
              }
              if ($twitter) {
                echo '<a href="' . $twitter['url'] . '" class="inline-block" target="_blank">' . fiap_icon(array('icon' => 'twitter', 'group' => 'social', 'size' => '24', 'class' => 'text-fiap-dark-blue')) . '</a>';
              }
              if ($linked_in) {
                echo '<a href="' . $linked_in['url'] . '" class="inline-block" target="_blank">' . fiap_icon(array('icon' => 'linkedin', 'group' => 'social', 'size' => '24', 'class' => 'text-fiap-dark-blue')) . '</a>';
              }
              if ($youtube) {
                echo '<a href="' . $youtube['url'] . '" class="inline-block" target="_blank">' . fiap_icon(array('icon' => 'youtube', 'group' => 'social', 'size' => '24', 'class' => 'text-fiap-dark-blue')) . '</a>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>