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
  <script src="js/validator.js"></script>

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
          <li><a href="hamadanpenyakit.php"><button type="button" class="btn nav-btn btn-block">HAMA dan PENYAKIT</button></a></li>
          <li><a href="gejala.php"><button type="button" class="btn nav-btn btn-block active">GEJALA</button></a></li>
          <li><a href="basispengetahuan.php"><button type="button" class="btn nav-btn btn-block">BASIS PENGETAHUAN</button></a></li>
          <li><a href="logout.php"><button type="button" class="btn nav-btn btn-block" id="myBtn">LOGOUT</button></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </div>
    </div>
  </nav>
  <div class="hero">
    <div class="hero-content">
      <h1>INPUT GEJALA</h1>
    </div>
  </div>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-8 text-left"></br>
        <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputgejala.php">
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="nama">ID Gejala:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="idgejala" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="nama">Gejala:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-2" for="alamat">Daerah:</label>
            <div class="col-sm-10">
              <select class="form-control" name="daerah" onChange='this.form.submit();'>
                <option>Daerah</option>
                <option>Akar</option>
                <option>Batang</option>
                <option>Daun</option>
                <option>Bunga</option>
                <option>Buah</option>
              </select>

            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-2" for="alamat">Jenis Tanaman:</label>
            <div class="col-sm-10">
              <select class="form-control" name="jenistanaman" onChange='this.form.submit();'>
                <option>Tanaman</option>
                <option>Bawang</option>
                <option>Cabai</option>
              </select>

            </div>
          </div>
          <div class="btn-submit"><button type="submit" name="submit" class="btn btn-primary">Simpan</button></div><br>
          <?php
          if (isset($_POST['submit'])) {
            $idgejala     = $_POST['idgejala'];
            $gejala       = $_POST['gejala'];
            $daerah       = $_POST['daerah'];
            $jenistanaman = $_POST['jenistanaman'];
            $query = "INSERT INTO gejala SET idgejala='$idgejala',gejala='$gejala',daerah='$daerah',jenistanaman='$jenistanaman'";
            $result = mysqli_query($konek_db, $query);
            if ($result) {
              echo '<script language="javascript">';
              echo 'alert("Data Berhasil disimpan")';
              echo '</script>';
            }
          }
          ?>
        </form>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>R89-Teknik Informatika</p>
  </footer>

</body>

</html>