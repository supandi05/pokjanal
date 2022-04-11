<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="asset/images/icon.ico" type="image/ico" />

    <title></title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
   <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
  <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style-->
    <link href="build/css/custom.min.css" rel="stylesheet">  
  </head>
  
<?php
include "header.php";
?>

        <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>DATA BIDAN</h3>
      </div>              
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">                    
                    <!--<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>-->
            <div class="clearfix"></div>
          </div>

        <div class="x_content">  
            <h3><a href="tambah_bidan.php" class="btn btn-success">Tambahkan</a></h3>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr align="center">
                          <th>No.</th>
                          <th>Nama Lengkap</th>
                          <th>Tanggal Lahir</th>
                          <th>Gender</th>
                          <th>Pekerjaan</th>
                          <th>SK Nomor</th>
                           <th>Alamat</th>
                          <th>No Hp</th>
                          <th>Aksi</th>                             
                        </tr>
                      </thead>
                      <tbody>
                        <?php
              require __DIR__ .'/koneksi.php';
 
              /* menampilkan data */
               
              $sql = "SELECT * FROM data_bidan order by nama_bidan asc"; // syntax SQL
               
              $result = $connect->query($sql); // eksekusi perintah SQL
               
              if ($result->num_rows != 0) { // menghitung jumlah rows / baris
                
                // jika rows lebih dari 0 maka akan ditampilkan 
                $no = 1;
                while($row = $result->fetch_assoc()) {
                  echo '<tr>';
                  echo'<td>'.$no.'</td>';
                  echo'<td>'.$row['nama_bidan'].'</td>';
                  echo'<td>'.$row['tgl_lahir_bidan'].'</td>';
                  if($row['jk_bidan']==='p'){
                    echo'<td>Perempuan</td>';
                  }
                  else{
                    echo'<td>Laki-laki</td>';

                  }
                  echo'<td>'.$row['kerja_bidan'].'</td>';
                   echo'<td>'.$row['sk_no_bidan'].'</td>';
                   echo'<td>'.$row['alamat_bidan'].'</td>';
                  echo'<td>'.$row['hp_bidan'].'</td>';
                  echo '<td><a href="edit_bidan.php?id='.$row['id_bidan']. '">Edit</a> /
                        <a href="hapus_bidan.php?id='.$row['id_bidan']. '" onclick="return confirm(\'Anda Yakin Ingin Menghapus Data?\')">Hapus</a></td>';
                  echo '</tr>';
                  $no++;
                }
              } else {
                // jika rows masih kosong maka akan muncul "Rows belum ada data"
                echo "Rows belum ada data";
              }
                
            ?>                        
                      </tbody>
                    </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->

        <!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
        <!-- /footer content -->
      </div>
    </div>

   <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>    

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>