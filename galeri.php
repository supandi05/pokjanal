<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Galeri | POKJANAL KEC. CIMALAKA</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <?php 
            include "page/top-header.php";
        ?>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                   <?php include "page/logo.php"; ?>


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <?php
                            include "page/nav.php";
                        ?>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/header2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>POKJANAL KEC. CIMALAKA</p>
                        </div>
                        <!-- Search Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### About Content Wrapper Start ##### -->
     <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        
                        <br>
                      
                        <p>
                            <?php
                              require __DIR__ .'/pokjanal/koneksi.php';
                 
                              /* menampilkan data */
                               
                              $sql = "SELECT * FROM galeri"; // syntax SQL
                               
                              $result = $connect->query($sql); // eksekusi perintah SQL
                               
                              if ($result->num_rows != 0) { // menghitung jumlah rows / baris
                                
                                // jika rows lebih dari 0 maka akan ditampilkan 
                                $no = 1;
                                while($row = $result->fetch_assoc()) {
                                  
                                  echo'<td><img src="pokjanal/asset/images/galeri/'.$row['nama_foto'].'" ></td>';
                                }
                              } else {
                                // jika rows masih kosong maka akan muncul "Rows belum ada data"
                                echo "Rows belum ada data";
                              }
                                
                            ?>             
                                        </p>

                        
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>KANTOR KEPALA DESA</h2>
                        <p></p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/kantordesa/kantor-desa-nyalindung.jpeg" alt="">

                                <div class="tag">
                                    <span>Kantor Kepala Desa</span>
                                </div>
                                
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Desa Nyalindung</h5>

                                <p>Beralamat di Desa Nyalindung Kecamatan Cimalaka Kabupaten Sumedang</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                   
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/kantordesa/kantor-desa-galudra.jpeg" alt="">

                                <div class="tag">
                                    <span>Kantor Kepala Desa</span>
                                </div>
                                
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Desa Galudra</h5>

                                <p>Beralamat di Desa Galudra Kecamatan Cimalaka Kabupaten Sumedang</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                   
                                </div>
                            </div>
                        </div>

                       <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/kantordesa/kantor-desa-cikole.jpeg" alt="">

                                <div class="tag">
                                    <span>Kantor Kepala Desa</span>
                                </div>
                               
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Desa Cikole</h5>

                                <p>Beralamat di Desa Cikole Kecamatan Cimalaka Kabupaten Sumedang</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                                                       
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/kantordesa/kantor-desa-trunamanggala.jpeg" alt="">

                                <div class="tag">
                                    <span>Kantor Kepala Desa</span>
                                </div>
                                
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Desa Trunamanggala</h5>

                                <p>Beralamat di Desa Trunamanggala Kecamatan Cimalaka Kabupaten Sumedang</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    
                                    
                                </div>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    

    

    <!-- ##### Footer Area Start ##### -->
    <?php 
        include "page/footer.php";
    ?>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>