<?php snippet('header') ?>


<div class="container">
  <?php
    $articles = page('flux')->children()->visible();
  ?>

  <?php foreach($articles as $article): ?>
    <h1><?= $article->title() ?></h1>
    <?= $article->text()->kirbytext() ?>
    <hr>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>
