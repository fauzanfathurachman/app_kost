<?php
// controllers/kamar.php
try {
    $stmt = $pdo->query("SELECT * FROM kamar");
    $kamars = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Gagal mengambil data kamar: " . $e->getMessage();
}

ob_start();
if (!empty($error)) {
    echo '<div class="alert alert-danger">'.$error.'</div>';
}
if (!empty($kamars)) {
    echo '<h2>Daftar Kamar</h2>';
    echo '<table class="table table-bordered"><thead><tr><th>No</th><th>Nomor</th><th>Tipe</th><th>Harga</th><th>Status</th></tr></thead><tbody>';
    $no=1;
    foreach ($kamars as $kamar) {
        echo '<tr>';
        echo '<td>'.$no++.'</td>';
        echo '<td>'.htmlspecialchars($kamar['nomor']).'</td>';
        echo '<td>'.htmlspecialchars($kamar['tipe']).'</td>';
        echo '<td>'.format_rupiah($kamar['harga']).'</td>';
        echo '<td>'.htmlspecialchars($kamar['status']).'</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}
$content = ob_get_clean();
$title = 'Daftar Kamar';
include '../views/layout.php'; 