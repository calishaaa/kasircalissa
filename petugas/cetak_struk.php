<?php
include "header.php";
include "navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>TransaksiID</th>
                            <th>ProdukID</th>
                            <th>Jumlah</th>
                            <th>Harga</th> -->
                            <th>Tanggal</th>
                            <th>Aksi</th> <!-- Kolom untuk tombol hapus -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Lakukan koneksi ke database
                        include '../koneksi.php';

                        // Query untuk mengambil data dari tabel transaksi
                        $query = "SELECT TransaksiID, ProdukID, Jumlah, Harga, Tanggal FROM transaksi";

                        // Lakukan query ke database
                        $result = mysqli_query($koneksi, $query);

                        // Periksa apakah query berhasil dijalankan
                        if ($result) {
                            // Periksa apakah terdapat data yang ditemukan
                            if (mysqli_num_rows($result) > 0) {
                                // Tampilkan data satu per satu dalam bentuk baris tabel
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    // echo "<td>" . $row['TransaksiID'] . "</td>";
                                    // echo "<td>" . $row['ProdukID'] . "</td>";
                                    // echo "<td>" . $row['Jumlah'] . "</td>";
                                    // echo "<td>" . $row['Harga'] . "</td>";
                                    echo "<td>" . $row['Tanggal'] . "</td>";
                                    echo "<td>";
                                    echo "<a href='hapus_transaksi.php?id=" . $row['TransaksiID'] . "' class='btn btn-danger'>Hapus</a>";
                                    echo "<a href='detail_transaksi.php?id=" . $row['TransaksiID'] . "' class='btn btn-info'>Detail</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>Tidak ada data transaksi.</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Error: " . mysqli_error($koneksi) . "</td></tr>";
                        }
                        // Tutup koneksi ke database
                        mysqli_close($koneksi);
                        ?>
                    </tbody>
                </table>
                <!-- Tombol cetak di bawah tabel -->
                <!-- <div class="col">
                    <button onclick="window.print()" class="btn btn-primary mb-3">Cetak</button>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
