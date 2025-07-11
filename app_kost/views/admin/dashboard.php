<div class="row g-4">
  <div class="col-md-3">
    <div class="card border-0 shadow-sm bg-success text-white">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <i class="fa fa-users fa-2x me-3"></i>
          <div>
            <h5 class="card-title mb-0">Penghuni</h5>
            <h2><?= $stat_penghuni ?? 0 ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card border-0 shadow-sm bg-primary text-white">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <i class="fa fa-bed fa-2x me-3"></i>
          <div>
            <h5 class="card-title mb-0">Kamar Kosong</h5>
            <h2><?= $stat_kamar_kosong ?? 0 ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card border-0 shadow-sm bg-warning text-dark">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <i class="fa fa-file-invoice fa-2x me-3"></i>
          <div>
            <h5 class="card-title mb-0">Tagihan</h5>
            <h2><?= $stat_tagihan ?? 0 ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card border-0 shadow-sm bg-info text-white">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <i class="fa fa-money-bill fa-2x me-3"></i>
          <div>
            <h5 class="card-title mb-0">Pembayaran</h5>
            <h2><?= $stat_pembayaran ?? 0 ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 