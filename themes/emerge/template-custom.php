<?php

/*

Template Name: Custom Template

*/

$logo = get_field('theme_logo', 'options');

?>

<header class="component component-header">
  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo">
  <h1>Header component</h1>
</header>

<section class="component component-marquee">
  <h1>Marquee component</h1>
</section>

<section class="component component-what-we-do">
  <h1>What we do component</h1>
</section>

<section class="component component-partners">
  <h1>Partners component</h1>
</section>

<section class="component component-who-we-are">
  <h1>Who we are component</h1>
</section>

<section class="component component-get-connected">
  <h1>Get connected component</h1>
</section>

<footer class="component component-footer">
  <h1>Footer component</h1>
</footer>
