<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Petugas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <style>
        /* CSS untuk menampilkan gambar produk di sebelah opsi produk */
        .product-option {
            display: flex;
            align-items: center;
        }

        .product-image {
            width: 50px; /* Sesuaikan dengan ukuran yang diinginkan */
            height: 50px; /* Sesuaikan dengan ukuran yang diinginkan */
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Header -->
<?php include "header.php"; ?>

<!-- Navbar -->
<?php include "navbar.php"; ?>

<div class="container mt-4">
    <h1 class="text-center mb-4">Formulir Pembelian</h1>
    <!-- Formulir Pembelian -->
    <form action="proses_transaksi.php" method="post">
        <label for="produk">Pilih Produk:</label>
        <select name="ProdukID" id="produk" class="form-select mb-3" required>
    <?php
    // Query untuk mengambil daftar produk dari database
    include '../koneksi.php';
    $query_produk = "SELECT * FROM produk";
    $result_produk = mysqli_query($koneksi, $query_produk);
    while ($row_produk = mysqli_fetch_assoc($result_produk)) {?>
        <option value= '<?= $row_produk['ProdukID']?>' class='product-option'>
        <img src="<?="../assets/" . $row_produk['gambar']; ?>" class='product-image'>
        <?= $row_produk['NamaProduk'];?>   <?= " - Rp " . $row_produk['Harga'];?></option>
        <?php
    }
    
    ?>
</select>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" class="form-control mb-3" min="1" required>
        <button type="submit" class="btn btn-primary">Beli</button>
    </form>
</div>

</body>
</html>
<hr class="my-4">
<?php include "footer.php"; ?>