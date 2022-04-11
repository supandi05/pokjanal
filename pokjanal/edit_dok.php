<?php
require_once("koneksi.php");
 
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM dokumen WHERE id_dok='$id'";
$data = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($data)){
     
     $id = $row['id_dok'];
     $nama = $row['nama_dok'];
    $tgl = $row['tgl_dok'];
    $keterangan = $row['keterangan_dok'];
    
} 
mysqli_close($connect); // menutup koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="asset/images/posyandu.ico" type="image/ico" />

    <title>Pokjanal Kecamatan Cimalaka</title>

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
  <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="asset/js/sum/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="asset/js/sum/summernote.css"/>

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
        
      </div>              
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3>TAMBAH DOKUMEN</h3>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                      
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <form method="post" action="pro_editdok.php" id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal Upload<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="tgl" name="tgl" required="required" value="<?php echo $tgl; ?>" class="form-control col-md-7 col-xs-12" readonly>      
                    <input type="hidden" id="id" name="id" required="required" value="<?php echo $id; ?>" class="form-control col-md-7 col-xs-12" readonly>       
       
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dok">Dokumen<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label"><?php echo $nama; ?></label>
                    <input type="file" id="dok" name="dok" required="required" value="" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sejarah">Keterangan <span ></span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea border="5" class="form-control col-md-7 col-xs-12" name="keterangan"  placeholder="Ketik berita disini..." value=""><?php echo $keterangan; ?></textarea>
                  </div>
              </div>      
              
              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="button" value="Batal" class="btn btn-danger" onclick="window.history.back()"/>
                    <button class="btn btn-warning" type="reset">Reset</button>
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
  <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
   <!-- plugins -->
    <script src="asset/js/sum/moment.min.js"></script>
    <script src="asset/js/sum/icheck.min.js"></script>
    <script src="asset/js/sum/summernote.min.js"></script>
   <!-- <script src="asset/js/sum/jquery.nicescroll.js"></script>-->


    <!-- custom -->
     <script src="asset/js/sum/main.js"></script>
     <script type="text/javascript">
      (function(jQuery){
           $('input').iCheck({
              checkboxClass: 'icheckbox_flat-red',
              radioClass: 'iradio_flat-red'
            });

              $('.summernote').summernote({
                height: 750
              });
        })(jQuery);
     </script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>