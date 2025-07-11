<section id="kamarTersedia" class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4 text-center">Kamar Tersedia</h2>
    <div class="row g-4">
      <?php foreach($kamar_kosong as $kamar): ?>
      <div class="col-md-4">
        <div class="card kamar-card h-100 shadow-sm">
          <img src="assets/images/kamar/<?= $kamar['foto'] ?>" class="card-img-top gallery-img" alt="Kamar <?= $kamar['nomor'] ?>">
          <div class="card-body">
            <h5 class="card-title">Kamar <?= $kamar['nomor'] ?></h5>
            <span class="badge bg-success fs-6 mb-2">Rp <?= number_format($kamar['harga'],0,',','.') ?>/bulan</span>
            <p class="card-text">Fasilitas: <?= $kamar['fasilitas'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section> 