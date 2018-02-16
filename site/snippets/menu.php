<div class="container format">

<?php
$tagcloud = tagcloud(page('flux'),
  array('limit' => 30,
    'field' => 'keywords',
    'baseurl' => '.',
    'sortdir' => 'desc',
    'param' => 'tag'
  )
)
?>

  <div class="sentence">
    <div class="types">
      <?= $site->footer()->kirbytext() ?>
    </div>

    <p ><?php foreach($tagcloud as $tag): ?>
       	  <a class="keyword" href="/tag:<?php echo urlencode($tag->name()) ?>"><?php echo $tag->name() ?></a> •
       	<?php endforeach ?>

     au cours des années
      <?php for ($y=2012; $y < (int)date("Y")+1; $y++): ?>
        <a class="year" href="/year:<?= $y ?>"><?= $y ?></a>
      <?php endfor ?>.
    </p>
  </div>
</div>
