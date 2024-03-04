<?php
// Pastikan form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $produkID = $_POST['ProdukID'];
    $jumlah = $_POST['Jumlah'];

    // Di sini Anda dapat menambahkan logika untuk memproses pembelian,
    // misalnya memperbarui stok, mencatat transaksi, atau menghitung total harga.

    // Contoh: Update stok produk (misalkan Anda memiliki database)
    // $koneksi = new mysqli("localhost", "username", "password", "nama_database");
    // $query = "UPDATE produk SET Stok = Stok - $jumlah WHERE ProdukID = $produkID";
    // $koneksi->query($query);

    // Simpan pesan sukses atau error untuk ditampilkan ke pengguna
    $pesan = "Pembelian berhasil!";
} else {
    // Jika halaman diakses secara langsung tanpa melalui form, arahkan kembali ke halaman sebelumnya
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pembelian Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="pesan">
            <?php if (isset($pesan)) echo $pesan; ?>
        </div>
        <a href="index.php">Kembali ke Halaman Produk</a>
    </div>
</body>

</html>
