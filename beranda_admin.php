<?php
session_start();
include ("koneksi.php");

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>

    <!-- boootstrap -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="css/tampilanadmin.css" rel="stylesheet">

  </head>
  <body>
    <!-- Menu -->
    <div id="wrapper">

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand">Sistem Informasi Data dan Absensi Karyawan Berbasis Web</a>
          </div>

          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i> Admin
              </a>
              <ul class="dropdown-menu dropdown-user">
                <li>
                  <form class="" action="keluar_admin.php" method="post">
                    <button class="btn btn-default" type="submit" name="keluar"><i class="fa fa-sign-out"></i> Keluar</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>

        <!-- menu samping -->
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li>
                <a href="beranda_admin.php">
                  <i class="fa fa-dashboard"></i> Beranda
                </a>
              </li>
              <li>
                <a href="data_karyawan.php">
                  <i class="fa fa-table"></i> Data Karyawan
                </a>
              </li>
              <li>
                <a href="data_user.php">
                  <i class="fa fa-users"></i> Data User
                </a>
              </li>
              <li>
                <a href="data_jabatan.php">
                  <i class="fa fa-briefcase"></i> Data Jabatan
                </a>
              </li>
              <li>
                <a href="data_absen.php">
                  <i class="fa fa-book"></i> Data Absen
                </a>
              </li>
              <li>
                <a href="absen_keterangan.php">
                  <i class="fa fa-columns"></i> Absen Karyawan
                </a>
              </li>
            </ul>
          </div>
        </div>

      </nav>

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Informasi</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Form Informasi</h1>
              </div>
              <div class="panel-body">

                <form class="form" action="prostaminfo.php" enctype="multipart/form-data" method="post">
                  <div class="form-group">
                    <label>Id Informasi</label>
                    <input class="form-control" type="text" name="inpidinfor" value="">
                  </div>
                  <div class="form-group">
                    <label>Informasi</label>
                    <textarea class="form-control" name="inpformasi" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input class="btn btn-success" type="submit" name="informasi" value="Proses">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Rekapan Informasi</h1>
              </div>
              <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                          <th>Id Informasi</th>
                          <th>Informasi</th>
                          <th>Waktu</th>
                          <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql   = "SELECT * FROM tb_informasi ";
                      $query = mysqli_query($koneksi, $sql);

                      while ($row = mysqli_fetch_array($query)) {
                       ?>
                       <tr>
                         <td><?php echo $row[0]; ?> </td>
                         <td><?php echo $row[1]; ?> </td>
                         <td><?php echo $row[2]; ?> </td>
                         <td>
                           <a href="edit_info.php?id_info=<?php echo $row['id_info'] ?>"><i class="fa fa-edit"></i></a>
                         </td>
                         <td>
                           <a href="hapus_info.php?id_info=<?php echo $row['id_info'] ?>" onclick="hapus()"><i class="fa fa-trash-o"></i></a>
                         </td>
                       </tr>
                     <?php } ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
            <em>Copyright &copy; Dinas Tenaga Kerja Sumatera Utara <br> Muhamad Rizky Abdilah SI-3</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="vendor/css/js/bootstrap.min.js"></script>

  </body>
</html>
