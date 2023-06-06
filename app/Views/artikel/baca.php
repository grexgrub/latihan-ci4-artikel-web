<?= $this->extend('layout/template') ?>


<?= $this->section('main') ?>
<main class="w-100 h-100">  
<?= $this->include('layout/baca') ?>
</main>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url('js/script.js') ?>"></script>
<script src="<?= base_url('ckeditor/ckeditor5super.js') ?>"></script>
<script src="<?= base_url('js/ckeditor.js') ?>"></script>
<?= $this->endSection() ?>
