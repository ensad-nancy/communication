<?php


$flux = page('flux')->children()->visible()
      ->sortBy('date','desc');


$col = floor(12/$limit);

$items = $flux->filter(function($child) use($types) {
  return in_array($child->type(), $types);
})->slice($start,$limit);

?>

<div class="line">

<?php foreach($items as $item):

  if($cover = $item->coverimage()->toFile()) $image = $cover;
  elseif($firstimage = $item->images()->sortBy('sort', 'asc')->first()) $image = $firstimage;

?>

  <div class="<?= 'col-sm-'.$col ?> line-item">
    <?php if($image = $item->images()->sortBy('sort', 'asc')->first()):
      $tumb = thumb($image, array('width' => (400*5)/$limit, 'height' => (300*5)/$limit, 'crop' => true));
      // $tumb = thumb($image, array('height' => 300));
    ?>
      <a href="<?= $item->url()?>">
        <img class="img-responsive" src="<?= $tumb->url() ?>" alt="" />
      </a>
    <?php endif ?>
    <?php if($limit < 7):?>
    <div >
      <p class="date"><?= $item->date('m.Y') ?></p>
      <p class="title"><?= $item->title() ?> (<?= $item->keywords() ?>) </p>
      <p class="type"><?=$item->type()?> </p>
    </div>
  <?php endif?>
  </div>

<?php endforeach ?>
</div>
