<?php

/*

Template Name: Custom Template

*/

$logo = get_field('theme_logo', 'options');

?>

<header class="component component-header">
  <div class="container">
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo">
    <nav class="nav-main">
      <ul>
        <li><a href="#do">WHAT WE DO</a></li>
        <li><a href="#are">WHO WE ARE</a></li>
        <li><a href="#connect">CONTACT</a></li>
      </ul>
    </nav>
  </div>
</header>

<section class="component component-marquee">
    <ul class="carousel-container">
       <li class="carousel-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/carousel-slide1.jpg')"></li>
       <li class="carousel-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/carousel-slide1.jpg')"></li>
       <li class="carousel-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/carousel-slide1.jpg')"></li>
    </ul>
</section>

<div id="do"></div>
<section class="component component-what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12 service-wrapper">
              <h1 class="service-heading">WHAT WE DO</h1>

                <header class="sercice-header">
                  <h4 class="service-sub-heading">OUR PROCESS</h4>
                  <p class="sercice-description">Nonummy nibh Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                </header>

                <div class="l-row l-row-justify">

                  <section class="service service-analytics is-active">
                    <i class="icon icon-l icon-analytics"></i>
                    <h2 class="service-title">Analytics</h2>
                  </section>

                  <section class="service service-sales is-active">
                    <i class="icon icon-l icon-sales"></i>
                    <h2 class="service-title">Sales</h2>
                  </section>

                  <section class="service service-branding">
                    <i class="icon icon-l icon-branding"></i>
                    <h2 class="service-title">Branding</h2>
                  </section>

                  <section class="service service-logistics">
                    <i class="icon icon-l icon-logistics"></i>
                    <h2 class="service-title">Logistics</h2>
                  </section>

                  <section class="service service-operations">
                    <i class="icon icon-l icon-operations"></i>
                    <h2 class="service-title">Operations</h2>
                  </section>

                  <section class="service service-strategy">
                    <i class="icon icon-l icon-strategy"></i>
                    <h2 class="service-title">Strategy</h2>
                  </section>

                  <section class="service service-transitions">
                    <i class="icon icon-l icon-transitions"></i>
                    <h2 class="service-title">Transitions</h2>
                  </section>

                </div>

                <section class="service-content-graph-wrapper">

                  <div class="service-content service-content-analytics is-active">
                    <i class="icon icon-s icon-analytics"></i>
                    <h3>Analytics</h3>
                    <p>Nulla sit amet est. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem.</p>
                  </div>

                  <div class="service-content service-content-sales is-active">
                    <i class="icon icon-s icon-sales"></i>
                    <h3>Sales</h3>
                    <p>Nullam cursus lacinia erat. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus.</p>
                  </div>

                  <div class="service-content service-content-branding">
                    <i class="icon icon-s icon-branding"></i>
                    <h3>Branding</h3>
                    <p>Nam adipiscing. Ut tincidunt tincidunt erat. Nunc nec neque. Vestibulum fringilla pede sit amet augue. Cras non dolor.</p>
                  </div>

                  <div class="service-content service-content-logistics">
                    <i class="icon icon-s icon-logistics"></i>
                    <h3>Logistics</h3>
                    <p>Maecenas malesuada. Aenean vulputate eleifend tellus. Quisque id odio. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Etiam ut purus mattis mauris sodales aliquam.</p>
                  </div>

                  <div class="service-content service-content-operations">
                    <i class="icon icon-s icon-operations"></i>
                    <h3>Operations</h3>
                    <p>Duis leo. Aenean massa. Curabitur vestibulum aliquam leo. Duis vel nibh at velit scelerisque suscipit. Vestibulum eu odio.</p>
                  </div>

                  <div class="service-content service-content-strategy">
                    <i class="icon icon-s icon-strategy"></i>
                    <h3>Strategy</h3>
                    <p>Morbi mattis ullamcorper velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam quis ante. Cras dapibus. Quisque rutrum.</p>
                  </div>

                  <div class="service-content service-content-transitions">
                    <i class="icon icon-s icon-transitions"></i>
                    <h3>Transitions</h3>
                    <p>Nulla consequat massa quis enim. Curabitur nisi. Fusce ac felis sit amet ligula pharetra condimentum. Aenean viverra rhoncus pede. Vivamus laoreet.</p>
                  </div>

                  <?php get_template_part('components/flow-graph/flow-graph'); ?>
                </section>


            </div>
        </div>
    </div>
</section>

<section class="component component-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 col-sm-12">
                <h1 class="header_white">Some of our valued partners</h1>
                  <ul class="multiple-items">
                    <li class="partner_slide">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/partner-bestbuy.png" alt="Best Buy" class="partner_logo">
                    </li>
                    <li class="partner_slide">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/partner-kohls.png" alt="Kohls" class="partner_logo">
                    </li>
                    <li class="partner_slide">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/partner-amazon.png" alt="Amazon" class="partner_logo">
                    </li>
                    <li class="partner_slide">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/partner-target.png" alt="Target" class="partner_logo">
                    </li>
                    <li class="partner_slide">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/partner-bestbuy.png" alt="Best Buy" class="partner_logo">
                    </li>
                  </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


</section>

<div id="are"></div>
<section class="component component-who-we-are">

  <div class="container">


  <h1 class="header_white">Who we are</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div>
                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person1.jpg" alt="Photo" class="hvrbox-layer_bottom">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person2.jpg" alt="Photo" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-text"><h3>Jane Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person3.jpg" alt="Photo" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person2.jpg" alt="Photo" class="hvrbox-layer_bottom">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>Jane Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person3.jpg" alt="Photo" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person1.jpg" alt="Photo" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

</section>

<div id="connect"></div>
<section class="component component-get-connected">
  <div class="container">
    <h1 class="header_black">Get connected</h1>
    <div class="row">
        <div class="col-md-6">

        </div>

        <div class="col-md-6">

        </div>

    </div>
  </div>
</section>

<footer class="component component-footer">
  <div class="container">
        <div class="row ">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer_logoSec">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/logo-primary.svg" class="footerLogo">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer_quickNav">
                    <ul>
                        <li><a href="#do">WHAT WE DO</a></li>
                        <li><a href="#are">WHO WE ARE</a></li>
                        <li><a href="#connect">GET CONNECTED</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="footer_contact">
                    <address>
                        1300 Mendota Heights Road<br>
                        Mendota Heights, MN 55120
                    </address>
                        <p>952.905.2503</p><br>
                        <a href="mailto:info@e-mergeretail.com"></a>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer_search">
                    <form>
                          <input type="search" name="site_search" placeholder="Search">
                    </form>

                    <div class="footer_sm">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/fb_logo.png" class="footer_sm_logo">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/twitter_logo.png" class="footer_sm_logo">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/linkedin_logo.png" class="footer_sm_logo">
                    </div>
                </div>
            </div>


    </div>
</div>

    <div class="row">
        <div class="col-md-12 thin_footer">
               <h6>&copy;Emerge Retail</h6>
        </div>
    </div>

</footer>
