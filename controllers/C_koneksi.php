<?php
// - buatkan kelas sesuai dengan nama file
// - didalamnya terdapat sebuah fungsi yang bernama connection 

// ini adalah kelas, nama kelas harus sama persis dengan nama file 
class C_koneksi{

    // ini ada fungsi atau method yang bernama connection dan fungsi harus ada didalam kelas 
    public function conn(){ 

        // membuat fungsi untuk terkoneksi kedalam database klinik_xiirpl3
        $conn = mysqli_connect('localhost','root','','klinik_papaniel');

        //untuk mengecek apakah koneksi berhasil dibuat atau tidak
        if (!$conn) {
            die("koneksi gagal dibuat : ".mysqli_connect_error());
        }else{
            // echo "koneksi berhasil";
            //untuk mengembalikan nilai koneksi
            return $conn;
        }


    }




}
//inisialisasi objek,harus diluar kelas
// $koneksi = new C_koneksi();
//memanggil method atau fungsi yang ada didalam kelas c_koneksi
// $koneksi->conn();

?>


