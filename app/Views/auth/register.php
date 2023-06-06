<?= $this->extend('layout/template') ?>
<?php helper('form') ?>
<?php $error = validation_errors() ?>
<?php $uError = isset($error['username']) ?>
<?php $nError = isset($error['name']) ?>
<?php $pError = isset($error['password']) ?>
<?php $this->section('main') ?>
<main class="login_container">
  <form action="<?= base_url('auth/daftar') ?>" method="post" class="login-form shadow">
    <?= csrf_field() ?>
      <div class="mb-3">
        <label for="username" class="form-label">Usename</label>
        <input type="text" class="form-control <?= ($uError ? 'is-invalid' : '') ?>" name="username" placeholder="Masukan Username" value="<?= old('username') ?>">
        <div class="invalid-feedback">
          <?= ($uError ? $error['username'] : '') ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control <?= ($nError ? 'is-invalid' : '')?>" name="name" placeholder="Masukan Nama Lengkap" value="<?= old('name') ?>">
        <div class="invalid-feedback">
          <?= ($nError ? $error['name'] : '') ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control <?= ($pError ? 'is-invalid' : '')?>" name="password" placeholder="Masukan Password" value="<?= old('password') ?>">
        <div class="invalid-feedback">
          <?= ($pError ? $error['password'] : '')?>
      </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Daftar</button>
    <div class="sudah-belum"> <a class="sudah-belum" href="<?= base_url('login') ?>">sudah punya akun? login</a> </div>
  </form>
  </main>
<?= $this->endSection() ?>
