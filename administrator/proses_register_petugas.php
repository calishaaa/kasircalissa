<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang abu muda */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            transition: box-shadow 0.3s ease;
        }
        .form-control:focus {
            border-color: #4d94ff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        button[type="submit"] {
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #007bff; /* Warna Biru */
            border: none;
            width: 100%; /* Lebar menjadi 100% */
            cursor: pointer;
            margin-top: 10px; /* Jarak antara tombol dan level */
        }
        button[type="submit"]:hover {
            background-color: #007bff; /* Warna Biru yang sedikit lebih gelap saat hover */
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Form Register Admin</h2>
                        <form action="proses_simpan_register_petugas.php" method="POST">
                        <div class="form-group">
    <!-- Sembunyikan input ID admin -->
    <input type="hidden" class="form-control" id="id_petugas" name="id_petugas">
</div>

                            <div class="form-group">
                                <label for="nama_petugas">Nama Petugas:</label>
                                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="level">Level:</label>
                                <select class="form-control" id="level" name="level" required>
                                    <option value="1">Administrator</option>
                                    <!-- Tambahkan opsi lain di sini jika diperlukan -->
                                </select>
                            </div>
                            <button type="submit">Simpan</button>
                            <?php if(isset($_GET['success'])) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
    </div>
<?php } ?>
                            <p class="text-center mt-3"><a href="../index.php">Kembali ke Beranda</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
