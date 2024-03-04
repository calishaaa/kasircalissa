<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];

// mengatur lokasi penyimpanan gambar
$lokasi_gambar = '../assets/';

// menangkap file gambar yang diunggah
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// jika ada gambar yang diunggah
if ($nama_file != "") {
    // pindahkan gambar yang diunggah ke lokasi yang ditentukan
    $gambar_baru = $lokasi_gambar . $nama_file;
    move_uploaded_file($tmp_file, $gambar_baru);

    // input data beserta nama gambar ke database
    mysqli_query($koneksi,"INSERT INTO produk (NamaProduk, Harga, Stok, gambar) VALUES ('$NamaProduk','$Harga','$Stok','$nama_file')");
} else {
    // jika tidak ada gambar yang diunggah, input data tanpa menyertakan gambar
    mysqli_query($koneksi,"INSERT INTO produk (NamaProduk, Harga, Stok) VALUES ('$NamaProduk','$Harga','$Stok')");
}

// mengalihkan halaman kembali ke data_barang.php dengan pesan simpan
header("location:data_barang.php?pesan=simpan");

?>
