<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Daftar Penghuni</h5>
    <input type="text" class="form-control w-auto" id="searchBox" placeholder="Cari...">
  </div>
  <div class="table-responsive">
    <table class="table table-hover" id="dataTable">
      <thead>
        <tr>
          <th onclick="sortTable(0)">No <i class="fa fa-sort"></i></th>
          <th onclick="sortTable(1)">Nama <i class="fa fa-sort"></i></th>
          <th>No HP</th>
          <th>Kamar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($penghuni as $i => $p): ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= htmlspecialchars($p['nama']) ?></td>
          <td><?= htmlspecialchars($p['no_hp']) ?></td>
          <td><?= htmlspecialchars($p['kamar_nomor']) ?></td>
          <td>
            <a href="?page=admin&menu=penghuni&action=edit&id=<?= $p['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
            <a href="?page=admin&menu=penghuni&action=view&id=<?= $p['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
            <button class="btn btn-sm btn-danger" onclick="confirmDelete(<?= $p['id'] ?>)"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="card-footer d-flex justify-content-between">
    <button class="btn btn-outline-secondary" id="prevPage">Previous</button>
    <button class="btn btn-outline-secondary" id="nextPage">Next</button>
  </div>
</div>
<?php include 'modal_delete.php'; ?> 