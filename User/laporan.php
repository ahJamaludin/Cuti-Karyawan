<?php
include '../header.php';
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Cuti Karyawan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href="#"><img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></a>
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cuti.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Pengajuan Cuti
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="laporan.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-angle-double-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg col-6">
             <!--  -->
             <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Tlp</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Dindan</td>
                    <td>Rajekwesi</td>
                    <td>087847236</td>
                    <td>Hapus | Edit</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Tlp</th>
                    <th>Opsi</th>
                  </tr>
                  </tfoot>
                </table>
            <!--  -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php
 include '../footer.php';
?>