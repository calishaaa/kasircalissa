<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                
                <div class="sidebar-brand-text mx-3">KLINIK KESEHATAN <sup>daniel</sup></div>
            </a>
            
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php
            if($_SESSION['data']['role'] == 'admin'){?>
            <li class="nav-item">
                <a class="nav-link" href="home_user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
                <!-- Divider -->
                <hr class="sidebar-divider"> 

                        <!-- Nav Item - Tables -->
             <li class="nav-item active">
                <a class="nav-link" href="V_obat.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table Obat</span></a>
            </li>
            <hr class="sidebar-divider"> 

            <li class="nav-item active">
                <a class="nav-link" href="laporan_barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan</span></a>
            </li>

            <hr class="sidebar-divider"> 

            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Transaksi</span></a>
            </li>




    
            <?php }elseif($_SESSION['data']['role'] == 'user'){?>

            
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="home_user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>


            

            <hr class="sidebar-divider"> 

            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan</span></a>

       



            <?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider"> 

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->