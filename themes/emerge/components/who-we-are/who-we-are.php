<?php

$team = get_sub_field('team');


?>


<section class="component component-who-we-are" id="are">

  <div class="container">


  <h1 class="header_white">Who we are</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div>

                  <?php foreach ($team as $key => $team_member) { ?>

                    <div class="hvrbox">
                      <img src="<?php echo $team_member['team_member_photo']; ?>" alt="Photo" class="hvrbox-layer_bottom">
                      <div class="hvrbox-layer_top">
                        <div class="hvrbox-text">
                          <h3><?php echo $team_member['team_member_name']; ?></h3>
                          <?php echo $team_member['team_member_description']; ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                </div>
            </div>
        </div>
    </div>

  </div>

</section>
