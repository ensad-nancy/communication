<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/plugins/imageset/css/imageset.min.css') ?>
  <?= css('assets/css/screen.css') ?>
  <!-- replaces "no-js" class on html element with "js" -->
  <script>(function(d,c,r){d[c]=r.test(d[c])?d[c].replace(r,'$1js$2'):[d[c],'js'].join(' ')})(document.documentElement,'className',/(?:(^|\s)no-js(\s|$))/)</script>

  <?= js('assets/plugins/imageset/js/dist/imageset.js') ?>
</head>
<body>

<div class="container-fluid maintitle">
  <p class="col-sm-4 format"> <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a></p>
  <p class="col-sm-4 tag"> <a href="<?= url() ?>" rel="home"><?= $site->subtitle()->html() ?></a></p>
  <p class="col-sm-4"> <a href="http://www.ensad-nancy.eu" target="_blank"><?= $site->author()->html() ?></a></p>
</div>
