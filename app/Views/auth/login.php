<?= $this->extend('layout/template'); ?>

<?php helper('form'); ?>

<?php use App\utils\Flasher;

?>

<?php $error = validation_errors() ?>

<?= $this->section('main') ?>
  <?= Flasher::flash(); ?>
<main class="login_container">
  <form action="/auth/login" method="post" class="login-form shadow">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label for="username" class="form-label">Usename</label>
      <input value="<?= old('username') ?>" type="text" class="form-control <?= (isset($error['username']) ? 'is-invalid' : ' ') ?> " name="username" placeholder="Masukan Username" >
      <div class="invalid-feedback">
        <?= (isset($error['username']) ? $error['username'] : ' ') ?>
      </div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input value="<?= old('password') ?>" type="password" class="form-control <?= (isset($error['password']) ? 'is-invalid' : ' ') ?>" name="password" placeholder="Masukan Password">
      <div class="invalid-feedback">
        <?= (isset($error['password']) ? $error['password'] : ' ') ?>
      </div>
    </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
      <div class="sudah-belum"><a href="/register" class="sudah-belum">daftar</a></div>
  </form>
</main>
<?php if (session('warning')) : ?>
  <?= $this->include('js.php') ?>
<?php endif; ?>
<?= $this->endSection() ?> 
