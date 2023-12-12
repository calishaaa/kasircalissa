<?php
//untuk menghubungkan file c koneksi kedalam c barang
include_once 'C_koneksi.php';

class C_Obat{

    public function tampil() {
        
        $conn = new C_koneksi();

        $sql = "SELECT * FROM obat JOIN pasien ON obat.id_pasien = pasien.id_pasien ORDER BY id_obat DESC";
        
        $query = mysqli_query($conn->conn(), $sql);
            // var_dump($sql);
            // exit;
        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
    }
    return $hasil;
    }
    
    public function tambah($id_obat,$nama_obat,$id_pasien,$harga_obat) {
        $conn = new C_koneksi ();
        
        $sql = "INSERT INTO obat VALUES('$id_obat','$nama_obat','$id_pasien','$harga_obat')";
        $query = mysqli_query($conn->conn(), $sql);
        // var_dump($sql);
        // exit;
    if ($query){
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='../views/v_obat.php'</script>";
        //"data berhasil ditambahkan ke tabel barang";
    }else {
        echo "data tidak berhasil ditambahkan ke tabel barang";
    }
    }

    public function edit($id_obat) {

        $conn = new C_koneksi();
        
        $sql = "SELECT * FROM obat WHERE id_obat = '$id_obat'";
        
        $query = mysqli_query($conn->conn(), $sql);

        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
        }

        return $hasil;
    }

    public function update($id_obat, $nama_obat, $id_pasien, $harga_obat) {
        
        $conn = new C_koneksi ();
        
        $sql = "UPDATE obat SET nama_obat = '$nama_obat', id_pasien = '$id_pasien', harga_obat = '$harga_obat' WHERE id_obat = '$id_obat'";

        $query = mysqli_query($conn->conn(), $sql);
        // var_dump(sql);
        // exit;

        if ($query){
        echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/v_obat.php'</script>";
        //echo "data berhasil diupdate ke tabel barang";
        }else {
        echo "data tidak berhasil diupdate ke tabel barang";
        }
    }

     function delete($id_obat){

        $conn = new C_koneksi();

        $sql = "DELETE FROM obat WHERE id_obat = '$id_obat'";

        mysqli_query($conn->conn(), $sql);

        header("Location:../views/v_obat.php");

    }
    
}

?>
    
    



    
