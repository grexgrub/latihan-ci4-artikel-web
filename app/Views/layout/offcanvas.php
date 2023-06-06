
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><strong>ARTIC</strong></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form method="post" action="/gantiPp" id="formPp" enctype="multipart/form-data">
    <div class="statusUser mb-3">
      <label for="Pp" class="rounded-1 overflow-hidden">
          <img src="<?= $user['photo_profile'] ?>" alt="" class="sampul">
          <input type="file" name="Pp" id="Pp"  hidden/>
      </label>
      <div class="userStatus">
        <div>  
          <h1><strong>Welcome</strong></h1>
          <h2><?= session('name') ?></h2>
        </div>
        <button class="btn btn-outline-dark w-100 border-2 rounded-1" type="submit"> <strong>Ganti Pp</strong> </button>
        </form>
      </div>
    </div>
    <a href="/" type="button" class="btn btn-outline-dark w-100 border-2 rounded-1 <?= ($title == 'artikel') ? 'active' : '' ?>"><strong>Artikel</strong></a>
    <a href="/myarticle" class="btn btn-outline-dark w-100 border-2 rounded-1 <?= ($title == 'my artikel') ? 'active' : '' ?>"><strong>My Artikel</strong></a>
    <a href="/buatartikel" class="btn btn-outline-dark w-100 border-2 rounded-1 <?= ($title == 'buat-artikel') ? 'active' : '' ?>"><strong>Buat Artikel</strong></a>
    <a href="/logout" class="btn btn-outline-dark w-100 border-2 rounded-1"><strong>log out</strong></a>
  </div>
</div>
