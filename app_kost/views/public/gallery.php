<section class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Galeri Kost</h2>
    <div class="row g-3">
      <?php foreach($gallery as $img): ?>
      <div class="col-6 col-md-3">
        <a href="assets/images/<?= $img ?>" class="gallery-lightbox">
          <img src="assets/images/<?= $img ?>" class="img-fluid rounded shadow-sm" alt="Galeri">
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section> 