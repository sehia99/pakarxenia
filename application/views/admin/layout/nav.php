<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <!-- Menu Dashboard -->
        
         <li><a href="<?php echo base_url('admin/customer') ?>"><i class="fa fa-circle-o text-aqua"></i> Riwayat Konsultasi </a></li>
               <!-- Menu User -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> -->
            <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-table"></i> Data Pengguna</a></li>
           <!--  <li><a href="<?php echo base_url('admin/user/tambah') ?>"><i class="fa fa-plus"></i> Tambah Pengguna</a></li>
          </ul>
        </li>
 -->
        <!-- Menu Kerusakan -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Kerusakan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> -->
            <li><a href="<?php echo base_url('admin/kerusakan') ?>"><i class="fa fa-table"></i> Data Kerusakan</a></li>
            <!-- <li><a href="<?php echo base_url('admin/kerusakan/tambah') ?>"><i class="fa fa-plus"></i> Tambah Kerusakan</a></li> -->
        <!--   </ul>
        </li> -->

        <!-- Menu Gejala -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Gejala</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> -->
            <li><a href="<?php echo base_url('admin/gejala') ?>"><i class="fa fa-table"></i> Data Gejala</a></li>
            <!-- <li><a href="<?php echo base_url('admin/gejala/tambah') ?>"><i class="fa fa-plus"></i> Tambah Gejala</a></li>
 -->         <!--  </ul>
        </li>  -->

<!-- Menu Analisa -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Solusi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>-->
         <!--  <ul class="treeview-menu"> -->
            <li><a href="<?php echo base_url('admin/solusi') ?>"><i class="fa fa-table"></i> Data Solusi</a></li>
           <!--  <li><a href="<?php echo base_url('admin/solusi/tambah') ?>"><i class="fa fa-plus"></i> Tambah Solusi</a></li> -->
       <!--  </ul> -->
        

  <!-- Menu Pasien -->
        <!-- <li><a href="<?php echo base_url('admin/pasien') ?>"><i class="fa fa-table"></i> Data Pasien</a></li>
      -->   <!-- Menu Relasi -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Relasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/relasi') ?>"><i class="fa fa-table"></i> Data Relasi</a></li>
            <li><a href="<?php echo base_url('admin/relasi/tambah') ?>"><i class="fa fa-plus"></i> Tambah Relasi</a></li>
          </ul>
        </li> -->
         <!-- Menu Tree -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tree</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> -->
            <li><a href="<?php echo base_url('admin/tree') ?>"><i class="fa fa-table"></i> Data Tree</a></li>
           
         <!--  </ul>
        </li> -->
       



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">