<?php
include_once 'C_koneksi.php';

class C_daftar{

    public function tampil() {
        
        $conn = new C_koneksi();

        $sql = "SELECT * FROM daftar ORDER BY nama_pasien DESC";
        
        $query = mysqli_query($conn->conn(), $sql);
            // var_dump($sql);
            // exit;
        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
    }
    return $hasil;
    }
    
    public function tambah($nama_pasien,$nomor_antrian,$umur,$keluhan) {
        $conn = new C_koneksi ();
        
        $sql = "INSERT INTO daftar VALUES('$nama_pasien','$nomor_antrian','$umur','$keluhan')";
        $query = mysqli_query($conn->conn(), $sql);
        // var_dump($sql);
        // exit;
    if ($query){
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='../views/V_daftar.php'</script>";
        //"data berhasil ditambahkan ke tabel barang";
    }else {
        echo "data tidak berhasil ditambahkan ke tabel barang";
    }
    }

    public function edit($nama_pasien) {

        $conn = new C_koneksi();
        
        $sql = "SELECT * FROM daftar WHERE nama_pasien = '$nama_pasien'";
        
        $query = mysqli_query($conn->conn(), $sql);

        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
        }

        return $hasil;
    }

    public function update($nama_pasien,$nomor_antrian,$umur,$keluhan) {
        
        $conn = new C_koneksi ();
        
        $sql = "UPDATE daftar SET nomor_antrian = '$nomor_antrian', umur = '$umur', keluhan = '$keluhan' WHERE nama_pasien = '$nama_pasien'";

        $query = mysqli_query($conn->conn(), $sql);
        // var_dump(sql);
        // exit;

        if ($query){
        echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/V_daftar.php'</script>";
        //echo "data berhasil diupdate ke tabel barang";
        }else {
        echo "data tidak berhasil diupdate ke tabel barang";
        }
    }

     function delete($nama_pasien){

        $conn = new C_koneksi();

        $sql = "DELETE FROM daftar WHERE nama_pasien = '$nama_pasien'";

        mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_daftar.php");

    }
    
}

?>
    
    



    
