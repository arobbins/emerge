<?php

$partners = get_sub_field('partners');

?>

<section class="component component-partners">
  <div class="container">
    <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-10 col-sm-12">
        <h1 class="header_white">Some of our valued partners</h1>
        <ul class="multiple-items">
          <?php foreach ($partners as $key => $partner) { ?>
            <li class="partner_slide">
              <img src="<?php echo $partner['url']; ?>" alt="<?php echo $partner['alt']; ?>" class="partner_logo">
            </li>
          <?php } ?>
        </ul>
      </div>

      <div class="col-md-1"></div>

    </div>
  </div>
</section>
