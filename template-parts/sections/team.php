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

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="<?php echo $section_container_class ?>">
    <?php get_template_part('template-parts/components/heading', '', array('field' => 'heading', 'class' => 'text-center max-w-screen-lg mx-auto')); ?>
    <?php get_template_part('template-parts/components/description', '', array('field' => 'description', 'class' => 'max-w-screen-lg xl:prose-lg')); ?>

    <?php
    $team_category = get_sub_field('team_category');
    $team_layout = get_sub_field('team_layout');
    $args = array(
      'post_type' => 'team',
      'posts_per_page' => -1,
      'tax_query' => array(
        'relation' => 'AND',
        array(
          'taxonomy' => 'team_category',
          'field'    => 'id',
          'terms'    => $team_category,
        ),
      ),
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) {

      if ($team_layout == 'layout-01') {
        //echo '<div class="grid grid-cols-1 gap-y-0 mt-8 md:grid-cols-3 md:gap-y-10 lg:gap-y-12 lg:mt-12 xl:gap-y-0">';
        echo '<div class="flex flex-wrap md:flex-nowrap mt-8 lg:mt-12 justify-center">';
      } else {
        echo '<div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-4 md:gap-x-8 md:gap-y-10 lg:gap-x-24 lg:gap-y-12 lg:mt-20 xl:gap-x-44 xl:gap-y-16">';
      }
      while ($the_query->have_posts()) {
        $the_query->the_post();
        $atts = array(
          'layout' => $team_layout,
          'team_photo'  => get_field('team_image')['url'],
          'team_name'  => get_the_title(),
          'team_position'  => get_field('team_position'),
          'team_bio' => get_field('team_bio'),
          'team_linkedin' => get_field('team_linked_in'),
          'team_email' => get_field('team_email'),
          'team_mobile' => get_field('team_phone')
        );
        echo card_team_member($atts);
      }
      echo '</div>';
    }
    wp_reset_postdata();
    ?>

  </div>
</section>