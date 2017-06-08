<?php

$logo = get_field('theme_logo', 'options');

?>

<div class="header-illustration container">

  <div class="header-illustration-left container"></div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/header-illustration.svg" alt="" class="header-illustration-img">
  <div class="header-illustration-right container"></div>

</div>

<header class="component component-header">
  <div class="container">
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo">
    <nav class="nav-main">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
      ?>
    </nav>
  </div>
</header>
