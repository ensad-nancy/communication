<?php

$flux = page('flux')->children()->visible()
      ->sortBy('date','desc');

/*
projet: projet
workshop : workshop
evenement : événement
diplome : diplome

*/
?>

<div class="container">
  <?php snippet('line',
    array('flux' => $flux ,
    'start' => 0,'limit' => 2,
    'types' => array('evenement','workshop','publications','projet')
  )) ?>
</div>


<div class="container">
  <?php snippet('line',
    array('flux' => $flux ,
    'start' => 2,
    'limit' => 3,
    'types' => array('evenement','workshop','publications','projet')
  )) ?></div>
  <?php snippet('menu') ?>
  <div class="container-fluid">

  <?php snippet('line',
    array('flux' => $flux ,
    'start' => 5,
    'limit' => 4,
    'types' => array('evenement','workshop','publications','projet'))) ?>
  <?php snippet('line',
    array('flux' => $flux ,
    'start' => 9,
    'limit' => 4,
    'types' => array('evenement','workshop','publications','projet'))) ?>

</div>


<div class="container">
  <?php for ($i=0; $i < 5; $i++):$lim=4; ?>
  <?php snippet('line',
    array('flux' => $flux ,'start' => $i*$lim, 'limit' => $lim, 'types' => array('diplome'))) ?>
  <?php endfor ?>
</div>
