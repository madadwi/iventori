<!DOCTYPE html>
<html>

<head>
  <title>Halaman Daftar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Responsive-->
  <link rel="stylesheet" type="text/css" href="daftar.css">
  <!--Link CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
  <!--Sintaks HTML-->
  <header>
    <img src="../gambar2/asmr.png">
    <!--Logo-->
    <h1>Elektronik, Part Komputer, Aksesoris</h1>
    <!--Slogan-->
    <h2>Daftar</h2>
    <!--Keterangan halaman-->
  </header>

  <br><br><br><br>

  <content>
    <img src="../gambar2/pc.jpg">
    <div class="daftar">
      <h2 style="text-align: center;">Silahkan Daftar</h2>
      <!--Perintah daftar-->

      <form method="POST">
        <table align="center">
          <!--Tabel daftar-->
          <tr>
            <!--Kolom ID-->
            <td><b>ID</b></td>
            <td>:</td>
            <td><input required type="text" name="id" style="width:200px; " placeholder="Tambahkan id"></td>
          </tr>
          <tr>
            <!--Kolom username-->
            <td><b>Username</b></td>
            <td>:</td>
            <td><input required type="text" name="username" style="width:200px; " placeholder="Tambahkan username"></td>
          </tr>
          <tr>
            <!--Kolom Password-->
            <td><b>Password</b></td>
            <td>:</td>
            <td><input required type="password" name="password" id="password" placeholder="Tambahkan Password" style="width:200px;">
              <span class="eye" onclick="executePassword()">
                <!--Icon mata-->
                <i class="fas fa-eye" id="show"></i>
                <i class="fas fa-eye-slash" id="hide"></i>
              </span>
            </td>
          </tr>
        </table>

        <table align="center">
          <tr>
            <td><button name="daftar">Daftar</button></td>
            <!--Tombol daftar-->
          </tr>
        </table>

        <h4 align="center"><a href="../login/">Login</a> / <a href="../daftar/">Daftar</a></h4>
        <!--Tombol login/daftar-->
      </form>
    </div>

    <script>
      //JS animasi mata pada password
      function executePassword() {
        var x = document.getElementById('password');
        var y = document.getElementById('show');
        var z = document.getElementById('hide');

        if (x.type === 'password') {
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        } else {
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
        }
      }
    </script>
  </content>

  <footer>
    <h3>&copy; ASMR <script>
        document.write(new Date().getFullYear())
      </script>
    </h3>
    <h4><i>Richal Zacky | Mada Dwi | Syahril Syifa</i></h4>
  </footer>
</body>

</html>



<!-------------------------------------------------------------------------------------------------------------------->



<?php
session_start();
// koneksi database
if (isset($_POST["daftar"])) {
  include '../functions/connect.php';

  // menangkap data yang di kirim dari form
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = md5($password);


  // menginput data ke database
  mysqli_query($connect, "INSERT INTO login (id, username, password, level) VALUES('$id', '$username','$password', 'user')");

  $cariid = mysqli_query($connect, "SELECT level FROM login WHERE username = '$username'");
  foreach ($cariid as $d) {
    $_SESSION['level'] = $d['level'];
  }
  $_SESSION['user'] = $username;
  echo "<script>alert('Anda berhasil Daftar'); document.location='../home/';</script>"; //Notifikasi sukses
}
?>