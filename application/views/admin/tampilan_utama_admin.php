<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bantu Panti | ITS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/skins/_all-skins.min.css">
  <script src="<?php echo base_url(); ?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url("main/dashboard"); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SPG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BANTU </b>PANTI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo site_url("login/logout"); ?>"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url("admin/dashboard"); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Lihat semua</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("admin/listDonatur"); ?>"><i class="fa fa-circle-o" name="donatur"></i>Donatur</a></li>
						<li><a href="<?php echo site_url("admin/listAnak"); ?>"><i class="fa fa-circle-o" name="anak_panti"></i>Anak Panti</a></li>
						<li><a href="<?php echo site_url("admin/listPengurus"); ?>"><i class="fa fa-circle-o" name="pengurus_panti"></i>Pengurus Panti</a></li>
						<li><a href="<?php echo site_url("admin/listAllKegiatan"); ?>"><i class="fa fa-circle-o" name="kegiatanpanti"></i>Kegiatan Panti</a></li>
						<li><a href="<?php echo site_url("admin/diary"); ?>"><i class="fa fa-circle-o" name="diary"></i>Diary Anak Panti</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i> <span>Tambah Sesuatu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("admin/formAnak"); ?>"><i class="fa fa-circle-o"></i>Tambah Anak Panti</a></li>
						<li><a href="<?php echo site_url("admin/formPengurus"); ?>"><i class="fa fa-circle-o"></i>Tambah Pengurus Panti</a></li>
						<li><a href="<?php echo site_url("admin/formPemasukan"); ?>"><i class="fa fa-circle-o"></i>Tambah Pemasukan</a></li>
						<li><a href="<?php echo site_url("admin/formPengeluaran"); ?>"><i class="fa fa-circle-o"></i>Tambah Pengeluaran</a></li>
						<li><a href="<?php echo site_url("admin/formKegiatan"); ?>"><i class="fa fa-circle-o"></i>Tambah Kegiatan Panti</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tabel Rekap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("admin/pemasukan"); ?>"><i class="fa fa-circle-o"></i> Rekap Pemasukan</a></li>
            <li><a href="<?php echo site_url("admin/pengeluaran"); ?>"><i class="fa fa-circle-o"></i> Rekap Pengeluaran</a></li>
						<li><a href="<?php echo site_url("admin/donasi"); ?>"><i class="fa fa-circle-o"></i> Rekap Donasi</a></li>
						<li><a href="<?php echo site_url("admin/laporan"); ?>"><i class="fa fa-circle-o"></i> Laporan</a></li>
          </ul>
        </li>

      <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Finger Print</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
			<?php $this->load->view($content);?>
			
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <center><strong>Copyright &copy; 2019 <a href="http://its.ac.id/">ITS</a>.</strong> All rights
    reserved.</center>
  </footer>
   
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#example2').DataTable();
  // $(document).ready(function () {
    $('.sidebar-menu').tree();
    // $('#example2').DataTables();
  })
  
</script>
</body>
</html>
