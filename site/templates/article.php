<?php snippet('header') ?>


  <div class="container">
    <?= $page->text()->kirbytext() ?>

    <p class="date"><?= $page->date('m.Y') ?></p>
    <h1><?= $page->title() ?></h1>
    <p class="title"><?=$page->type()?> (<?= $page->keywords() ?>)</p>
         <?= $page->date('F jS, Y') ?>
    <hr>
  </div>
<?php snippet('footer') ?>
