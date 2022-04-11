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
            <h3>TAMBAH DATA POSYANDU</h3>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                      
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <form method="post" action="pro_tambahposyandu.php" id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama"> Nama Posyandu<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lokasi"> Lokasi Posyandu<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="lokasi" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
              </div>  
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="waktu"> Waktu Pelayanan<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="pelayanan" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
              </div>  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button onclick="goBack()" class="btn btn-danger">Batal</button>
                              <script>
                                  function goBack() {
                                      window.history.back();
                                  }
                              </script>
                            <button class="btn btn-warning" type="reset">Reset</button>
                          <input type="submit" name="tambah" class="btn btn-success" value="Tambah"/>
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