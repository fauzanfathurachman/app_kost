<?php
// models/kamar.php
function getAllKamar($pdo) {
    $stmt = $pdo->query("SELECT * FROM kamar");
    return $stmt->fetchAll();
} 