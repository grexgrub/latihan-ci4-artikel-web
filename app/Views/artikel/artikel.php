<?= $this->extend('layout/template') ?>



<?= $this->section('main') ?>
<?= $this->include('layout/sidebar') ?>
<main id="main">
  <?= $this->include('layout/artikel_list') ?>
</main>
<?= $this->endSection() ?>


