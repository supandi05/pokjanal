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
            <h3>TAMBAH DATA KADER</h3>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                      
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <form method="post" action="pro_tambahkader.php" id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tingakat">Bagian Kader<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="bagian">
                    <option label="---Pilih Bagian---" selected></option>
                    <option value="pokja">Pokja Desa</option>
                    <option value="posyandu">Posyandu</option>   
                    <option value="bkb">BKB</option>     
                    <option value="bkl">BKL</option>
                    <option value="bkr">BKR</option>   
                    <option value="up2k">UP2K</option>  
                    <option value="uppks">UPPKS</option>  
                  </select>
                  </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik"> NIK<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="nik" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama"> Nama Lengkap<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="nama" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat"> Tempat Lahir <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal Lahir<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis Kelamin <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="jenis">
                    <option label="---Pilih Jenis Kelamin---" selected></option>
                    <option value="p">Perempuan</option>
                    <option value="l">Laki-laki</option>     
                  </select>
                  </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tingakat">Gologan Darah<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="goldar">
                    <option label="---Pilih Golongan Darah---" selected></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option> 
                    <option value="O">O</option>      
                  </select>
                  </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">Agama <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="agama">
                    <option label="---Pilih Agama---" selected></option>
                    <option value="islam">Islam</option>
                    <option value="katolik">Katolik</option>
                    <option value="protestan">Protestan</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                    <option value="lainnya">Lainnya.....</option>     
                  </select>
                  </div>
              </div>                        
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">Pendidikan Terakhir <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="pendidikan">
                    <option label="---Pilih Pendidikan Terakhir---" selected></option>
                    <option value="sd">Sekolah Dasar</option>
                    <option value="smp">Sekolah Menengah Pertama</option>
                    <option value="sma">Sekolah Menengah Atas</option>
                    <option value="diploma">D1/D2/D3/D4</option>
                    <option value="sarjana">Sarjana (S1)</option>
                    <option value="magister">Magister (S2)</option>
                    <option value="sarjana">Doctor (S3)</option>
                    <option value="lainnya">Lainnya.....</option>     
                  </select>
                  </div>
              </div>          
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaan">Pekerjaan <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="pekerjaan">
                    <option label="---Pilih Pekerjaan---" selected></option>
                    <option value="pns">PNS/TNI/Polri</option>
                    <option value="swasta">Pegawai Swasta</option>
                    <option value="wirausaha">Wirausaha</option>
                    <option value="buruh">Buruh</option>
                    <option value="harian">Pekerja Harian Lepas</option>
                    <option value="lainnya">Lainnya.....</option>     
                  </select>
                  </div>
              </div>   
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat"> Alamat<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
              </div>    
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat"> Nomor SK<span class="required">*</span></label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="sk" name="sk" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat"> Jabatan <span class="required">*</span></label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="jabatan" id="jabatan" name="jabatan" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hp"> No Handphone<span></span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="hp" name="hp" class="form-control col-md-7 col-xs-12">             
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