<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Data Bidan Desa| POKJANAL KEC. CIMALAKA</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Datatable -->
    <script src="assets/datatable/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <?php include "page/top-header.php"; ?>

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
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/kantor-kecamatan-cimalaka.jpeg);">
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
                            <p>POKJANAL CIMALAKA</p>
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
                <div class="col-12">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h3>DATA BIDAN DESA</h2>
                        
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bidan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No SK Bidan</th>
                                    

                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  require __DIR__ .'/pokjanal/koneksi.php';
                     
                                  /* menampilkan data */
                                   
                                  $sql = "SELECT * FROM data_bidan"; // syntax SQL
                                   
                                  $result = $connect->query($sql); // eksekusi perintah SQL
                                   
                                  if ($result->num_rows != 0) { // menghitung jumlah rows / baris
                                    
                                    // jika rows lebih dari 0 maka akan ditampilkan 
                                    $no = 1;
                                    while($row = $result->fetch_assoc()) {
                                      $jk = $row['jk_bidan']=="l"?"Laki-Laki":"Perempuan";
                                      echo '<tr>';
                                      echo'<td>'.$no.'</td>';
                                      echo'<td>'.$row['nama_bidan'].'</td>';
                                      echo'<td>'.$jk.'</td>';
                                      echo'<td>'.$row['sk_no_bidan'].'</td>';
                                                                         
                                      echo '</tr>';
                                      $no++;
                                    }
                                  } else {
                                    // jika rows masih kosong maka akan muncul "Rows belum ada data"
                                    echo "Rows belum ada data";
                                  }
                                    
                                ?> 
                            </table>
                            <!-- DATA / TABEL START -->

                        
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