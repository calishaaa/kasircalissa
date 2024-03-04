<?php
session_start();
include '../koneksi.php';

if(isset($_POST['ProdukID']) && isset($_POST['jumlah'])) {
    $produkID = $_POST['ProdukID'];
    $jumlah = $_POST['jumlah'];

    // Dapatkan informasi produk dari database
    $query_produk = "SELECT * FROM produk WHERE ProdukID = $produkID";
    $result_produk = mysqli_query($koneksi, $query_produk);
    $row_produk = mysqli_fetch_assoc($result_produk);

    // Validasi stok produk yang mencukupi
    if($row_produk['Stok'] >= $jumlah) {
        // Hitung total harga
        $totalHarga = $jumlah * $row_produk['Harga'];

        // Simpan informasi transaksi ke dalam tabel transaksi
        $query_insert_transaksi = "INSERT INTO transaksi (produk_id, jumlah, total_harga) VALUES ($produkID, $jumlah, $totalHarga)";
        mysqli_query($koneksi, $query_insert_transaksi);

        // Kurangi stok produk yang dibeli
        $sisaStok = $row_produk['Stok'] - $jumlah;
        $query_update_stok = "UPDATE produk SET Stok = $sisaStok WHERE ProdukID = $produkID";
        mysqli_query($koneksi, $query_update_stok);

        // Redirect ke halaman sukses atau lainnya
        header("Location: halaman_sukses.php?produk_id=$produkID&jumlah=$jumlah&total_harga=$totalHarga");
        exit();
    } else {
        // Redirect kembali ke halaman pembelian dengan pesan error jika stok tidak mencukupi
        header("Location: halaman_pembelian.php?pesan=gagal_stok");
        exit();
    }
} else {
    // Redirect kembali ke halaman pembelian jika data tidak lengkap
    header("Location: halaman_pembelian.php?pesan=gagal_data");
    exit();
}
?>

