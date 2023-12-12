<?php
include_once 'tamplate/header.php';
include_once 'tamplate/sidebar.php';
include_once '../controllers/C_Obat.php';
?>

<div class="container-fluid">

    <!-- page Heading -->

    <!--DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Daftar</h6>
    </div>
    <div class="card-body">
        <div class=table-responsive>

                <!-- start isi dari konten card -->
                <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Pasien</h1>
                            </div>
                            <form action="../routers/r_daftar.php?aksi=tambah" method="POST" class="user" enctype="multipart/form-data">


                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="id" name="id_obat" hidden>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Lengkap" name="nama_pasien">
                                </div>

                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nomor Antrian" name="nomor_antrian">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Umur" name="umur">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Keluhan" name="keluhan">
                                </div>

                                
                               

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" id="" name="submit">
                                </div>

                            </form>
                        </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
 
