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

</head>
<body>

<div class="container">
  <h1> <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a></h1>
  <p> <a href="<?= url() ?>" rel="home"><?= $site->author()->html() ?></a></p>
</div>
