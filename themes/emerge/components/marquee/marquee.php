<?php

$slides = get_sub_field('slides');

?>

<section class="component component-marquee">
  <div class="carousel-container">

    <?php if($slides) {

      foreach ($slides as $key => $slide) { ?>

        <div class="carousel-img" style="background-image: url('<?php echo $slide['slide']; ?>')">
          <h1 class="slide-content"><?php echo $slide['slide_content']; ?></h1>
          <div class="slide-overlay carousel-overlay"></div>
        </div>

      <?php }

    } ?>

  </div>
</section>
