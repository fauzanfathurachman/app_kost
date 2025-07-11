<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5>Daftar Tagihan</h5>
    <div>
      <select id="filterStatus" class="form-select d-inline w-auto">
        <option value="">Semua Status</option>
        <option value="lunas">Lunas</option>
        <option value="belum">Belum Bayar</option>
        <option value="cicil">Cicil</option>
      </select>
      <input type="month" id="filterPeriode" class="form-control d-inline w-auto">
      <button class="btn btn-outline-success" id="exportExcel"><i class="fa fa-file-excel"></i></button>
      <button class="btn btn-outline-primary" id="printTagihan"><i class="fa fa-print"></i></button>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-hover" id="tagihanTable">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Bulan</th>
          <th>Jumlah</th>
          <th>Status</th>
          <th>Pembayaran</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($tagihan as $t): ?>
        <tr>
          <td><?= htmlspecialchars($t['nama']) ?></td>
          <td><?= $t['bulan'].'/'.$t['tahun'] ?></td>
          <td><?= format_rupiah($t['jumlah']) ?></td>
          <td>
            <?php if($t['status']=='lunas'): ?>
              <span class="badge bg-success">Lunas</span>
            <?php elseif($t['status']=='belum'): ?>
              <span class="badge bg-danger">Belum Bayar</span>
            <?php else: ?>
              <span class="badge bg-warning text-dark">Cicil</span>
            <?php endif; ?>
          </td>
          <td>
            <?php if($t['status']=='cicil'): ?>
              <div class="progress" style="height:20px;">
                <div class="progress-bar bg-warning" style="width:<?= $t['progress'] ?>%"><?= $t['progress'] ?>%</div>
              </div>
            <?php elseif($t['status']=='lunas'): ?>
              <div class="progress" style="height:20px;">
                <div class="progress-bar bg-success" style="width:100%">100%</div>
              </div>
            <?php endif; ?>
          </td>
          <td>
            <a href="?page=admin&menu=pembayaran&tagihan_id=<?= $t['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-money-bill"></i> Bayar</a>
            <button class="btn btn-sm btn-info" onclick="showReceipt(<?= $t['id'] ?>)"><i class="fa fa-receipt"></i></button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div> 