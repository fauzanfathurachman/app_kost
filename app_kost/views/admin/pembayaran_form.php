<form id="pembayaranForm" class="card p-4">
  <div class="mb-3">
    <label>Jumlah Tagihan</label>
    <input type="text" class="form-control" value="<?= format_rupiah($tagihan['jumlah']) ?>" readonly>
  </div>
  <div class="mb-3">
    <label>Sisa Tagihan</label>
    <input type="text" class="form-control" id="sisaTagihan" value="<?= format_rupiah($tagihan['sisa']) ?>" readonly>
  </div>
  <div class="mb-3">
    <label>Jumlah Bayar</label>
    <input type="number" class="form-control" id="jumlahBayar" name="jumlah_bayar" min="1" max="<?= $tagihan['sisa'] ?>" required>
  </div>
  <div class="mb-3">
    <label>Status Pembayaran</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="status" id="lunas" value="lunas" checked>
      <label class="form-check-label" for="lunas">Lunas</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="status" id="cicil" value="cicil">
      <label class="form-check-label" for="cicil">Cicil</label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Simpan Pembayaran</button>
</form>
<div id="formSuccess" class="alert alert-success mt-3 d-none">Pembayaran berhasil!</div> 