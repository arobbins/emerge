<?php


/*

Template Name: Custom Template

*/

/*

Header

*/
get_template_part('components/header/header');


/*

Components

*/
if(have_rows('components')):

  while(have_rows('components')) : the_row();

    // Marquee
    if(get_row_layout() == 'component_marquee'):

      get_template_part('components/marquee/marquee');

    // What we do
    elseif(get_row_layout() == 'component_what_we_do'):

      get_template_part('components/what-we-do/what-we-do');

    // Partners
    elseif(get_row_layout() == 'component_partners'):

      get_template_part('components/partners/partners');

    // Who we are
    elseif(get_row_layout() == 'component_who_we_are'):

      get_template_part('components/who-we-are/who-we-are');

    // Connect
    elseif(get_row_layout() == 'component_connect'):

      get_template_part('components/connect/connect');

    endif;

  endwhile;

else:

endif;


/*

Footer

*/
get_template_part('components/footer/footer');
