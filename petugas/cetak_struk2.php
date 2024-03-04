<?php 
include "header.php";
include "navbar.php";
?>
<div class="card mt-2">
	<div class="card-body">
		
		<?php 
		include '../koneksi.php';
		if(isset($_GET['PelangganID'])) {
            $PelangganID = $_GET['PelangganID'];
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID WHERE pelanggan.PelangganID='$PelangganID'");
            while($d = mysqli_fetch_array($data)){
        ?>
            <table>
                <tr>
                    <td>ID Pelanggan</td>
                    <td>: <?php echo $d['PelangganID']; ?></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>: <?php echo $d['NamaPelanggan']; ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: <?php echo $d['NomorTelepon']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $d['Alamat']; ?></td>
                </tr>
                <tr>
                    <td>Total Pembelian</td>
                    <td>: Rp. <?php echo $d['TotalHarga']; ?></td>
                </tr>
            </table>
            <form method="post" action="tambah_detail_penjualan.php">
                <input type="text" name="PenjualanID" value="<?php echo $d['PenjualanID']; ?>" hidden>
                <input type="text" name="PelangganID" value="<?php echo $d['PelangganID']; ?>" hidden>
                <button type="submit" class="btn btn-primary btn-sm mt-2">Tambah Barang</button>
                <a class="btn btn-info btn-sm" href="detail_struk.php?PelangganID=<?php echo $PelangganID; ?>">Cetak Struk</a>
            </form>
        <?php 
            }
        }
        ?>

        <!-- Sisipkan kode tabel dan form lainnya di sini -->

    </div>
</div>

<?php
include "footer.php";
?>
