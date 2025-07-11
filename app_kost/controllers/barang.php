<?php
// controllers/barang.php
try {
    $stmt = $pdo->query("SELECT b.*, k.nomor as kamar_nomor FROM barang b LEFT JOIN kamar k ON b.kamar_id = k.id");
    $barang = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Gagal mengambil data barang: " . $e->getMessage();
}

ob_start();
if (!empty($error)) {
    echo '<div class="alert alert-danger">'.$error.'</div>';
}
if (!empty($barang)) {
    echo '<h2>Daftar Barang</h2>';
    echo '<table class="table table-bordered"><thead><tr><th>No</th><th>Nama</th><th>Jumlah</th><th>Kamar</th></tr></thead><tbody>';
    $no=1;
    foreach ($barang as $b) {
        echo '<tr>';
        echo '<td>'.$no++.'</td>';
        echo '<td>'.htmlspecialchars($b['nama']).'</td>';
        echo '<td>'.htmlspecialchars($b['jumlah']).'</td>';
        echo '<td>'.htmlspecialchars($b['kamar_nomor']).'</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}
$content = ob_get_clean();
$title = 'Daftar Barang';
include '../views/layout.php'; 