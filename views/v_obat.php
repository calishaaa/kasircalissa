<?php
include_once 'tamplate/header.php';
    include_once 'tamplate/sidebar.php';
    //modular untuk memanggil file dari folder template
    include_once '../controllers/C_Obat.php'; 
    // include_once 'template/topbar.php';


$pill = new C_Obat();
?>
<div class="container-fluid">

                        <div class="input-field">
                                    <a href="V_tambah_obat.php" class="btn btn-primary">+Tambah Obat</a>
                                </div>

                    
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h8>Tabel</h8>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <table border="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Id Pasien</th>
                                            <th>Harga   </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($pill->tampil() as $b){
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $b->nama_obat?></td>
                                        <td><?php echo $b->id_pasien?></td>
                                        <td><?php echo $b->harga_obat?></td>

                                    

                                        <td>
                                    <center>
                                        <a href="V_edit_obat.php?id_obat=<?= $b->id_obat ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>

                                        <a onclick="return confirm('apakah yakin data akan di hapus?')"href="../routers/r_obat.php?id=<?= $b->id_obat ?>&aksi=hapus"><button type="button" class="btn btn-round btn-danger">Hapus</button></a>
                                        
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