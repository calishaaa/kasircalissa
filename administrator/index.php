<?php 
include "header.php"; 
include "navbar.php"; 

// Koneksi database
include '../koneksi.php';

// Mendapatkan jumlah produk
$data_produk = mysqli_query($koneksi, "SELECT * FROM produk");
$jumlah_produk = mysqli_num_rows($data_produk);

// Mendapatkan jumlah pembelian
$data_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan");
$jumlah_penjualan = mysqli_num_rows($data_penjualan);

// Mendapatkan jumlah pengguna
$data_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$jumlah_petugas = mysqli_num_rows($data_petugas);
?>

<div class="container mt-4">
    <div class="row">
        <!-- Kartu Data Barang -->
        <div class="col-sm-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-white">Data Barang</h5>
                    <h3 class="mb-4 text-white"><?php echo isset($jumlah_produk) ? $jumlah_produk : 0; ?></h3>
                    <a href="data_barang.php" class="btn btn-light btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <!-- Kartu Data Pembelian -->
        <!-- <div class="col-sm-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-white">Data Pembelian</h5>
                    <h3 class="mb-4 text-white"><?php echo isset($jumlah_penjualan) ? $jumlah_penjualan : 0; ?></h3>
                    <a href="pembelian.php" class="btn btn-light btn-sm">Detail</a>
                </div>
            </div>
        </div> -->
        <!-- Kartu Data Pengguna -->
        <div class="col-sm-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-white">Data Pengguna</h5>
                    <h3 class="mb-4 text-white"><?php echo isset($jumlah_petugas) ? $jumlah_petugas : 0; ?></h3>
                    <a href="data_pengguna.php" class="btn btn-light btn-sm">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kartu Selamat Datang -->
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Selamat Datang</h5>
            <p class="card-text">Selamat datang di halaman administrator. Silakan akses beberapa fitur yang tersedia.</p>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
