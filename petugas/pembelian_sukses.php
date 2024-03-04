<?php
include "header.php";
include "navbar.php";
?>
<?php
// Fungsi untuk menangani proses pembelian
public function handlePembelian() {
    // Pastikan request menggunakan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi dan sanitasi input
        $id_petugas = isset($_POST['id_petugas']) ? $_POST['id_petugas'] : '';
        $tanggal_pembelian = isset($_POST['tanggal_pembelian']) ? $_POST['tanggal_pembelian'] : '';
        $total_harga = isset($_POST['total_harga']) ? $_POST['total_harga'] : '';

        // Validasi input lebih lanjut jika diperlukan
        if (empty($id_petugas) || empty($tanggal_pembelian) || empty($total_harga)) {
            echo "Form pembelian tidak lengkap";
            return;
        }

        // Masukkan data ke database
        include '../koneksi.php'; // Sesuaikan dengan lokasi file koneksi.php Anda

        $query = "INSERT INTO pembelian_petugas (ID_Petugas, Tanggal_Pembelian, Total_Harga) VALUES ('$id_petugas', '$tanggal_pembelian', '$total_harga')";

        if (mysqli_query($koneksi, $query)) {
            // Redirect ke halaman sukses atau sesuai kebutuhan
            header("Location: pembelian_sukses.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    }
}
?>
<?php
include "footer.php";
?>