<div class="footer">
  <div class="container-fluid poster">
    <?= page('flux')->text()->kirbytext() ?>
  </div>
  <?php snippet('menu') ?>

</div>


<?php echo js(array(
  '/assets/js/bundle.min.js',
  '/assets/js/app.js',
  'assets/plugins/imageset/js/dist/imageset.js'
))?>
</body>
</html>
