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
  if(isset($params['tag'])){
    $flux = page('flux')->children()->visible()
            ->sortBy('date','desc')
            ->filterBy('keywords', $params['tag'], ',');
    $label = $params['tag'];

  }elseif(isset($params['format'])){
    $flux = page('flux')->children()->visible()
            ->sortBy('date','desc')
            ->filterBy('type', $params['format'], ',');

    $label = $params['format'];

  }elseif(isset($params['year'])){
    $year =  $params['year'];
    $flux = page('flux')->children()->visible()
            ->sortBy('date','desc')
            ->filter(function($p) use($year) {
                return $p->date('Y') === $year;
            });

    $label = $params['year'];
  };

  if(isset($flux)):
  ?>

  <div class="container">
    <h1> <?= $label ?></h1>
    <?php for ($i=0; $i < 10; $i++):$lim=3; ?>
      <?php snippet('line',
        array('flux' => $flux ,'start' => $i*$lim, 'limit' => $lim, 'types' => array('dnsep','dna','invite','evenement','production','workshop',
    ))) ?>
    <?php endfor ?>
  </div>

  <?php else: ?>
    <?php snippet('lines') ?>
  <?php endif ?>
</div>
<?php snippet('footer') ?>
