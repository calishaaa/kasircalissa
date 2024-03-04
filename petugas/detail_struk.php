<?php 
include "header.php";
include "navbar.php";
include "../koneksi.php";

// Periksa apakah 'PelangganID' tersedia dalam URL
if(isset($_GET['PelangganID'])) {
    $PelangganID = $_GET['PelangganID'];
    
    // Query untuk mendapatkan data pelanggan
    $result = mysqli_query($koneksi, "SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID WHERE pelanggan.PelangganID='$PelangganID'");
    
    // Periksa apakah data pelanggan ditemukan
    if(mysqli_num_rows($result) > 0) {
        $pelanggan_data = mysqli_fetch_array($result);
?>
<head>
    <style>
        .container {
            font-family: Arial, sans-serif;
        }
        .col-md-6 {
            font-size: 16px;
        }
        .col-md-6 h3 {
            font-size: 24px;
            font-weight: bold;
        }
        .text-right button {
            font-size: 16px;
        }
    </style>
</head>
<div class="row">
        <div class="col-md-7 mt-5" style="font-family: Arial, sans-serif; font-size: 16px;">
                    <h3 style="font-size: 24px; font-weight: bold;">Informasi Pelanggan</h3>
          <!-- Struk -->
          <div class="col-md-5 mb-3" style="margin-top: 20px;">
    <div class="card" id="print">
        <div class="card-header bg-white border-0 pb-0 pt-4">
            <div class="row">
            <div class="card-header bg-white border-0 pb-0 pt-4">
          <h5 class='card-tittle mb-0 text-center' id="font"><i class="fa fa-cogs fa-rotate-90"></i><b>Kashier</b></h5>
      <p class='m-0 small text-center'>Jawa Barat</p>
        <p class='small text-center'>Cimahi</p>
                <div class="col-8 col-sm-9 pr-0">
                    <table class="table table-bordered">
                        <tr>
                            <td>Id Pelanggan</td><td>:</td><td><?php echo $pelanggan_data['PelangganID']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pelanggan</td><td>:</td><td><?php echo $pelanggan_data['NamaPelanggan']; ?></td>
                        </tr>
                        <tr>
                            <td>No. Telepon:</td><td>:</td><td><?php echo $pelanggan_data['NomorTelepon']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td><td>:</td><td><?php echo $pelanggan_data['Alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>Total Pembelian</td><td>Rp</td><td><?php echo $pelanggan_data['TotalHarga']; ?></td>
                        </tr>
                    </table>
                    <!-- <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                        <li>ID Pelanggan: <?php echo $pelanggan_data['PelangganID']; ?></li>
                        <li>Nama Pelanggan: <?php echo $pelanggan_data['NamaPelanggan']; ?></li>
                        <li>No. Telepon: <?php echo $pelanggan_data['NomorTelepon']; ?></li>
                        <li>Alamat: <?php echo $pelanggan_data['Alamat']; ?></li>
                        <li>Total Pembelian: Rp. <?php echo $pelanggan_data['TotalHarga']; ?></li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="card-body small pt-0">
            <hr class="mt-0">
            <div class="row">
                <div class="col-4 pr-0">
                    <!-- <span><b>Nama Barang</b></span> -->
                </div>
                <div class="col-2 px-0 text-center">
                    <!-- <span><b>Jumlah</b></span> -->
                </div>
                <div class="col-3 px-0 text-right">
                    <!-- <span><b>Harga</b></span> -->
                </div>
                <div class="col-3 pl-0 text-right">
                    <!-- <span><b>Total</b></span> -->
                </div>
                <div class="col-12">
                    <hr class="mt-2">
                    <ul class="list-group border-0">
                        <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                            <!-- <b>Total</b> -->
                            <span><b></b></span>
                        </li>
                        <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                            <!-- <b>Bayar</b> -->
                            <span><b></b></span>
                        </li>
                        <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                            <!-- <b>Kembalian</b> -->
                            <span><b></b></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 mb-2 offset-md-1">
    <div class="row">
<div class="text-right mt-3 mr-3 print-button">
    <button class="btn btn-primary" style="font-size: 16px;" onclick="window.print()">Cetak Struk</button>
</div>
    <style>
    @media print {
        /* Semua elemen dengan class "footer" akan disembunyikan saat pencetakan */
        .footer {
            display: none;
        }

        /* Tombol "Cetak Struk" juga akan disembunyikan saat pencetakan */
        .print-button {
            display: none;
        }
    }
</style>
  
<!--end struk-->

            </div>
        </div>

  <!--end navbar-->
  <div class="container-fluid">
    <div class="row mt-5">

<?php 
    } else {
        echo "Data pelanggan tidak ditemukan.";
    }
} else {
    echo "PelangganID tidak ditemukan dalam parameter URL.";
}
include "footer.php"; 
?>
