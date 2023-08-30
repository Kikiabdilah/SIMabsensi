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
    <title>Sistem Informasi Dan Absensi Karyawan</title>

    <!-- boootstrap -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="css/tampilan.css" rel="stylesheet">

  </head>
  <body>
    <!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand">Sistem Informasi Absensi</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="page-scroll">
              <a href="index.php">Beranda</a>
            </li>
            <li class="page-scroll">
              <a href="masuk.php">Masuk</a>
            </li>
            <li class="page-scroll">
              <a href="daftar_user.php">Daftar</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <!-- Header atau gambar-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img style="width: 25%; margin-left:38%; margin-top:10% !important;" class="first-slide" src="gambar/foto1.jpeg" alt="First slide">
        <center><strong><p>Dinas Tenaga Kerja Provinsi Sumatera Utara</p></center>
        </div>
        <br>
        <br>
        <!-- <div class="item">
          <img class="second-slide" src="gambar/gambar2.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="gambar/gambar3.jpg" alt="Third slide">
        </div> -->
      </div>
      <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>

    <!-- Section -->
    <section class="bagian1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Informasi</h1>
            <hr class="star-primary">

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Informasi</h1>
              </div>
              <div class="panel-body">
                <?php
                $sql      = "SELECT * FROM tb_informasi";
                $query    = mysqli_query($koneksi, $sql);

                while ($row = mysqli_fetch_array($query)) {
                 ?>
                 <div class="well well-sm">
                   <p><?php echo $row['informasi']; ?></p>
                   <br>
                   <em><?php echo "<i class='fa fa-clock-o'></i> <i class='fa fa-calendar'></i> ".$row['waktu']; ?></em>
                 </div>
                 <?php } ?>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

    <!--lainnya-->
    <section class="bagian2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>lainnya</h1>
            <hr class="star-primary">

          </div>
        </div>
        <div class="">

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>kontak</h1>
              <p><strong>(061) 8452551</p>
              <hr class="star-primary">

            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h1>Lokasi</h1>
              <p><strong>Indonesia</strong> <br> Sumatera Utara, Medan</p>
            </div>
            <div class="col-md-4">
              <h1>Tentang</h1>
              <p>Sistem Informasi Data dan Absensi Karyawan Berbasis Web</p>
            </div>


          </div>
        </div>
      </div>

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
