<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ganet</title>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>backend/jquery-2.1.3.min.js"></script>
    <link href="<?php echo base_url();?>backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>backend/vendors/starrr/dist/starrr.css" rel="stylesheet">
  <!-- swal -->
  <script src="<?php echo base_url();?>backend/vendors/swal/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>backend/vendors/swal/sweetalert.css">
  <!--.......................-->
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>backend/build/css/custom.min.css" rel="stylesheet">
     
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col"> 
          <div class="left_col scroll-view">
          
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span><?php echo $this->session->userdata('NAME'); ?></span></a>
            </div>


            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">

                    <?php if ($this->session->userdata('LEVEL')==1) {?>
                                    <ul class="nav side-menu">
                <h3>-----------------------------------------</h3>
                  <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>"><a href="<?php echo base_url();?>backend/dashboard"><i class="fa fa-home"></i> Dasboard</a>
                  </li>

                  <li class="<?php if(isset($active_master)){echo $active_master;}?>">
                  <a href="<?php echo base_url();?>backend/data_masalah"><i class="fa fa-laptop"></i>Data Jaringan</a>
                  </li>
                  <li class="<?php if(isset($active_master)){echo $active_master;}?>"><a href="<?php echo base_url();?>backend/form_laporan_masalah"><i class="fa fa-laptop"></i>Laporan Jaringan</a>
                  </li>
                  
                                  
                  <li class="<?php if(isset($active_master)){echo $active_master;}?>"><a><i class="fa fa-desktop"></i> Master<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="<?php if(isset($active_data_user)){echo $active_data_user;}?>"><a href="<?php echo base_url();?>backend/data_user">Data User</a></li>
                      <li class="<?php if(isset($active_data_instansi)){echo $active_data_instansi;}?>"><a href="<?php echo base_url();?>backend/data_instansi">Data Instansi</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Cetak <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="<?php if(isset($active_data_surat_tugas)){echo $active_data_surat_tugas;}?>"><a href="<?php echo base_url();?>backend/cetak_surat_tugas">Surat Tugas</a></li>
                      <li class="<?php if(isset($active_tanda_terima_pekerjaan)){echo $active_tanda_terima_pekerjaan;}?>"><a href="<?php echo base_url();?>backend/tanda_terima_pekerjaan">Tanda Terima Pekerjaan</a></li>
                      <li><a href="<?php echo base_url();?>backend/cetak_laporan_masalah">Laporan Masalah</a></li>
                    </ul>
                  </li>

                </ul>
                    <?php } elseif ($this->session->userdata('LEVEL')==2) {?>
                                    <ul class="nav side-menu">
                <h3>-----------------------------------------</h3>
                  <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>"><a href="<?php echo base_url();?>backend/dashboard"><i class="fa fa-home"></i> Dasboard</a>
                  </li>
                  <li class="<?php if(isset($active_data_masalah)){echo $active_data_masalah ;}?>"><a href="<?php echo base_url();?>backend/data_masalah"><i class="fa fa-home"></i> Data Masalah</a>
                  </li>     

                  <?php 
                  if ($this->session->userdata('KATEGORI')==1) {?>
                  <li class="<?php if(isset($active_data_masalah)){echo $active_data_masalah ;}?>"><a href="<?php echo base_url();?>backend/cetak_laporan_masalah"><i class="fa fa-home"></i> Cetak Laporan</a>
                  </li>
                    <?php
                  } else {
?>
                  <li class="<?php if(isset($active_data_masalah)){echo $active_data_masalah ;}?>"><a href="<?php echo base_url();?>backend/cetak_laporan_masalah_lpse"><i class="fa fa-home"></i> Cetak Laporan</a>
                  </li>
<?php
                  }
                  
                  ?>                         

                  
                </ul>

                    <?php } elseif ($this->session->userdata('LEVEL')==3){?>
                                    <ul class="nav side-menu">
                <h3>-----------------------------------------</h3>
                  <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>"><a href="<?php echo base_url();?>backend/dashboard"><i class="fa fa-home"></i> Dasboard</a>
                  </li>
                  
                   <li class="<?php if(isset($active_form_rekanan)){echo $active_form_rekanan ;}?>"><a href="<?php echo base_url();?>backend/data_masalah"><i class="fa fa-desktop"></i> Data Masalah</a>
                  </li>                        
                   <li class="<?php if(isset($active_form_rekanan)){echo $active_form_rekanan ;}?>"><a href="<?php echo base_url();?>backend/form_teknisi"><i class="fa fa-desktop"></i> Form Teknisi</a>
                  </li>   
                   <li class="<?php if(isset($active_form_rekanan)){echo $active_form_rekanan ;}?>"><a href="<?php echo base_url();?>backend/tanda_terima_pekerjaan"><i class="fa fa-desktop"></i> Cetak Tanda Terima</a>
                  </li>                                                 

                </ul>
                     <?php } elseif ($this->session->userdata('LEVEL')==5){?>
<ul class="nav side-menu">
                <h3>-----------------------------------------</h3>
                  <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>"><a href="<?php echo base_url();?>backend/dashboard"><i class="fa fa-home"></i> Dasboard</a>
                  </li>

                  <li class="<?php if(isset($active_master)){echo $active_master;}?>">
                  <a href="<?php echo base_url();?>backend/data_lpse"><i class="fa fa-laptop"></i>Data LPSE</a>
                  </li>
                  <li class="<?php if(isset($active_master)){echo $active_master;}?>"><a href="<?php echo base_url();?>backend/form_laporan_masalah_lpse"><i class="fa fa-laptop"></i>Laporan LPSE</a>
                  </li>                  
                        
                  <li class="<?php if(isset($active_master)){echo $active_master;}?>"><a href="<?php echo base_url();?>backend/cetak_laporan_masalah_lpse"><i class="fa fa-laptop"></i>Cetak Laporan </a>
                  </li>
         


                </ul>
<?php } ?>
              </div>
              <div class="menu_section">
                <h3>-----------------------------------------</h3>
                <ul class="nav side-menu">              
                    <li><a href="<?php echo base_url();?>backend/login/logout"><i class="fa fa-laptop"></i> Logout</a></li>
                </ul>
                <h3>-----------------------------------------</h3>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
   <?php if ($this->session->userdata('ID')==2) { 
    if ($this->session->userdata('KATEGORI')=='1') { ?>
      <li> 
            <form class="navbar-form full-width" id="wilayah" method="post" action="<?= base_url("backend/login/ganti_kategori")?>">
              <div class="form-group">
                <select class="form-control" name="kategori" onChange="javascript: if(this.value != '0') this.form.submit(); else alert('hello');">                  
<option value="">PILIH KATEGORI</option>
                <option value="1" selected>JARINGAN</option>
                                    <option value="2">LPSE</option>
                                </select>
              </div>
            </form>
          </li>
          
    <?php } elseif ($this->session->userdata('KATEGORI')=='2') { ?>
            <li> 
            <form class="navbar-form full-width" id="wilayah" method="post" action="<?= base_url("backend/login/ganti_kategori")?>">
              <div class="form-group">
                <select class="form-control" name="kategori" onChange="javascript: if(this.value != '0') this.form.submit(); else alert('hello');">                  
<option value="">PILIH KATEGORI</option>
                <option value="1" >JARINGAN</option>
                                    <option value="2" selected>LPSE</option>
                                </select>
              </div>
            </form>
          </li>
          

    <?php } 
    ?>
    <?php } ?>
        
          
            </nav>
          </div>
        </div>
        <!-- /top navigation -->