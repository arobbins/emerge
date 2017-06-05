<?php

$services = get_sub_field('services');

?>

<section class="component component-what-we-do" id="do">
  <div class="container">
    <div class="row">
      <div class="col-md-12 service-wrapper">

        <h1 class="service-heading"><?php the_sub_field('heading'); ?></h1>

          <header class="sercice-header">
            <h4 class="service-sub-heading"><?php the_sub_field('intro_heading'); ?></h4>
            <div class="sercice-description">
              <?php the_sub_field('intro_content'); ?>
            </div>
          </header>

          <div class="l-row l-row-justify process-icons">

            <?php foreach ($services as $key => $service) { ?>

              <?php if (strtolower($service['title']) === 'sales' || strtolower($service['title']) === 'analytics') {
                $active = 'is-active';
              } else {
                $active = '';
              } ?>

              <section class="service service-<?php echo strtolower($service['title']); ?> <?php echo $active; ?>">
                <i class="icon icon-l icon-<?php echo strtolower($service['title']); ?>"></i>
                <h2 class="service-title"><?php echo strtolower($service['title']); ?></h2>
              </section>

            <?php } ?>

          </div>

          <section class="service-content-graph-wrapper">

            <?php foreach ($services as $key => $service) { ?>

              <?php if (strtolower($service['title']) === 'sales' || strtolower($service['title']) === 'analytics') {
                $active = 'is-active';
              } else {
                $active = '';
              } ?>

              <div class="service-content service-content-<?php echo strtolower($service['title']); ?> <?php echo $active; ?>">
                <i class="icon icon-s icon-<?php echo strtolower($service['title']); ?>"></i>
                <h3><?php echo $service['title']; ?></h3>
                <?php echo $service['service_content'] ?>
              </div>

            <?php } ?>

            <?php get_template_part('components/flow-graph/flow-graph'); ?>

          </section>

      </div>
    </div>
  </div>
</section>
