<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
  header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-inverse" style="background-color:#3b5998; border-color:#3b5998">
    <div class="container-fluid">
      <div class="navbar-header">
        <img class="logo" src="logo\logo.svg">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><button type="button" class="btn nav-btn btn-block active">BERANDA</button></a></li>
          <li><a href="diagnosa.php"><button type="button" class="btn nav-btn btn-block">DIAGNOSA PENYAKIT</button></a></li>
          <li><a href="daftarpenyakit.php"><button type="button" class="btn nav-btn btn-block">DAFTAR PENYAKIT</button></a></li>
          <li><a href="#"><button type="button" class="btn nav-btn btn-block" id="myBtn">LOGIN</button></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </div>
    </div>
  </nav>
  <div class="hero">
    <div class="hero-content">
      <h1>Selamat Datang di Sistem Pakar Diagnosa Hama dan Penyakit Tanaman</h1>
      <p>Di Indonesia, tanaman bawang dan cabai merupakan jenis hortikultura yang banyak dibudidayakan. Kami hadir untuk membantu Anda mengatasi masalah hama dan penyakit yang mempengaruhi tanaman Anda.</p>
      <a href="diagnosa.php" class="hero-btn">Mulai Konsultasi</a>
    </div>
  </div>
  <div class="container-fluid text-center">
    <div class="row content"></br>
      <center>
        <h2>ABOUT</h2>
      </center>
      <div class="panel panel-info">
        <div class="panel-body">
          <p>Di Indonesia, tanaman bawang dan cabai merupakan jenis hortikultura yang banyak dibudidayakan. Namun, hasil panen sering kali belum memuaskan karena beberapa faktor, antara lain teknik budidaya, kondisi lingkungan, dan masalah hama serta penyakit. Dari ketiga faktor tersebut, hama dan penyakit menjadi masalah utama yang sering dihadapi. Salah satu tantangan utamanya adalah minimnya pengetahuan petani tentang penyakit yang menyerang tanaman mereka, serta keterbatasan akses kepada ahli untuk konsultasi dan solusi yang tepat.</p>

          <p>Oleh karena itu, dibutuhkan sistem pakar simulasi diagnosa hama dan penyakit tanaman bawang dan cabai. Sistem ini bertujuan sebagai sarana konsultasi bagi petani, sebagai alat pembelajaran di institusi pendidikan, dan sebagai media untuk mendiagnosa serta menyosialisasikan jenis-jenis hama dan penyakit yang mempengaruhi tanaman tersebut.</p>
        </div>
      </div>
    </div>
    <div class="about-layout">
      <div class="panel panel-success">
        <div class="panel-heading">Dibuat Oleh :</div>
        <div class="about-card">
          <div>
            <div class="card">
              <img src="./img/PAS FOTO 2.jpg" alt="Gambar" class="card-img">
            </div>
            <div class="card-content">
              <h2 class="card-title">Jaka Ashputra</h2>
            </div>
          </div>
          <div>
            <div class="card">
              <img src="./img/WhatsApp Image 2024-06-10 at 20.11.37.jpeg" alt="Gambar" class="card-img">
            </div>
            <div class="card-content">
              <h2 class="card-title">Naufal Dzaky Nurmansyah</h2>
            </div>
          </div>
          <div>
            <div class="card">
              <img src="./img/WhatsApp Image 2024-06-10 at 20.11.37.jpeg" alt="Gambar" class="card-img">
            </div>
            <div class="card-content">
              <h2 class="card-title">Figo Mahesa</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="background-color: #22c1c3;"><span class="glyphicon glyphicon-tasks"></span> Admin Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" style="background-color: #22c1c3;" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>




    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>R89-Teknik Informatika</p>
  </footer>

  <script>
    $(document).ready(function() {
      $("#myBtn").click(function() {
        $("#myModal").modal();
      });
    });
  </script>

</body>

</html>