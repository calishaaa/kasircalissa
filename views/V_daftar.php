<?php
include_once 'tamplate/header.php';
    include_once 'tamplate/sidebar.php';
    //modular untuk memanggil file dari folder template
    include_once '../controllers/C_daftar.php'; 
    // include_once 'template/topbar.php';


$pall = new C_daftar();
?>
<div class="container-fluid">


                    
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div align = "center" class="card-header py-3">
                            <h8>Daftar Pasien</h8>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <table border="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pasien</th>
                                            <th>Nomor antrian</th>
                                            <th>Umur   </th>
                                            <th>Keluhan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($pall->tampil() as $b){
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $b->nama_pasien?></td>
                                        <td><?php echo $b->nomor_antrian?></td>
                                        <td><?php echo $b->umur?></td>
                                        <td><?php echo $b->keluhan?></td>

                                    

                                        <td>
                                    <center>
                                        <a href="V_edit_daftar.php?id=<?= $b->nama_pasien ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>

                                        <a onclick="return confirm('apakah yakin data akan di hapus?')"href="../routers/r_daftar.php?id=<?= $b->nama_pasien ?>&aksi=hapus"><button type="button" class="btn btn-round btn-danger">Hapus</button></a>
                                        
                                    </center>
                                        </td>
                                    </tr>
                                    
                                        <?php } ?>

                                    </tbody>
                                    

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <?php
    //modular untuk memanggil file dari folder template
    
    
 ?>