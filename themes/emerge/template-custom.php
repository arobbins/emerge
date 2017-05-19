<?php

/*

Template Name: Custom Template

*/

$logo = get_field('theme_logo', 'options');

?>

<header class="component component-header">
  <div class="container">
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo">
    <nav>
        <hr width="700">
        <ul>
            <li><a href="#">WHAT WE DO</a></li>
            <li><a href="#">WHO WE ARE</a></li>
            <li><a href="#">CONTACT</a></li>
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

<section class="component component-what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
              <h1 class="color-1">WHAT WE DO</h1>
                <h4>OUR PROCESS</h4>
                <p></p>
            </div>
        </div>
    </div>
</section>

<section class="component component-partners">
  <div class="container">
    <h1>Partners component</h1>
  </div>
</section>

<section class="component component-who-we-are">

  <div class="container">


  <h1 class="header_white">WHO WE ARE</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="img_block">
                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person2.jpg" alt="Mountains" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-text"><h3>Jane Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person3.jpg" alt="Mountains" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="img_block">
                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person2.jpg" alt="Mountains" class="hvrbox-layer_bottom">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><h3>Jane Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person3.jpg" alt="Mountains" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-text"><h3>John Doe</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                        </div>
                    </div>

                    <div class="hvrbox">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
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

<section class="component component-get-connected">
  <div class="container">
    <h1>Get connected component</h1>
  </div>
</section>

<footer class="component component-footer">
  <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="footer_logoSec">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/logo-primary.svg" class="footerLogo">
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_quickNav">
                    <ul>
                        <li>WHAT WE DO</li>
                        <li>WHO WE ARE</li>
                        <li>GET CONNECTED</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                 <div class="footer_contact">
                    <address>
                        <p>1300 Mendota Heights Road<br>
                        Mendota Heights, MN 55120</p>
                        <p>952.905.2503<br>
                        info@e-mergeretail.com</p>
                    </address>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_search">
                    <form>
                          <input type="search" name="site_search" placeholder="Search">
                    </form>

                    <div class="footer_sm">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/fb_logo.png" class="footer_sm_logo">
                    </div>
                    <div class="footer_sm">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/twitter_logo.png" class="footer_sm_logo">
                    </div>
                    <div class="footer_sm">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/linkedin_logo.png" class="footer_sm_logo">
                    </div>
                </div>
            </div>
    </div>
</div>

</footer>
