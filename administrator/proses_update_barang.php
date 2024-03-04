<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$ProdukID = $_POST['ProdukID'];
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];

// memeriksa apakah ada gambar yang diunggah atau tidak
if ($_FILES['gambar']['size'] > 0) {
    // mengatur lokasi penyimpanan gambar
    $lokasi_gambar = '../assets/';

    // menangkap file gambar yang diunggah
    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // memeriksa apakah file yang diunggah adalah gambar dan memiliki ekstensi yang diizinkan
    $allowed_extensions = array('jpg', 'jpeg', 'png');
    $file_extension = pathinfo($nama_file, PATHINFO_EXTENSION);

    if (in_array(strtolower($file_extension), $allowed_extensions)) {
        // pindahkan gambar yang diunggah ke lokasi yang ditentukan
        $gambar_baru = $lokasi_gambar . $nama_file;
        move_uploaded_file($tmp_file, $gambar_baru);

        // update data beserta nama gambar ke database
        mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok', gambar='$nama_file' WHERE ProdukID='$ProdukID'");
    } else {
        // Jika file tidak dalam format yang diizinkan, alihkan kembali ke halaman sebelumnya dengan pesan kesalahan
        header("location:data_barang.php?pesan=error-format");
        exit(); // berhenti eksekusi script
    }
} else {
    // jika tidak ada gambar yang diunggah, update data tanpa mengubah gambar
    mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok' WHERE ProdukID='$ProdukID'");
}

// mengalihkan halaman kembali ke data_barang.php dengan pesan update
header("location:data_barang.php?pesan=update");
?>
