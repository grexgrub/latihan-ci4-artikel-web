<?= $this->extend('layout/template') ?>



<?= $this->section('main') ?>
<main>
  <?= $this->include('layout/burgerMenu') ?>
  <?= $this->include('layout/artikel_list') ?>
</main>
<?= $this->include('layout/offcanvas') ?>
<?= $this->endSection() ?>


