<!DOCTYPE html>

<?php
if(isset($_GET['file'])){
    $file = $_GET['file'];

    if(file_exists($file) && is_readable($file) && preg_match('/\.pdf$/', $file)){
        header("Content-Type: application/pdf");
        header("Content-Disposition: attachment; filename=\"$file\"");
        readfile($file);
    }
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AriSmrd - Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
            <?php include "header.php"; ?>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <?php include "portofolio.php"; ?>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <?php include "about.php"; ?>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <?php include "contact.php"; ?>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <?php include "footer.php"; ?>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; AriSmrd 2021 .   Theme created by
                <a href="http://startbootstrap.com">Start Bootstrap</a></small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="potensi" tabindex="-1" aria-labelledby="potensi" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                        Sistem Informasi dan Monitoring Potensi Penjualan Sales PT. ICON+ Region Jawa Barat
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/iconplus/a_login.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/iconplus/a_dashboard.png" alt="..." />
                                        </div>
                                    </div>                                   
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/iconplus/a_potensi.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/iconplus/a_detailpotensi.png" alt="..." />
                                        </div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Befungsi untuk mengawasi atau memonitoring potensi penjualan yang dilakukan sales. Dibangun menggunakan Laravel, VueJS dan MySQL sebagai databasenya. Terdapat dua hak akses yaitu Admin dan Sales.</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://potensi.arismrd.my.id" target="_blank">
                                        <i class="fas fa-play fa-fw"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="pengaduan" tabindex="-1" aria-labelledby="pengaduan" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                        Sistem Layanan Pengaduan Pasien Puskesmas Kecamatan X
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/pengaduan/login_masyarakat.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/pengaduan/dashboard_masyarakat.png" alt="..." />
                                        </div>
                                    </div>                                   
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/pengaduan/buat_pengaduan_masyarakat.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/pengaduan/balas_pengaduan_admin.png" alt="..." />
                                        </div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Merupakan sebuah website layanan pengaduan pasien kepada Puskesmas. Dibuat menggunakan HTML, BootStrap, PHP dan MySQL sebagai databasenya. Terdapat tiga hak akses yaitu Admin, Petugas dan Masyarakat.</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://pengaduan.arismrd.my.id" target="_blank">
                                        <i class="fas fa-play fa-fw"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="buentar" tabindex="-1" aria-labelledby="buentar" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                        Online Shop Baju Muslim Toko Bu Entar
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/buentar/home.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/buentar/shop.png" alt="..." />
                                        </div>
                                    </div>                                   
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/buentar/shop.png" alt="..." />
                                        </div>                                       
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Toko online yang dibangun menggunakan WooCommerce. Terintegrasi dengan API Woongkir dan notifikasi Email secara real-time. Terdapat halaman
                                        untuk admin agar dapat mengelola semua konten.</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://buentar.arismrd.my.id" target="_blank">
                                        <i class="fas fa-play fa-fw"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="gantar" tabindex="-1" aria-labelledby="gantar" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                        Online Shop Perabotan Rumah Tangga Toko Gantar Plastik 
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/gantar/home.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/gantar/produk.png" alt="..." />
                                        </div>
                                    </div>                                   
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Sebuah website online shop yang menjual Perabotan Rumah Tangga. Website ini dibangun menggunakan WooCommerce dan 
                                        Terintegrasi dengan Woongkir, SMPTP Gmail, Flexible Checkout, dan yang lainnya</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://gantar.arismrd.my.id" target="_blank">
                                        <i class="fas fa-play fa-fw"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="cairo" tabindex="-1" aria-labelledby="cairo" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                        Sistem Manajemen Pengadaan dan Distribusi Barang Toko Cairo
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/cairo/dashboard.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/cairo/listbarang.png" alt="..." />
                                        </div>
                                    </div>                                      
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/cairo/pengadaanbarang.png" alt="..." />
                                        </div>                                       
                                    </div>                                   
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Website yang berfungsi untuk mengelola barang masuk dan keluar. Web ini juga dapat memanajemen stok dari 
                                        setiap barang yang ada di toko. Website ini dibangun menggunakan bahasa pemrograman PHP dan MySQL.</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://inventory.arismrd.my.id" target="_blank">
                                        <i class="fas fa-play fa-fw"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="masjid" tabindex="-1" aria-labelledby="masjid" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                        Sistem Informasi dan Manajemen Masjid Al-Ikhlas
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-lg-5">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/masjid/home.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/masjid/home_user.png" alt="..." />
                                        </div>
                                    </div>                                      
                                    <div class="row justify-content-center mb-lg-5">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/masjid/loginpetugas.png" alt="..." />
                                        </div>                      
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/masjid/dashboard_petugas.png" alt="..." />
                                        </div>                                       
                                    </div>                                   
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Website yang berfungsi untuk mengelola semua informasi yang ada di masjid. Seperti donasi, sedekah, jadwal sholat atau kegiatan,
                                        dan keuangan. Website ini dibangun menggunakan bahasa pemrograman PHP dan MySQL. Terdapat tiga hak akses yaitu Admin, Petugas dan Pengguna.</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://masjid.arismrd.my.id" target="_blank">
                                        <i class="fas fa-play fa-fw"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 7-->
        <div class="portfolio-modal modal fade" id="arhome" tabindex="-1" aria-labelledby="arhome" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    AR Katalog Rumah 3D dengan Fitur Kustomisasi CV. Sylvia Jaya
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arhome/1.png" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arhome/2.jpg" alt="..." />
                                        </div>
                                    </div>                                      
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arhome/3.jpg" alt="..." />
                                        </div>                      
                                        <div class="col-md-6 col-lg-6 mb-5">
                                             <img class="img-fluid rounded" src="assets/img/portfolio/arhome/4.jpg" alt="..." />
                                        </div>                                       
                                    </div>                                   
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Aplikasi Katalog Rumah berbentuk tiga dimensi yang menggunakan teknologi Augmented Reality. Mempunyai fitur 
                                        untuk mengganti komponen-komponen rumah seperti mengganti model pintu, ubin lantai, atap, dll. Dibuat menggunakan Unity 3D, Blender dan OpenCV</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://cairo.arismrd.my.id" target="_blank">
                                        <i class="fas fa-eye fa-fw"></i>
                                        Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 8-->
         <div class="portfolio-modal modal fade" id="arjaringan" tabindex="-1" aria-labelledby="arjaringan" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Media Pembelajaran Komponen Jaringan Komputer Berbasis Augmented Reality di SMK Negeri X
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arcomputer/1.jpg" alt="..." />
                                        </div>                                       
                                         <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arcomputer/2.jpg" alt="..." />
                                        </div>
                                    </div>                                      
                                    <div class="row justify-content-center mb-2">
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arcomputer/3.jpg" alt="..." />
                                        </div>                      
                                        <div class="col-md-6 col-lg-6 mb-5">
                                            <img class="img-fluid rounded" src="assets/img/portfolio/arcomputer/4.jpg" alt="..." />
                                        </div>                                       
                                    </div>                                   
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Aplikasi Pembelajaran komponen jaringan komputer dengan menggunakan teknologi Augmented Reality
                                        . Fitur yang ada di aplikasi ini adalah tampil objek 3D, materi, video pembelajaran, dan kuis. 
                                        Dibuat menggunakan Unity 3D dan EasyAR.</p>
                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                    &nbsp;                                   
                                    <a class="btn btn-md btn-primary" href="https://cairo.arismrd.my.id" target="_blank">
                                        <i class="fas fa-eye fa-fw"></i>
                                        Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sertifikat Modal 1-->
        <div class="portfolio-modal modal fade" id="ccna1" tabindex="-1" aria-labelledby="ccna1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Cisco Networking Academy CCNA1
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/ccna1.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 2-->
        <div class="portfolio-modal modal fade" id="ccna2" tabindex="-1" aria-labelledby="ccna2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Cisco Networking Academy CCNA2
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/ccna2.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 3-->
        <div class="portfolio-modal modal fade" id="golang" tabindex="-1" aria-labelledby="golang" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Kelulusan Kelas "Full-Stack Golang & Vue JS: Crowfunding Website"
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/golang.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 4-->
        <div class="portfolio-modal modal fade" id="ict" tabindex="-1" aria-labelledby="ict" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Certificate of Participation in Guest Lecture for ICT 2021: Series One
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/ict.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 5-->
        <div class="portfolio-modal modal fade" id="wcp" tabindex="-1" aria-labelledby="wcp" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Certificate of Participation in World Class Professor (WCP) 2020
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/wcp.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 6-->
        <div class="portfolio-modal modal fade" id="techno" tabindex="-1" aria-labelledby="techno" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Certificate of Participation in Webinar TechnoPreneur Nasional 2021
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/techno.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 7-->
        <div class="portfolio-modal modal fade" id="kompetensi" tabindex="-1" aria-labelledby="kompetensi" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Uji Kompetensi Keahlian Rekayasa Perangkat Lunak
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/kompetensi.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 8-->
        <div class="portfolio-modal modal fade" id="reward" tabindex="-1" aria-labelledby="reward" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Penghargaan Best Website App Se-SMKN Situraja Tahun 2016
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/reward.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 9-->
        <div class="portfolio-modal modal fade" id="prakerin" tabindex="-1" aria-labelledby="prakerin" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Kegiatan Praktek Kerja Industri (PRAKERIN)
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/prakerin.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikat Modal 10-->
        <div class="portfolio-modal modal fade" id="gapura" tabindex="-1" aria-labelledby="gapura" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="text-secondary text-uppercase mb-3">
                                    Sertifikat Kelas Gapura Digital Jawa Barat - Grow With Google
                                    </h5>
                                    <!-- Icon Divider-->
                                    <!-- Portfolio Modal - Image-->
                                    <div class="row justify-content-center mb-4">
                                        <img class="img-fluid rounded" src="assets/img/portfolio/sertifikat/gapura.png" alt="..." />
                                    </div>      

                                    <a class="btn btn-md btn-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
