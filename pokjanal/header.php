<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="asset/images/posyandu.ico" type="image/ico" />

    <title>POKJANAL : Kecamatan Cimalaka</title>

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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-cog"></i> <span>Posyandu Permata Hati 3</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="asset/images/logo.jpg" alt="..." class="img-circle profile_img" height="70px" width="90px">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                   <li>
                     <a href="tampil_posyandu.php"><i class="fa fa-newspaper-o"></i> Data Posyandu <span class="fa fa-chevron"></span></a>
                  </li>
                   <li>
                     <a href="tampil_kader.php"><i class="fa fa-newspaper-o"></i> Data Kader Posyandu <span class="fa fa-chevron"></span></a>
                  </li>
                   <li>
                     <a href="tampil_bidan.php"><i class="fa fa-newspaper-o"></i> Data Bidan Desa <span class="fa fa-chevron"></span></a>
                  </li>
                  <li>
                     <a href="tampil_galeri.php"><i class="fa fa-newspaper-o"></i> Galeri <span class="fa fa-chevron"></span></a>
                  </li>
                   <li>
                     <a href="tampil_dok.php"><i class="fa fa-newspaper-o"></i> Dokumen <span class="fa fa-chevron"></span></a>
                  </li>
                  <li>
                      <a href="logout.php"><i class="fa fa-sign-out"></i> Keluar <span class="fa fa-chevron"></span></a>                    
                  </li>
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="" data-toggle="modal" data-target=".bs-example-modal-sm"> Profil</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
    <!--MODUL-->    
    
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Profil Anda</h4>
                        </div>
                        <div class="modal-body">
                          <table border="0" width="100%">
                          <tr>
              <td colspan="3" align="center">
              <img src="asset/images/admin/<?php //echo $foto;?>" alt="..." height="70px"></td>
              </tr>
              <tr>
              <td colspan="3" align="center"><?php //echo $user; ?></td>
              </tr>             
              <tr>
              <td width="30%">ID</td>
              <td>:</td>
              <td><?php //echo $id; ?></td>
              </TR>
              <tr>
              <td width="30%">Nama</td>
              <td>:</td>
              <td><?php //echo $nama; ?></td>
              </TR>
              <tr>
              <td width="30%">Password</td>
              <td>:</td>
              <td><?php //echo $pass; ?></td>
              </TR>           
              </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                        </div>

                      </div>
                    </div>
                  </div>               
            <!-- /modals -->

          