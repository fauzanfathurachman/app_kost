<section id="kamarTersedia" class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4 text-center">Kamar Tersedia</h2>
    <div class="mb-3 text-center">
      <?php foreach($filter_chips as $chip): ?>
        <span class="badge bg-primary filter-chip mx-1" style="cursor:pointer;"> <?= $chip ?> <i class="fa fa-times ms-1"></i></span>
      <?php endforeach; ?>
      <span class="badge bg-danger filter-chip mx-1" style="cursor:pointer;">Reset</span>
    </div>
    <?php if(empty($kamar_kosong)): ?>
      <div class="text-center my-5">
        <img src="assets/images/empty.svg" width="120" alt="Empty">
        <p class="mt-3 text-muted">Tidak ada kamar tersedia.</p>
      </div>
    <?php else: ?>
    <div class="row g-4">
      <?php foreach($kamar_kosong as $kamar): ?>
      <div class="col-md-4">
        <div class="card kamar-card h-100 shadow-sm">
          <img src="assets/images/kamar/<?= $kamar['foto'] ?>" class="card-img-top gallery-img" alt="Kamar <?= $kamar['nomor'] ?>">
          <div class="card-body">
            <h5 class="card-title">Kamar <?= $kamar['nomor'] ?> <span class="badge bg-secondary ms-2"><?= $kamar['tipe'] ?></span></h5>
            <span class="badge bg-success fs-6 mb-2">Rp <?= number_format($kamar['harga'],0,',','.') ?>/bulan</span>
            <div class="mb-2">
              <?php foreach(explode(', ',$kamar['fasilitas']) as $f): ?>
                <span class="badge bg-info text-dark"> <?= $f ?> </span>
              <?php endforeach; ?>
            </div>
            <button class="btn btn-outline-primary btn-sm" onclick="showDetailKamar('<?= $kamar['nomor'] ?>')">Detail</button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section> 