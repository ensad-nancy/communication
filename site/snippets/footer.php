<div class="container-fluid">

  <?php $tagcloud = tagcloud(page('flux'),
  array('limit' => 50,
  'field' => 'Type',
  'baseurl' => '.',
  'sortdir' => 'desc',
  'param' => 'format'
)
) ?>
<div class="tags">
  <?php foreach($tagcloud as $tag): ?>
    <a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a>
  <?php endforeach ?>
</div>

</div>
<hr>
<div class="container-fluid">

  <?php $tagcloud = tagcloud(page('flux'),
    array('limit' => 50,
      'field' => 'keywords',
      'baseurl' => '.',
      'sortdir' => 'desc',
      'param' => 'tag'
    )
  ) ?>

 	<div class="tags">
   	<?php foreach($tagcloud as $tag): ?>
   	  <a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a>
   	<?php endforeach ?>
 	</div>

</div>
<hr>
<div class="container-fluid">

  <div class="tags">
    <?php for ($y=2011; $y < (int)date("Y"); $y++): ?>
      <a href="/year:<?= $y ?>"><?= $y ?></a>
    <?php endfor ?>
  </div>
</div>

<?php echo js(array(
  '/assets/js/bundle.min.js',
  '/assets/js/app.js',
  'assets/plugins/imageset/js/dist/imageset.js'
))?>
</body>
</html>
