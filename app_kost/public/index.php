<?php
$page = $_GET['page'] ?? 'public';
$menu = $_GET['menu'] ?? '';

if ($page === 'admin') {
    $active = $menu ?: 'dashboard';
    $breadcrumb = [];
    ob_start();
    if ($active === 'dashboard') {
        include '../views/admin/dashboard.php';
    }
    $content = ob_get_clean();
    $title = 'Dashboard Admin';
    include '../views/layout_admin.php';
    exit;
}
// Data dummy kompleks untuk landing page
$stat_penghuni = 12;
$stat_fasilitas = 5;
$fasilitas_unggulan = [
  ['icon'=>'fa-snowflake','nama'=>'AC'],
  ['icon'=>'fa-wifi','nama'=>'Wifi'],
  ['icon'=>'fa-tv','nama'=>'TV'],
  ['icon'=>'fa-shower','nama'=>'Kamar Mandi Dalam'],
  ['icon'=>'fa-car','nama'=>'Parkir'],
];
$filter_chips = ['AC','Wifi','Kipas','Double','Single'];
$kamar_kosong = [
  ['nomor'=>'A1','harga'=>500000,'fasilitas'=>'AC, Wifi, Lemari','foto'=>'kamar1.jpg','tipe'=>'Single'],
  ['nomor'=>'A2','harga'=>550000,'fasilitas'=>'Kipas, Wifi, Meja','foto'=>'kamar2.jpg','tipe'=>'Single'],
  ['nomor'=>'B1','harga'=>600000,'fasilitas'=>'AC, TV, Lemari','foto'=>'kamar3.jpg','tipe'=>'Double'],
];
$gallery = [
  ['file'=>'hero1.jpg','kategori'=>'fasilitas'],
  ['file'=>'hero2.jpg','kategori'=>'kamar'],
  ['file'=>'hero3.jpg','kategori'=>'kamar'],
  ['file'=>'kamar1.jpg','kategori'=>'kamar'],
  ['file'=>'kamar2.jpg','kategori'=>'kamar'],
  ['file'=>'kamar3.jpg','kategori'=>'kamar'],
];
$testimonials = [
  ['nama'=>'Andi','pesan'=>'Kostnya nyaman dan bersih!','foto'=>'user1.jpg','rating'=>5],
  ['nama'=>'Siti','pesan'=>'Fasilitas lengkap, harga terjangkau.','foto'=>'user2.jpg','rating'=>4],
  ['nama'=>'Budi','pesan'=>'Lokasi strategis, recommended!','foto'=>'user3.jpg','rating'=>5],
];
$kamar_jatuh_tempo = [
  ['nomor'=>'A1','deadline'=>date('Y-m-d H:i:s', strtotime('+2 days'))],
];
$kamar_telat_bayar = [
  ['nomor'=>'B1','hari_telat'=>3],
];
include '../views/public/meta.php';
include '../views/public/loading.php';
include '../views/public/navbar.php';
include '../views/public/hero.php';
include '../views/public/fasilitas.php';
include '../views/public/kamar_tersedia.php';
include '../views/public/info_pembayaran.php';
include '../views/public/gallery.php';
include '../views/public/testimonial.php';
include '../views/public/contact.php';
include '../views/public/footer.php';
?>
<link rel="stylesheet" href="assets/css/public.css">
<script src="assets/js/public.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/countdown.js"></script> 