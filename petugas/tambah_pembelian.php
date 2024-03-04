<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan values('$PelangganID','$NamaPelanggan','$Alamat','$NomorTelepon')");
mysqli_query($koneksi,"insert into penjualan values('','$TanggalPenjualan','','$PelangganID')");

// mengambil ID transaksi terbaru
$last_id = mysqli_insert_id($koneksi);

// mengalihkan halaman kembali ke data_barang.php
header("location:pembelian.php?pesan=simpan");

?>
<?php
include "header.php";
include "navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Data Pembelian</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>TransaksiID</th>
                            <th>ProdukID</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Query untuk mengambil data pembelian berdasarkan ID transaksi terbaru
                        $query_pembelian = "SELECT TransaksiID, ProdukID, Jumlah, Harga, Tanggal FROM transaksi WHERE TransaksiID = $last_id";

                        // Lakukan query ke database
                        $result_pembelian = mysqli_query($koneksi, $query_pembelian);

                        // Periksa apakah query berhasil dijalankan
                        if($result_pembelian) {
                            // Periksa apakah terdapat data yang ditemukan
                            if(mysqli_num_rows($result_pembelian) > 0) {
                                // Tampilkan data satu per satu dalam bentuk baris tabel
                                while($row_pembelian = mysqli_fetch_assoc($result_pembelian)) {
                                    echo "<tr>";
                                    echo "<td>" . $row_pembelian['TransaksiID'] . "</td>";
                                    echo "<td>" . $row_pembelian['ProdukID'] . "</td>";
                                    echo "<td>" . $row_pembelian['Jumlah'] . "</td>";
                                    echo "<td>" . $row_pembelian['Harga'] . "</td>";
                                    echo "<td>" . $row_pembelian['Tanggal'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>Tidak ada data pembelian.</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Error: " . mysqli_error($koneksi) . "</td></tr>";
                        }

                        // Tutup koneksi ke database
                        mysqli_close($koneksi);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
