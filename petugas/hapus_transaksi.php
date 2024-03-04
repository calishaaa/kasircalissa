<?php
include '../koneksi.php';

$message = "";

if(isset($_GET['id'])) {
    $transaksiID = $_GET['id'];

    $query = "DELETE FROM transaksi WHERE TransaksiID = '$transaksiID'";
    $result = mysqli_query($koneksi, $query);

    if($result) {
        $message = "Transaksi berhasil dihapus.";
    } else {
        $message = "Gagal menghapus transaksi: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemberitahuan Hapus Transaksi</title>
</head>
<body>
    <script>
        alert("<?php echo $message; ?>");
        window.location.href = 'cetak_struk.php';
    </script>
</body>
</html>
