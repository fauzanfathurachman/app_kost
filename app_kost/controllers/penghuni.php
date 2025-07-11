<?php
// controllers/penghuni.php
try {
    $stmt = $pdo->query("SELECT p.*, k.nomor as kamar_nomor FROM penghuni p LEFT JOIN kamar k ON p.kamar_id = k.id");
    $penghuni = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Gagal mengambil data penghuni: " . $e->getMessage();
}

ob_start();
if (!empty($error)) {
    echo '<div class="alert alert-danger">'.$error.'</div>';
}
if (!empty($penghuni)) {
    echo '<h2>Daftar Penghuni</h2>';
    echo '<table class="table table-bordered"><thead><tr><th>No</th><th>Nama</th><th>No HP</th><th>Alamat</th><th>Tanggal Masuk</th><th>Kamar</th></tr></thead><tbody>';
    $no=1;
    foreach ($penghuni as $p) {
        echo '<tr>';
        echo '<td>'.$no++.'</td>';
        echo '<td>'.htmlspecialchars($p['nama']).'</td>';
        echo '<td>'.htmlspecialchars($p['no_hp']).'</td>';
        echo '<td>'.htmlspecialchars($p['alamat']).'</td>';
        echo '<td>'.format_tanggal($p['tanggal_masuk']).'</td>';
        echo '<td>'.htmlspecialchars($p['kamar_nomor']).'</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}
$content = ob_get_clean();
$title = 'Daftar Penghuni';
include '../views/layout.php'; 