<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Cuti Karyawan</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
</head>
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
    <a href="index.php" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Cuti Karyawan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href="index.php"><img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></a>
        </div>
        <div class="info">
          <a href="index.php" class="d-block">Admin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
              <p>
                HRD
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="hrd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data HRD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="T_data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input HRD</p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0">Data Manager</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container">
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
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2021 Aplikasi Pengajuan Cuti.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
