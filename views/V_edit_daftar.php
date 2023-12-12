<?php
include_once 'tamplate/header.php';
include_once 'tamplate/sidebar.php';
include_once '../controllers/C_daftar.php';
$barang = new C_daftar();
?>

<div class="container-fluid">

    <!-- page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800"><?= $halaman ?></h1> -->

    <!--DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Pasien</h6>
    </div>
    <div class="card-body">
        <div class=table-responsive>

                <!-- start isi dari konten card -->
                <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit obat</h1>
                            </div>
                            <form action="../routers/r_daftar.php?aksi=update" method="POST" class="user" enctype="multipart/form-data">

                            <?php foreach($barang->edit($_GET['id']) as $b){ ?>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="id" value="<?= $b->nama_pasien ?>" name="nama_pasien">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama obat" value="<?= $b->nomor_antrian ?>" name="nomor_antrian">
                                </div>

                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Stock" value="<?= $b->umur ?>" name="umur">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Stock" value="<?= $b->keluhan ?>" name="keluhan">
                                </div>
                                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="edit Barang" id="" name="tambah_barang">
                                </div>

                                <?php } ?>

                            </form>
                        </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
 
<?php

?>
