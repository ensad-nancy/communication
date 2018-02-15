<?php snippet('header') ?>

<div class="lines">


<div class="container">
  <?php snippet('line',
    array('start' => 0, 'limit' => 2, 'types' => array('evenement','workshop','invite'))) ?>
</div>

<div class="container-fluid">
  <?php snippet('line',
    array('start' => 2, 'limit' => 3, 'types' => array('evenement','workshop','invite'))) ?>
</div>
<div class="container">
  <?php snippet('line',
    array('start' => 5, 'limit' => 4, 'types' => array('evenement','workshop','invite'))) ?>
</div>

<div class="container-fluid">
  <?php for ($i=0; $i < 3; $i++):$lim=4; ?>
  <?php snippet('line',
    array('start' => $i*$lim, 'limit' => $lim, 'types' => array('dnsep','dna'))) ?>
  <?php endfor ?>
</div>

<div class="container-fluid">
  <?php for ($i=0; $i < 10; $i++):$lim=6; ?>
  <?php snippet('line',
    array('start' => $i*$lim, 'limit' => $lim, 'types' => array('dnsep','dna','invite','evenement','production','workshop',
))) ?>
  <?php endfor ?>
</div>
<?php snippet('footer') ?>
</div>
