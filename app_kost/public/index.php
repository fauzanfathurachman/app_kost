<?php
require_once '../config/config.php';
require_once '../helpers/format.php';

$page = $_GET['page'] ?? 'kamar';
$action = $_GET['action'] ?? 'list';

switch ($page) {
    case 'kamar':
        require_once '../controllers/kamar.php';
        break;
    case 'penghuni':
        require_once '../controllers/penghuni.php';
        break;
    case 'barang':
        require_once '../controllers/barang.php';
        break;
    default:
        require_once '../controllers/kamar.php';
} 