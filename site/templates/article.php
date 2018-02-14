<?php snippet('header') ?>


  <div class="container">
    <h1><?= $page->title() ?></h1>
    <?= $page->text()->kirbytext() ?>
         <?= $page->date('F jS, Y') ?>
    <hr>
  </div>
<?php snippet('footer') ?>
