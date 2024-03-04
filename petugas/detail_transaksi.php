<?php
// Jika ada ID transaksi yang diterima dari URL
if(isset($_GET['id'])) {
    // Tangkap ID transaksi
    $transaksiID = $_GET['id'];
    
    // Lakukan koneksi ke basis data
    $koneksi = mysqli_connect("localhost", "root", "", "kasir");
    
    // Periksa apakah koneksi berhasil
    if(mysqli_connect_errno()) {
        echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
        exit();
    }
    
    // Query untuk mengambil detail transaksi berdasarkan ID
    $query = "SELECT * FROM transaksi WHERE TransaksiID = $transaksiID";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if($result) {
        // Periksa apakah ada hasil yang ditemukan
        if(mysqli_num_rows($result) > 0) {
            // Ambil data transaksi
            $row = mysqli_fetch_assoc($result);
            
            // Tampilkan detail transaksi
            echo "<div style='background-color: #f2f2f2; padding: 10px;'>";
            echo "<h2 style='margin-bottom: 10px;'>Detail Transaksi</h2>";
            echo "<div>";
            echo "<strong>Transaksi ID:</strong> " . $row['TransaksiID'] . "<br>";
            echo "<strong>Produk ID:</strong> " . $row['ProdukID'] . "<br>";
            echo "<strong>Jumlah:</strong> " . $row['Jumlah'] . "<br>";
            echo "<strong>Harga:</strong> " . $row['Harga'] . "<br>";
            echo "</div>";
            echo "</div>";
           
            // Bebaskan hasil query
            mysqli_free_result($result);
        } else {
            echo "Detail transaksi tidak ditemukan.";
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Query untuk mengambil detail produk
    $query_produk = "SELECT ProdukID, NamaProduk, Harga, Stok, gambar FROM produk";
    $result_produk = mysqli_query($koneksi, $query_produk);

    // Periksa apakah query produk berhasil dieksekusi
    if($result_produk) {
        // Periksa apakah ada hasil produk yang ditemukan
        if(mysqli_num_rows($result_produk) > 0) {
            // Ambil data produk
            $row_produk = mysqli_fetch_assoc($result_produk);
            
            // Tampilkan detail produk
            echo "<div style='background-color: #f2f2f2; padding: 10px;'>";
            echo "<h2 style='margin-bottom: 10px;'>Detail Produk</h2>";
            echo "<div>";
            echo "<strong>Produk ID:</strong> " . $row_produk['ProdukID'] . "<br>";
            echo "<strong>Nama Produk:</strong> " . $row_produk['NamaProduk'] . "<br>";
            echo "<strong>Harga:</strong> " . $row_produk['Harga'] . "<br>";
            echo "<strong>Stok:</strong> " . $row_produk['Stok'] . "<br>";
            echo "</div>";
            echo "</div>";
            
            // Tampilkan gambar produk
            echo "<div style='background-color: #f2f2f2; padding: 10px;'>";
            echo "<h3 style='margin-bottom: 10px;'>Gambar Produk</h3>";
            echo "<img src='../assets/" . $row_produk['gambar'] . "' alt='Gambar Produk' width='200'>";
            echo "</div>";
           
            // Bebaskan hasil query produk
            mysqli_free_result($result_produk);
        } else {
            echo "Detail produk tidak ditemukan.";
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    echo "ID transaksi tidak ditemukan.";
}
?>

<style>
    @media print {
        .no-print {
            display: none;
        }
    }
</style>

<?php
// Tambahkan button cetak jika tidak dalam mode print
if (!isset($_GET['print'])) {
    echo '<div class="col no-print">
            <button onclick="window.print()" class="btn btn-primary mb-3 mr-3">Cetak</button>
            <button onclick="window.history.back()" class="btn btn-danger mb-3">Keluar</button>
          </div>';
}
?>

