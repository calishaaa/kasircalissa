<?php
session_start();
include '../koneksi.php';

if(isset($_POST['ProdukID']) && isset($_POST['jumlah'])) {
    $produkID = $_POST['ProdukID'];
    $jumlah = $_POST['jumlah'];

    // Dapatkan informasi produk dari database termasuk harga
    $query_produk = "SELECT * FROM produk WHERE ProdukID = $produkID";
    $result_produk = mysqli_query($koneksi, $query_produk);
    $row_produk = mysqli_fetch_assoc($result_produk);

    // Validasi stok produk yang mencukupi
    if($row_produk['Stok'] >= $jumlah) {
        // Hitung total harga
        $totalHarga = $jumlah * $row_produk['Harga'];

        // Simpan informasi transaksi ke dalam tabel transaksi
        $tanggal = date('Y-m-d'); // Format tanggal MySQL
        $query_insert_transaksi = "INSERT INTO transaksi (ProdukID, Jumlah, Harga, Tanggal) VALUES ($produkID, $jumlah, $totalHarga, '$tanggal')";
        mysqli_query($koneksi, $query_insert_transaksi);

        // Kurangi stok produk yang dibeli
        $sisaStok = $row_produk['Stok'] - $jumlah;
        $query_update_stok = "UPDATE produk SET Stok = $sisaStok WHERE ProdukID = $produkID";
        mysqli_query($koneksi, $query_update_stok);

        // Redirect ke halaman sukses atau lainnya
        header("Location: halaman_sukses.php");
        exit();
    } elseif ($jumlah > $row_produk['Stok']) {
        // Jika ya, kirimkan pesan kesalahan dan redirect kembali ke halaman pembelian
       echo "<script>alert('Jumlah melebihi stok!!');window.location='halaman_pembelian.php'</script>";
        
    }
} else {
    // Redirect kembali ke halaman pembelian jika data tidak lengkap
    header("Location: halaman_pembelian.php");
}
?>
