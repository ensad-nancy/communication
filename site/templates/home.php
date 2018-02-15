<?php snippet('header')

// dnsep : dnsep
// dna : dna
// invite : invité
// evenement : événement
// production : production
// workshop : workshop




?>

<div class="lines">

  <?php
  $params = params();
  if(isset($params['tag'])):

  $flux = page('flux')->children()->visible()
          ->sortBy('date','desc')
          ->filterBy('keywords', $params['tag'], ',');

  ?>

  <div class="container">
    <h1> <?=  $params['tag'] ?></h1>
    <?php for ($i=0; $i < 10; $i++):$lim=3; ?>
      <?php snippet('line',
        array('flux' => $flux ,'start' => $i*$lim, 'limit' => $lim, 'types' => array('dnsep','dna','invite','evenement','production','workshop',
    ))) ?>
    <?php endfor ?>
  </div>

  <?php else:
  ?>
    <?php snippet('lines') ?>
  <?php endif ?>
</div>
<?php snippet('footer') ?>
