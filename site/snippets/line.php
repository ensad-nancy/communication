<?php

$col = array();
$col['sm'] = floor(12/$limit);
// if($limit > 4) $col['sm'] = ($col['lg']*2);
// $col['xl'] = floor($col['lg']/2);

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

  if($cover = $item->coverimage()) $image = $cover;
  elseif($firstimage = $item->images()->sortBy('sort', 'asc')->first()) $image = $firstimage;

  $firstimage = $item->images()->sortBy('sort', 'asc')->first();

?>

  <div class="<?php foreach ($col as $key => $val) echo "col-{$key}-{$val} "?> line-item">
    <?php if($image = $item->images()->sortBy('sort', 'asc')->first()):
      // $tumb = thumb($image, array('width' => (400*5)/$limit, 'height' => (250*5)/$limit, 'crop' => true));
    ?>
      <a href="<?= $item->url()?>">
        <?php if($hero = $item->coverimage()->toFile()): ?>
          <div class="hero">
            <?= $hero->imageset('hero') ?>
          </div>
        <?php endif ?>
      </a>
    <?php endif ?>
    <div class="caption">
      <?php if($limit < 6):?>
        <p class="col-sm-6 col-lg-4 date"> <?= $item->date('d.m.Y') ?> </p>
        <p class="col-sm-6 col-lg-8 type"><a href="/format:<?=$item->type()?>"><?=$item->type()?></a> </p>
      <?php endif?>
      <p class="title
      col-sm-12

      col-lg-offset-4
      col-lg-8

      "><?= excerpt($item->title(), 8, 'words') ?></p>

    </div>
  </div>

<?php endforeach ?>
</div>
