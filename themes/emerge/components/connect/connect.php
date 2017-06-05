<?php

$addressLine1 = get_field('theme_address_line_1', 'option');
$addressLine2 = get_field('theme_address_line_2', 'option');

$address = $addressLine1 . ', ' . $addressLine2;

$mapURL = 'https://www.google.com/maps/place/' . urlencode($address) . '/@44.8651699,-93.1635963,17z/data=!3m1!4b1!4m5!3m4!1s0x87f62c15b45aa667:0x95ed439da11e290d!8m2!3d44.8651699!4d-93.1614076';

?>

<section class="component component-get-connected" id="connect">

  <div class="container">

    <h1 class="header_black"><?php the_sub_field('heading'); ?></h1>

    <div class="row">

      <div class="col-md-6">
        <div id="map"></div>
        <address class="map-address">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/logo-secondary.svg" alt="Emerge Retail" class="logo">
          <a href="<?php echo $mapURL; ?>" class="map-address-content">
            <?php echo $addressLine1; ?><br>
            <?php echo $addressLine2; ?>
          </a>
        </address>
      </div>

      <div class="col-md-6">
        <?php echo do_shortcode( get_sub_field('form') ); ?>
      </div>

    </div>

  </div>

</section>
