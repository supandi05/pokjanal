<?php
include "header.php";
?>

        <!-- page content -->
<?php
require_once("koneksi.php");
 
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM data_posyandu WHERE id_posyandu = '$id'";
$data = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($data)){
     
     $id = $row['id_posyandu'];
     $lokasi = $row['lokasi_posyandu'];
    $nama = $row['nama_posyandu'];
      $waktu = $row['waktu_layanan'];
   
} 
mysqli_close($connect); // menutup koneksi ke database
?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        
      </div>              
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3>UBAH DATA POSYANDU </h3>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                      
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <form method="post" action="pro_editbidan.php" id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama"> Nama Posyandu<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nama" name="nama" required="required" value="<?php echo $nama; ?>" class="form-control col-md-7 col-xs-12"> 
                    <input type="hidden" id="nama" name="nama" required="required" value="<?php echo $id; ?>" class="form-control col-md-7 col-xs-12">             
            
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lokasi"> Lokasi Posyandu<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="lokasi" class="form-control col-md-7 col-xs-12"><?php echo $lokasi; ?></textarea>
                  </div>
              </div>  
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="waktu"> Waktu Pelayanan<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="pelayanan" class="form-control col-md-7 col-xs-12"><?php echo $waktu; ?></textarea>
                  </div>
              </div>  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <input type="button" value="Batal" class="btn btn-danger" onclick="window.history.back()"/>
                          <input type="submit" name="Simpan" class="btn btn-success" value="Simpan"/>
                        </div>
                      </div>

                    </form>
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

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>