<?php

$slides = get_sub_field('slides');

?>

<section class="component component-marquee">
  <ul class="carousel-container">

    <?php if($slides) {

      foreach ($slides as $key => $slide) { ?>

        <li class="carousel-img" style="background-image: url('<?php echo $slide['slide']; ?>')"></li>

      <?php }

    } ?>

  </ul>
</section>
