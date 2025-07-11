<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Informasi Pembayaran</h2>
    <?php if(!empty($kamar_jatuh_tempo)): ?>
      <div class="alert alert-warning">
        <b>Perhatian!</b> Kamar berikut mendekati jatuh tempo pembayaran:
        <ul>
          <?php foreach($kamar_jatuh_tempo as $k): ?>
            <li>Kamar <?= $k['nomor'] ?> - <span class="countdown" data-deadline="<?= $k['deadline'] ?>"></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php if(!empty($kamar_telat_bayar)): ?>
      <div class="alert alert-danger">
        <b>Telat Bayar:</b>
        <ul>
          <?php foreach($kamar_telat_bayar as $k): ?>
            <li>Kamar <?= $k['nomor'] ?> - <span class="badge bg-danger">Terlambat <?= $k['hari_telat'] ?> hari</span></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section> 