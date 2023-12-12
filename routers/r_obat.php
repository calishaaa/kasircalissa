<?php
include_once '../controllers/C_Obat.php';

$obat = new C_Obat();

if ($_GET['aksi']  == 'tambah'){
    
  
    $id_obat = $_POST['id_obat'];
    $nama_obat = $_POST['nama_obat'];
    $id_pasien = $_POST['id_pasien'];
    $harga_obat = $_POST['harga_obat'];
   
        $query = $obat->tambah($id_obat,$nama_obat,$id_pasien,$harga_obat);



}elseif ($_GET['aksi']  == 'update'){
    
  
    $id_obat = $_POST['id_obat'];
    $nama_obat = $_POST['nama_obat'];
    $id_pasien = $_POST['id_pasien'];
    $harga_obat = $_POST['harga_obat'];
   
        $query = $obat->update($id_obat,$nama_obat,$id_pasien,$harga_obat);



}elseif ($_GET['aksi']  == 'hapus'){
    
    $id_obat = $_GET['id'];

    $query = $obat->delete($id_obat);
}
?>