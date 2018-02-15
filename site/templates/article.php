<?php snippet('header');

  $keywords = explode(',',$page->keywords());

 ?>


  <div class="container article">

    <div class="">
      <p class="date col-sm-2"><?= $page->date('d.m.Y') ?>
      <p class="type col-sm-2"><a href="/format:<?= $page->type() ?>"><?=$page->type()?></a></p>
      <p class="tag col-sm-12">
        <?php foreach($keywords as $keyword): ?>
          <a href="/tag:<?=  $keyword ?>"><?= $keyword ?></a><br>
        <?php endforeach ?>
    </p>
    </div>
    <p class="col-sm-offset-2 col-sm-12 title"><?= $page->title() ?></p>

    <div class="col-sm-offset-2 col-sm-8">
      <?= $page->text()->kirbytext() ?>
    </div>

  </div>
<?php snippet('footer') ?>
