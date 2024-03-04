<?php 
// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$PelangganID = $_POST['PelangganID'];
$PenjualanID = $_POST['PenjualanID'];

// Perlu diperhatikan bahwa nilai JumlahProduk dan Subtotal tidak diisi dalam query INSERT ini,
// karena sepertinya nilai-nilai ini akan diisi oleh proses yang lebih lanjut.
// Namun, untuk keperluan demonstrasi, kita sementara mengisi nilai JumlahProduk dan Subtotal dengan nilai default.

// Menginput data ke database
$query = "INSERT INTO detailpenjualan (PenjualanID, JumlahProduk, Subtotal) VALUES ('$PenjualanID', 0, 0)";
$result = mysqli_query($koneksi, $query);

if($result) {
    // Jika pengisian data berhasil, maka alihkan halaman kembali ke detail_pembelian.php dengan membawa parameter PelangganID
    header("location:detail_pembelian.php?PelangganID=$PelangganID");
} else {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    echo "Gagal menambahkan detail penjualan: " . mysqli_error($koneksi);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
