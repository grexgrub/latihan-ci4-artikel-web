<?= $this->extend('layout/template') ?>

<?php helper('form') ?>
<?php $error = validation_errors() ?>

<?= $this->section('main') ?>
<?= $this->include('layout/burgerMenu') ?>
<form action="<?= base_url('uploadartikel') ?>" method="post" enctype="multipart/form-data">
<div class="container form-artikel p-3">
<div class="d-flex">
<div class="input-group input-group-sm mb-3 d-flex w-50 flex-column">
  <label for="Judul"><strong>JUDUL:</strong></label>
  <input type="text" class="form-control w-100 mt-1 fw-bold "  name="Judul" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <div>
    <?= (isset($error['judul']) ? $error['judul'] : '') ?>
  </div>
  <label for="cover" class="mt-3"><strong>COVER:</strong></label>
  <input type="file" name="cover" class="form-control w-100 mt-1" id="gambar">
  <div>
    <?= (isset($error['cover']) ? $error['cover'] : '') ?>
  </div>
</div>
</div>
<textarea id="editor" name="editor"><?= old('editor') ?></textarea>
<div class="<?= (isset($error['editor']) ? '' : 'd-none') ?>">
  <?= (isset($error['editor']) ? $error['editor'] : '') ?>
</div>
<button class="btn btn-outline-dark rounded-0 mt-3" type="submit">UPLOAD</button>
</div>
</form>
<?= $this->include('layout/offcanvas') ?>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url('js/script.js') ?>"></script>
<script src="<?= base_url('ckeditor/ckeditor5super.js') ?>"></script>
<script src="<?= base_url('js/ckeditor.js') ?>"></script>
<?= $this->endSection() ?>
