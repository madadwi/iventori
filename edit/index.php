<?php
session_start();
include '../functions/connect.php';

$id = $_GET['id'];
$user = $_SESSION['user'];

if (isset($_POST["submit"])) {
  $nama = $_POST['name'];
  $kode = $_POST['code'];
  $stok = $_POST['stock'];
  $harga = $_POST['price'];
  $tanggal = tanggal(date("Y-m-d"));

  if (editdata($_POST) > 0) {
    mysqli_query($connect, "INSERT INTO `laporan`(`id`, `tanggal`, `barang`, `kode`, `aksi`, `user`, `harga`, `jumlah`, `total`, `bayar`, `kembali`, `sisa`) VALUES ('', '$tanggal', '$nama', '$kode', 'edit', '$user', '$harga', '$stok','0','0','0','0')");
    echo "
                <script>
                    alert('simpan data sukses!');
                    document.location='../data/';
                </script>";
  } else {
    echo "
                <script>
                    alert('simpan data gagal!');
                    document.location='../data/';
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
    <img src="../gambar2/asmr.png">
    <!--Logo-->

    <h3>Edit Data</h3>
  </header>

  <br><br><br><br><br>

  <article>
    <a href="../data/">&#8656;Kembali</a>
    <center>
      <div class="halaman">

        <?php
        $data = mysqli_query($connect, "SELECT * FROM data WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <form action="" method="post">
            <table>
              <tr>
                <th colspan="3" class="judul2">Edit Data Produk</th>
              </tr>
              <tr>
                <td class="data">Nama</td>
                <td>:</td>
                <td>
                  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                  <input type="text" name="name" value="<?php echo $d['name']; ?>">
                </td>
              </tr>
              <tr>
                <td class="data">Kode</td>
                <td>:</td>
                <td><input type="text" name="code" value="<?php echo $d['code']; ?>"></td>
              </tr>
              <tr>
                <td class="data">Stock</td>
                <td>:</td>
                <td><input type="number" name="stock" value="<?php echo $d['stock']; ?>"></td>
              </tr>
              <tr>
                <td class="data">Harga</td>
                <td>:</td>
                <td><input type="number" name="price" value="<?php echo $d['price']; ?>"></td>
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