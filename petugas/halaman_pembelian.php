<?php
include "header.php";
include '../koneksi.php';

// Cek apakah pengguna telah login
if (!isset($_SESSION['level'])) {
    header("location:../index.php?pesan=gagal");
    exit(); // Hentikan eksekusi skrip jika pengguna tidak terautentikasi atau bukan petugas
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
</head>
<body>

<!-- Header -->


<!-- Navbar -->
<?php include "navbar.php"; ?>

<div class="container mt-4">
    <h1 class="text-center mb-4">Formulir Pembelian</h1>
    <!-- Formulir Pembelian -->
    <form action="cetak_struk.php" method="post">
        <label for="produk">Pilih Produk:</label>
        <select name="ProdukID" id="produk" class="form-select mb-3" required>
            <?php
            // Query untuk mengambil daftar produk dari database
            include '../koneksi.php';
            $query_produk = "SELECT * FROM produk";
            $result_produk = mysqli_query($koneksi, $query_produk);
            while ($row_produk = mysqli_fetch_assoc($result_produk)) {
                echo "<option value='" . $row_produk['ProdukID'] . "'>" . $row_produk['NamaProduk'] . "</option>";
            }
            ?>
        </select>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control mb-3" min="1" required>
        <button type="submit" class="btn btn-primary">Beli</button>
    </form>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>

</body>
</html>
