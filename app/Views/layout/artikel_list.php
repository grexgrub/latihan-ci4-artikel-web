
<div class="container mt-5 d-flex align-items-start flex-wrap p-2">
<?php if ($artikel) : ?>
<?php foreach ($artikel as $a) : ?>
<div class="card mx-3 my-3" style="width: 18rem;">
<img src="<?= $a['cover'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$a['judul']?></h5>
      <p class="card-text">Author: <?= $a['id_article'] ?></p>
      <p class="card-text">Dibuat: <?= $a['created_at'] ?></p>
      <a href="artikel/<?= $a['slug'] ?>" class="btn btn-outline-dark rounded-0">Baca</a>
      <?php if ($title === 'my artikel') : ?>
      <a href="artikel/delete/<?= $a['slug'] ?>" class="btn btn-outline-dark rounded-0 mx-3">Delete</a>
      <?php endif; ?>
    </div>
</div> 
<?php endforeach; ?>
<?php else : ?>
    <strong>TIDAK ADA ARTIKEL</strong>
<?php endif; ?>
</div>
