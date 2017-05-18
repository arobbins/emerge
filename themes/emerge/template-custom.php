<?php

/*

Template Name: Custom Template

*/

$logo = get_field('theme_logo', 'options');

?>

<header class="component component-header">
  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo">


    <nav>
        <hr width="700">
        <ul>
            <li><a href="#">WHAT WE DO</a></li>
            <li><a href="#">WHO WE ARE</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
</header>

<section class="component component-marquee">
    <ul class="carousel-container">
       <li class="carousel-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/carousel-slide1.jpg')"></li>
       <li class="carousel-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/carousel-slide1.jpg')"></li>
       <li class="carousel-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/carousel-slide1.jpg')"></li>
    </ul>
</section>

<section class="component component-what-we-do">
    <div class="containter">
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
  <h1>Partners component</h1>
</section>

<section class="component component-who-we-are">
  <h1>Who we are component</h1>
    <div class="containter">
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person1.png" alt="" class="who_img">
            </div>
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person2.png" alt="" class="who_img">
            </div>
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person3.png" alt="" class="who_img">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person1.png" alt="" class="who_img">
            </div>
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person2.png" alt="" class="who_img">
            </div>
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/person3.png" alt="" class="who_img">
            </div>
        </div>
    </div>
</section>

<section class="component component-get-connected">
  <h1>Get connected component</h1>
</section>

<footer class="component component-footer">
  <div class="containter">
        <div class="row ">
            <div class="col-md-3 footer_logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/logo-primary.svg">
            </div>
            <div class="col-md-3 footer_quickNav">
                <ul>
                    <li>WHAT WE DO</li>
                    <li>WHO WE ARE</li>
                    <li>GET CONNECTED</li>
                </ul>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
      </div>
    </div>
</footer>
