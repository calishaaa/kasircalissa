<?php
session_start();
//untuk menghubungkan file c koneksi kedalam c login
    include_once 'C_koneksi.php';

//membuat class login
class C_login{

    //membuat fungsi untuk menangani registrasi user
    //parameter adalah nilai yang diberikan kepada sebuah fungsi,metode,atau prosedur sebagai masukan untuk mengatur atau mengubah prilaku dari tindakan yang dijalankan oleh fungsi tersebut.
    public function register($id=0, $nama=null, $email=null, $pass=null, $role=null){
    
        //membuat sebuah variabel yang bertipe data objek dari kelas/ file C_koneksi
        $koneksi = new C_koneksi();

        $sql = "INSERT INTO user VALUES ('$id','$nama','$email','$pass','$role')";


        //$sql = "INSERT INTO user VALUES ('$id', '$nama', '$email', '$pass', '$role','')";
        
        $query = mysqli_query($koneksi->conn(), $sql); // -> true/false

        if ($query) {
            echo "Data berhasil di tambahkan";
        } else {
            echo "Data gagal di tambahkan";
        }
        
        }
        

    //membuat fungsi untuk login user
    public function login($email, $pass){

        $conn = new C_koneksi();


        //untuk mengecek tombol login sudah ditekan atau di klik oleh user
        if (isset ($_POST['login'])) {

            //untuk menampilkan semua data dari table user berdasarkan email yang yag diinputkan oleh user
            $sql = "SELECT * FROM user WHERE email = '$email'";

            $query = mysqli_query($conn->conn(), $sql);

            //mengubah data dari bertipe data objek menjadi array asosiatif
            $data = mysqli_fetch_assoc($query);
            //untuk mengecek apakah ada data dari hasil query
            if ($data) {
                
                //untuk mengecek atau membandingkan inputan password dari tabel user dengan password dari tabel user
                if (password_verify($pass,$data['password'])) {
                    
                    //untuk mengecek apakah posisi login sebagai admin, untuk mengecek apakah role user itu sebagai admin atau bukan
                    if($data['role'] == 'admin') {
                        
                        //untuk menampung data dari query database yang akan digunakan ketika halaman admin/user setelah proses login berhasil
                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data['role'];

                        //memindahkan halaman ke halaman home
                        header("Location: ../views/home.php");
                        exit;



                    //untuk mengecek apakah posisi login sebagai user,untuk mengecek apakah role user itu sebagai user atau bukan
                    } elseif ($data['role'] == 'user') {

                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data['role'];


                        header("Location: ../views/home_user.php");
                        exit;
                        
                    }
                    
                
                }else {
                    echo "cek password";
                }


            }else {
                echo "cek username dan password";
            }
        
        
            


        }

        }
        
        //membuat fungsi untuk logout user
        public function logout(){
        session_destroy();
        header("location: ../index.php");
        exit;    
        }
    }

    
?>