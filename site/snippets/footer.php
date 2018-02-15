<div class="container format">

<?php
$tagcloud = tagcloud(page('flux'),
  array('limit' => 20,
    'field' => 'keywords',
    'baseurl' => '.',
    'sortdir' => 'desc',
    'param' => 'tag'
  )
)
?>

<div class="sentence">
  <div class="formats">
    <?= $site->footer()->kirbytext() ?>
  </div>

  <p ><?php foreach($tagcloud as $tag): ?>
     	  <a class="format"href="/<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a> •
     	<?php endforeach ?>

   au cours des années
    <?php for ($y=2012; $y < (int)date("Y")+1; $y++): ?>
      <a class="year" href="/year:<?= $y ?>"><?= $y ?></a>
    <?php endfor ?>.
  </p>
</div>

<div class="container poster">
  <?= page('flux')->text()->kirbytext() ?>
</div>
<?php echo js(array(
  '/assets/js/bundle.min.js',
  '/assets/js/app.js',
  'assets/plugins/imageset/js/dist/imageset.js'
))?>
</body>
</html>
