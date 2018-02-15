<?php

$flux = page('flux')->children()->visible()
      ->sortBy('date','desc');

?>

<div class="container">
  <?php snippet('line',
    array('flux' => $flux ,'start' => 0, 'limit' => 2, 'types' => array('evenement','workshop','invite'))) ?>
</div>

<div class="container">
  <?php snippet('line',
    array('flux' => $flux ,'start' => 2, 'limit' => 3, 'types' => array('evenement','workshop','invite'))) ?>
</div>

<div class="container-fluid">
  <?php for ($i=0; $i < 3; $i++):$lim=4; ?>
  <?php snippet('line',
    array('flux' => $flux ,'start' => $i*$lim, 'limit' => $lim, 'types' => array('dnsep','dna'))) ?>
  <?php endfor ?>
</div>
