  <div class="container">

    <?php $tagcloud = tagcloud(page('flux'),
      array('limit' => 50,
        'field' => 'keywords',
        'baseurl' => '.',
        'sortdir' => 'desc',
        'param' => 'tag'
      )
    ) ?>

   	<ul>
     	<?php foreach($tagcloud as $tag): ?>
     	  <li><a href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
     	<?php endforeach ?>
   	</ul>

  </div>
  <?php echo js(array(
    '/assets/js/bundle.min.js',
    '/assets/js/app.js',
    'assets/plugins/imageset/js/dist/imageset.js'
  ))?>
</body>
</html>
