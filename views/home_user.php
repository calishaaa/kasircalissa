<?php
include_once 'tamplate/header.php';
    include_once 'tamplate/sidebar.php';
    include_once 'tamplate/topbar.php';

    // include_once '../controllers/C_login.php';
?>

<!-- Begin Page Content -->


<main id="main">

<!-- Services Section Start -->
<section id="services">
    <div class="container">
        <header class="section-header">

<h3>
    Selamat Datang <?= $_SESSION['data']['nama'] ?>, dan rolenya sebagai <?= $_SESSION['data']['role'] ?>
</h3>
        </header>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="single-service">
                    <div class="icon icon-1"></div>
                    <h4>Konsultasi</h4>
                    
                    <a href="V_daftar.php">Book Now</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="single-service">
                    <div class="icon icon-2"></div>
                    <h4>Daftar</h4>
                    
                    <a href="V_daftar_pasien.php">Book Now</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="single-service">
                    <div class="icon icon-3"></div>
                    <h4>Obat</h4>
                    
                    <a href="V_obat.php">Book Now</a>
                </div>
            </div>
                       <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="single-service">
                    <div class="icon icon-8"></div>
                    <h4>Dokter</h4>
                    
                    <a href="dokter.php">Book Now</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 d-sm-none d-md-block d-lg-none">
                <div class="single-service">
                    <div class="icon icon-9"></div>
                    <h4>Insurance</h4>
                    <span>10 Min | $100.00</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="booking.html">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End-->

<!-- Subscriber Section Start -->

<!-- Subscriber Section end -->

<!-- Support Section Start -->
<section id="support" class="wow fadeInUp">
    <div class="container">
        <h1>
            Need help? Call Dr.Daniel 24/7 at +1-234-567-8900
        </h1>
    </div>
</section>
<!-- Support Section end -->

</main>
