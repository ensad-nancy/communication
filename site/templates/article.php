<?php snippet('header') ?>


  <div class="container">

    <div class="col-sm-4 col-sm-offset-2">

      <p class="date"><?= $page->date('d.m.Y') ?>, <?=$page->type()?></p>
      <p><?= $page->keywords() ?></p>

    </div>
    <div class="col-sm-4">
      <p class="title"><?= $page->title() ?></p>
    </div>

    <div class="col-sm-offset-2 col-sm-8">
      <?= $page->text()->kirbytext() ?>

    </div>

  </div>
<?php snippet('footer') ?>
