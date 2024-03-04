<?php
// beli_produk.php

// Lakukan validasi sesuai kebutuhan, misalnya:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['produk_id'])) {
        $produkID = $_POST['produk_id'];
        
        // Lakukan proses pembelian, misalnya dengan menambahkan data pembelian ke database atau mengirimkan pesanan ke penyedia layanan pembayaran
        // Setelah proses pembelian selesai, kirimkan respons ke klien
       echo json_encode(array('success' => true, 'message' => 'Pembelian produk berhasil'));
        
        // Redirect ke halaman struk dengan menyertakan informasi produk yang dibeli
        header("location: struk_pembelian.php?produk_id=$produkID");
    } else {
        // Jika ID produk tidak tersedia, kirimkan pesan error
        echo json_encode(array('success' => false, 'message' => 'ID produk tidak tersedia'));
    }
} else {
    // Jika metode request bukan POST, kirimkan respons dengan pesan error
    echo json_encode(array('success' => false, 'message' => 'Metode request tidak valid'));
}
?>
