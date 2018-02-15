<?php snippet('header')

?>

<div class="lines">

  <?php
  $params = params();
  if(isset($params['tag'])){
    $type = 'tag';

    $flux = page('flux')->children()->visible()
            ->sortBy('date','desc')
            ->filterBy('keywords', $params[$type], ',');
    $label = $params[$type];

  }elseif(isset($params['format'])){
    $type = 'format';

    $flux = page('flux')->children()->visible()
            ->sortBy('date','desc')
            ->filterBy('type', $params[$type], ',');

    $label = $params[$type];

  }elseif(isset($params['year'])){
    $type = 'year';
    $year =  $params[$type];
    $flux = page('flux')->children()->visible()
            ->sortBy('date','desc')
            ->filter(function($p) use($year) {
                return $p->date('Y') === $year;
            });

    $label = $params[$type];
  };

  if(isset($flux)):
  ?>

  <div class="container">
      <h1 class="<?=$type?>"><?= $label ?></h1>
  </div>
  <div class="container-fluid">

    <?php
    $total = count($flux);
    echo $total;

    if($total < 2) $lim = 1;
    elseif($total < 4) $lim = 2;
    elseif($total < 6) $lim = 3;
    else $lim = 4;

    for ($i=0; $i < ($total/$lim); $i++): ?>
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
