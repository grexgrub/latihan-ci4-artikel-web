<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/main.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/ckeditor.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css-bootstrap/bootstrap.css') ?>">
    <script src="<?= base_url('js/jquery.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="<?= base_url('js-bootstrap/bootstrap.js') ?>"></script>
    <?= ($this->renderSection('css') ? $this->renderSection('css') : '') ?>
  </head>
  <body>
    <?=  ($this->renderSection('main') ? $this->renderSection('main') : '')?> 
    <?=  ($this->renderSection('script') ? $this->renderSection('script') : '')?>
  </body>
</html>
