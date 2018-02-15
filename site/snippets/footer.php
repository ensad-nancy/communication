<div class="container poster">
  <?= page('flux')->text()->kirbytext() ?>
</div>
<?php snippet('menu') ?>

<?php echo js(array(
  '/assets/js/bundle.min.js',
  '/assets/js/app.js',
  'assets/plugins/imageset/js/dist/imageset.js'
))?>
</body>
</html>
