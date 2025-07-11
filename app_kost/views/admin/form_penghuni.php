<form id="penghuniForm" method="post" action="">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
    <div class="invalid-feedback">Nama wajib diisi.</div>
  </div>
  <div class="mb-3">
    <label for="no_hp" class="form-label">No HP</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" required pattern="^[0-9]{10,15}$">
    <div class="invalid-feedback">No HP wajib diisi dan hanya angka.</div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
    <div class="invalid-feedback">Alamat wajib diisi.</div>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>
<div id="formSuccess" class="alert alert-success mt-3 d-none">Data berhasil disimpan!</div> 