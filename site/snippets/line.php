<?php


$col = floor(12/$limit);


if( count($types) > 0){
  $items = $flux->filter(function($child) use($types) {
    return in_array($child->type(), $types);
  })->slice($start,$limit);
}else{
  $items = $flux;
}

?>

<div class="line">
<?php foreach($items as $item):

  if($cover = $item->coverimage()->toFile()) $image = $cover;
  elseif($firstimage = $item->images()->sortBy('sort', 'asc')->first()) $image = $firstimage;

?>

  <div class="<?= 'col-sm-'.$col ?> line-item">
    <?php if($image = $item->images()->sortBy('sort', 'asc')->first()):
      $tumb = thumb($image, array('width' => (400*5)/$limit, 'height' => (250*5)/$limit, 'crop' => true));
    ?>
      <a href="<?= $item->url()?>">
        <img class="img-responsive" src="<?= $tumb->url() ?>" alt="" />
      </a>
    <?php endif ?>
    <div >
      <?php if($limit < 6):?>
        <p class="date"><?= $item->date('d.m.Y') ?></p>
      <?php endif?>
      <p class="title"><?= $item->title() ?> (<?= $item->keywords() ?>) </p>
        <?php if($limit < 6):?>
      <p class="type"><?=$item->type()?> </p>
      <?php endif?>
    </div>
  </div>

<?php endforeach ?>
</div>
