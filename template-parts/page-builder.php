<?php
$term_id = get_queried_object()->term_id;
if ($term_id) {
  $the_id = 'term_' . $term_id;
} else {
  $the_id = get_the_ID();
}

if (have_rows('section', $the_id)) :

  // Loop through rows.
  while (have_rows('section', $the_id)) : the_row();

    if (get_row_layout() == 'card_features_list') :
      get_template_part('template-parts/sections/card_features_list');

    elseif (get_row_layout() == 'card_numbers') :
      get_template_part('template-parts/sections/card_numbers');

    elseif (get_row_layout() == 'card_image_content') :
      get_template_part('template-parts/sections/card_image_content');

    elseif (get_row_layout() == 'case_studies') :
      get_template_part('template-parts/sections/case_studies');

    elseif (get_row_layout() == 'cta_01') :
      get_template_part('template-parts/sections/cta_01');

    elseif (get_row_layout() == 'cta_02') :
      get_template_part('template-parts/sections/cta_02');

    elseif (get_row_layout() == 'contact_form') :
      get_template_part('template-parts/sections/contact_form');

    elseif (get_row_layout() == 'contact_cards') :
      get_template_part('template-parts/sections/contact_cards');

    elseif (get_row_layout() == 'build_fiap') :
      get_template_part('template-parts/sections/build_fiap');

    elseif (get_row_layout() == 'datatable') :
      get_template_part('template-parts/sections/datatable');

    elseif (get_row_layout() == 'faqs') :
      get_template_part('template-parts/sections/faqs');

    elseif (get_row_layout() == 'featured_news') :
      get_template_part('template-parts/sections/featured_news');

    elseif (get_row_layout() == 'fiap_journey') :
      get_template_part('template-parts/sections/fiap_journey');

    elseif (get_row_layout() == 'fiap_members') :
      get_template_part('template-parts/sections/fiap_members');

    elseif (get_row_layout() == 'help_links') :
      get_template_part('template-parts/sections/help_links');

    elseif (get_row_layout() == 'image_left_text') :
      get_template_part('template-parts/sections/image_left_text');

    elseif (get_row_layout() == 'image_right_text') :
      get_template_part('template-parts/sections/image_right_text');

    elseif (get_row_layout() == 'logo_carousel') :
      get_template_part('template-parts/sections/logo_carousel');

    elseif (get_row_layout() == 'slider_two_columns') :
      get_template_part('template-parts/sections/slider_two_columns');

    elseif (get_row_layout() == 'select_services') :
      get_template_part('template-parts/sections/select_services');

    elseif (get_row_layout() == 'team') :
      get_template_part('template-parts/sections/team');

    elseif (get_row_layout() == 'text_centered') :
      get_template_part('template-parts/sections/text_centered');

    elseif (get_row_layout() == 'timeline') :
      get_template_part('template-parts/sections/timeline');

    elseif (get_row_layout() == 'white_papers') :
      get_template_part('template-parts/sections/white_papers');

    endif;

  // End loop.
  endwhile;

// No value.
else :
// Do something...
endif;
