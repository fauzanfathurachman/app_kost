<aside class="sidebar bg-dark text-white">
  <div class="sidebar-header p-3">
    <h4><i class="fa fa-home"></i> Admin Kost</h4>
  </div>
  <ul class="nav flex-column">
    <li class="nav-item"><a class="nav-link<?= $active=='dashboard'?' active':'' ?>" href="?page=admin&menu=dashboard"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="nav-item"><a class="nav-link<?= $active=='penghuni'?' active':'' ?>" href="?page=admin&menu=penghuni"><i class="fa fa-users"></i> Penghuni</a></li>
    <li class="nav-item"><a class="nav-link<?= $active=='kamar'?' active':'' ?>" href="?page=admin&menu=kamar"><i class="fa fa-bed"></i> Kamar</a></li>
    <li class="nav-item"><a class="nav-link<?= $active=='barang'?' active':'' ?>" href="?page=admin&menu=barang"><i class="fa fa-box"></i> Barang</a></li>
    <li class="nav-item"><a class="nav-link<?= $active=='tagihan'?' active':'' ?>" href="?page=admin&menu=tagihan"><i class="fa fa-file-invoice"></i> Tagihan</a></li>
    <li class="nav-item"><a class="nav-link<?= $active=='pembayaran'?' active':'' ?>" href="?page=admin&menu=pembayaran"><i class="fa fa-money-bill"></i> Pembayaran</a></li>
  </ul>
</aside> 