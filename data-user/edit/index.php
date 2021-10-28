<?php
session_start();
include '../../functions/connect.php';

$id = $_GET['id'];
$user = $_SESSION['user'];

if (isset($_POST["submit"])) {
  if (edituser($_POST) > 0) {
    echo "
                <script>
                    alert('Edit data sukses!');
                    document.location='../../data-user/';
                </script>";
  } else {
    echo "
                <script>
                    alert('Edit data gagal!');
                    document.location='../../data-user/';
                </script>";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Edit Data</title>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no ">
  <link rel="stylesheet" type="text/css" href="edit.css">
  <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
  <!--Sintaks HTML-->
  <header>
    <img src="../../gambar2/asmr.png">
    <!--Logo-->

    <h3>Edit Data</h3>
  </header>

  <br><br><br><br><br>

  <article>
    <a href="../../data-user/">&#8656;Kembali</a>
    <center>
      <div class="halaman">

        <?php
        $data = mysqli_query($connect, "SELECT * FROM login WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <form action="" method="post">
            <table>
              <tr>
                <th colspan="3" class="judul2">Edit Data User</th>
              </tr>
              <tr>
                <td class="data">id</td>
                <td>:</td>
                <td>
                  <input type="text" readonly name="id" value="<?php echo $d['id']; ?>">
                </td>
              </tr>
              <tr>
                <td class="data">username</td>
                <td>:</td>
                <td>
                  <input type="text" name="username" value="<?php echo $d['username']; ?>">
                </td>
              </tr>
              <tr>
                <td class="data">password</td>
                <td>:</td>
                <td><input type="password" name="password" value="<?= $d['password'] ?>" placeholder="password baru"></td>
              </tr>
              <tr>
                <td class="data">Level</td>
                <td>:</td>
                <td><input type="text" name="level" value="<?php echo $d['level']; ?>"></td>
              </tr>
              <tr>
                <td colspan="3" align="center"><button name="submit">Edit Data</button></td>
              </tr>
            </table>
          </form>

        <?php
        }
        ?>

      </div>
    </center>
  </article>

  <footer>
    <h3>&copy; ASMR <script>
        document.write(new Date().getFullYear())
      </script>
    </h3>
    <h4><i>Richal Zacky | Mada Dwi | Syahril Syifa</i></h4>
  </footer>

</body>

</html>