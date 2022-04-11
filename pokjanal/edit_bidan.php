<?php
include "header.php";
?>

        <!-- page content -->
<?php
require_once("koneksi.php");
 
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM data_bidan WHERE id_bidan = '$id'";
$data = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($data)){
     
     $id = $row['id_bidan'];
     $nik = $row['nik_bidan'];
    $nama = $row['nama_bidan'];
    $tempat_lahir = $row['tmpt_lahir_bidan'];
    $tanggal_lahir = $row['tgl_lahir_bidan'];
    $jenis = $row['jk_bidan'];
    $agama  = $row['agama_bidan'];
    $sk = $row['sk_no_bidan'];
    $pendidikan = $row['pend_bidan'];
    $pekerjaan = $row['kerja_bidan'];
    $goldar = $row['goldar_bidan'];
    $alamat = $row['alamat_bidan'];
    $hp = $row['hp_bidan'];
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
            <h3>UBAH DATA BIDAN DESA</h3>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                      
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <form method="post" action="pro_editbidan.php" id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik"> NIK<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="nik" required="required" value="<?php echo $nik; ?>" class="form-control col-md-7 col-xs-12">  
                    <input type="hidden" id="id" name="id" required="required" value="<?php echo $id; ?>" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama"> Nama Lengkap<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="nama" required="required" value="<?php echo $nama; ?>" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat"> Tempat Lahir <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required="required" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal Lahir<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" value="<?php echo $tanggal_lahir; ?>" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis Kelamin <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="jenis">
                    <option label="---Pilih Jenis Kelamin---" selected></option>
                    <option value="p"<?php if($jenis=="p"){echo "selected=\"selected\"";} ?>>Perempuan</option>
                    <option value="l"<?php if($jenis=="l"){echo "selected=\"selected\"";} ?>>Laki-laki</option>     
                  </select>
                  </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tingakat">Gologan Darah<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="goldar">
                    <option label="---Pilih Golongan Darah---" selected></option>
                    <option value="A"<?php if($goldar=="A"){echo "selected=\"selected\"";} ?>>A</option>
                    <option value="B"<?php if($goldar=="B"){echo "selected=\"selected\"";} ?>>B</option>     
                     <option value="AB"<?php if($goldar=="AB"){echo "selected=\"selected\"";} ?>>AB</option>
                    <option value="O"<?php if($goldar=="O"){echo "selected=\"selected\"";} ?>>O</option>     
                  </select>
                  </div>
              </div>  
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">Agama <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="agama">
                    <option label="---Pilih Agama---" selected></option>
                    <option value="islam"<?php if($agama=="islam"){echo "selected=\"selected\"";} ?>>Islam</option>
                    <option value="katolik"<?php if($agama=="katolik"){echo "selected=\"selected\"";} ?>>Katolik</option>
                    <option value="protestan"<?php if($agama=="protestan"){echo "selected=\"selected\"";} ?>>Protestan</option>
                    <option value="budha"<?php if($agama=="budha"){echo "selected=\"selected\"";} ?>>Budha</option>
                    <option value="hindu"<?php if($agama=="hindu"){echo "selected=\"selected\"";} ?>>Hindu</option>
                    <option value="lainnya"<?php if($agama=="lainnya"){echo "selected=\"selected\"";} ?>>Lainnya.....</option>     
                  </select>
                  </div>
              </div>                        
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">Pendidikan Terakhir <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="pendidikan">
                    <option label="---Pilih Pendidikan Terakhir---" selected></option>
                    <option value="sd"<?php if($pendidikan=="sd"){echo "selected=\"selected\"";} ?>>Sekolah Dasar</option>
                    <option value="smp"<?php if($pendidikan=="smp"){echo "selected=\"selected\"";} ?>>Sekolah Menengah Pertama</option>
                    <option value="sma"<?php if($pendidikan=="sma"){echo "selected=\"selected\"";} ?>>Sekolah Menengah Atas</option>
                    <option value="diploma"<?php if($pendidikan=="diploma"){echo "selected=\"selected\"";} ?>>D1/D2/D3/D4</option>
                    <option value="sarjana"<?php if($pendidikan=="sarjana"){echo "selected=\"selected\"";} ?>>Sarjana (S1)</option>
                    <option value="magister"<?php if($pendidikan=="magister"){echo "selected=\"selected\"";} ?>>Magister (S2)</option>
                    <option value="doctor"<?php if($pendidikan=="doctor"){echo "selected=\"selected\"";} ?>>Doctor (S3)</option>
                    <option value="lainnya"<?php if($pendidikan=="lainnya"){echo "selected=\"selected\"";} ?>>Lainnya.....</option>     
                  </select>
                  </div>
              </div>          
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaan">Pekerjaan <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_group form-control" name="pekerjaan">
                    <option label="---Pilih Pekerjaan---" selected></option>
                    <option value="pns"<?php if($pekerjaan=="pns"){echo "selected=\"selected\"";} ?>>PNS/TNI/Polri</option>
                    <option value="swasta"<?php if($pekerjaan=="swasta"){echo "selected=\"selected\"";} ?>>Pegawai Swasta</option>
                    <option value="wirausaha"<?php if($pekerjaan=="wirausaha"){echo "selected=\"selected\"";} ?>>Wirausaha</option>
                    <option value="buruh"<?php if($pekerjaan=="buruh"){echo "selected=\"selected\"";} ?>>Buruh</option>
                    <option value="harian"<?php if($pekerjaan=="harian"){echo "selected=\"selected\"";} ?>>Pekerja Harian Lepas</option>
                    <option value="lainnya"<?php if($pekerjaan=="lainnya"){echo "selected=\"selected\"";} ?>>Lainnya.....</option>     
                  </select>
                  </div>
              </div>   
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat"> Alamat<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="alamat" class="form-control col-md-7 col-xs-12"><?php echo $alamat; ?></textarea>
                  </div>
              </div>    
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat"> Nomor SK<span class="required">*</span></label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="sk" name="sk" required="required" value="<?php echo $sk; ?>" class="form-control col-md-7 col-xs-12">             
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hp"> No Handphone<span></span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="hp" name="hp" value="<?php echo $hp; ?>" class="form-control col-md-7 col-xs-12">             
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