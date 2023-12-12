<?php
include_once '../controllers/C_daftar.php';

$daftar = new C_daftar();

if ($_GET[ 'aksi' ] == 'tambah') {

    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $umur = $_POST['umur'];
    $keluhan = $_POST['keluhan'];


            $query = $daftar->tambah($nama_pasien, $nomor_antrian, $umur, $keluhan);
    

}elseif ($_GET['aksi']  == 'update'){
    
  
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $umur = $_POST['umur'];
    $keluhan = $_POST['keluhan'];

   
        $query = $daftar->update($nama_pasien, $nomor_antrian, $umur, $keluhan);


}elseif ($_GET['aksi']  == 'hapus'){
    
    $nama_pasien = $_GET['id'];

    $daftar->delete($nama_pasien);
}
?>