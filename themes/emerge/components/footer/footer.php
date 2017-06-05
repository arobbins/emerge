<footer class="component component-footer">

  <div class="container">
    <div class="row">

      <!-- Footer col 1 -->
      <div class="col-md-3 col-sm-6 col-xs-12 footer-col footer-col-logo">
        <div class="footer_logoSec">
          <?php $logo = get_field('theme_logo', 'options'); ?>
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="footerLogo">
        </div>
      </div>

      <!-- Footer col 2 -->
      <div class="col-md-3 col-sm-6 col-xs-12 footer-col">
        <div class="footer_quickNav">
          <ul>
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
              endif;
            ?>
          </ul>
        </div>
      </div>

      <!-- Footer col 3 -->
      <div class="col-md-3 col-sm-6 col-xs-12 footer-col footer-col-address">
        <div class="footer_contact">

          <?php
            $addressLine1 = get_field('theme_address_line_1', 'option');
            $addressLine2 = get_field('theme_address_line_2', 'option');
          ?>

          <address>
          <?php echo $addressLine1; ?><br>
          <?php echo $addressLine2; ?>

          <p class="footer-phone"><?php the_field('theme_contact_phone', 'option'); ?></p><br>

          <a href="mailto:<?php the_field('theme_contact_email', 'option'); ?>"><?php the_field('theme_contact_email', 'option'); ?></a>
          </address>

        </div>
      </div>

      <!-- Footer col 4 -->
      <div class="col-md-3 col-sm-6 col-xs-12 footer-col footer-col-search">
        <div class="footer_search">

          <div class="form-search-wrapper">
            <?php // get_search_form(); ?>
          </div>

          <div class="footer_sm">
            <a href="<?php the_field('theme_social_facebook', 'option'); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/fb_logo.png" class="footer_sm_logo">
            </a>

            <a href="<?php the_field('theme_social_twitter', 'option'); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/twitter_logo.png" class="footer_sm_logo">
            </a>

            <a href="<?php the_field('theme_social_linkedin', 'option'); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/linkedin_logo.png" class="footer_sm_logo">
            </a>
          </div>

        </div>
      </div>

    </div>

  </div>

  <div class="footer-bottom row">
    <div class="col-md-12 thin_footer">
      <h6>&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?></h6>
    </div>
  </div>

</footer>
