<section class="component component-get-connected" id="connect">

  <div class="container">

    <h1 class="header_black">Get connected</h1>

    <div class="row">

      <div class="col-md-6">
        <div id="map"></div>
        <address class="map-address">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/logo-secondary.svg" alt="Emerge Retail" class="logo">
          <a href="https://www.google.com/maps/place/1300+Mendota+Heights+Rd,+Mendota+Heights,+MN+55120/@44.8651699,-93.1635963,17z/data=!3m1!4b1!4m5!3m4!1s0x87f62c15b45aa667:0x95ed439da11e290d!8m2!3d44.8651699!4d-93.1614076" class="map-address-content">
            1300 Mendota Heights Road<br>
            Mendota Heights, MN 55120
          </a>
        </address>
      </div>

      <div class="col-md-6">
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
      </div>

    </div>

  </div>

</section>
