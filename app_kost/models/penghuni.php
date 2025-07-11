<?php
// models/penghuni.php
function getAllPenghuni($pdo) {
    $stmt = $pdo->query("SELECT * FROM penghuni");
    return $stmt->fetchAll();
} 