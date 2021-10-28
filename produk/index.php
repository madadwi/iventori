<?php
session_start();
include '../functions/connect.php';

$level = $_SESSION['level'];

$data = mysqli_query($connect, 'SELECT * FROM data');
if (isset($_POST['cari'])) {
  $data = cari($_POST['keyword']);
}

?>
<!--Pengambilan database-->

<!DOCTYPE html>
<html>

<head>
  <title>Produk</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--Link untuk menambahkan logo icon-->
  <link rel="stylesheet" type="text/css" href="produk.css">
  <!--Link CSS-->
  <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
  <!--Sintaks HTML-->
  <header>
    <img src="../gambar2/asmr.png">
    <!--Logo-->
    <h3><i class="fas fa-box-open" style="color: white;"></i> Inventori</h3>
    <!--Keterangan halaman-->
  </header>

  <article>
    <div class="menu">
      <!--Bilah navigasi-->
      <span>
        <ul id="menu1">
          <?php if ($level == 'user') { ?>
            <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
            <li class="active"><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
            <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;transaksi</a></li>
            <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
            <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
            <!-- Tombol edit data -->
          <?php } else { ?>
            <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
            <li class="active"><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
            <li><a href="../data/"><i class="fas fa-server" style="color: white;"></i>&nbsp;Data Produk</a></li>
            <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;Laporan</a></li>
            <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
            <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
          <?php } ?>
        </ul>
      </span>

      <form method="post" action="">
        <input class="search" type="text" placeholder="Search..." name="keyword">
        <input class="button" type="submit" value="Search" name="cari">
        <!--kolom search-->
      </form>
    </div>

    <br><br><br><br><br><br>
    <div id="container">
      <h1>Persediaan Produk Di Inventori Kami</h1>

      <div class="opt">
        <!--Gambar produk dan data-->
        <?php
        $i = 1;
        ?>
        <?php foreach ($data as $adm) { ?>
          <li class="opt1"><a href="../detail/?id=<?= $adm['id'] ?>"><img id="myImg" src="../gambar/<?= $adm["gambar"]; ?>" alt="<?= $adm["name"]; ?>"></a>
            <!--Mengambil file gambar-->
            <table style="margin-top: -95px; color: white; ">
              <!--Data produk-->
              <tr>

                <td colspan="3" style="padding: 3px 0px 5px 10px;"><?= $adm["name"]; ?></td>
                <!--Data nama-->
              </tr>
              <br>
              <tr>
                <td>Code</td>
                <td>:</td>
                <td><?= $adm["code"]; ?></td>
                <!--Data kode-->
              </tr>
              <br>
              <tr>
                <td>Stock</td>
                <td>:</td>
                <td><?= $adm["stock"]; ?></td>
                <!--Data stok-->
              </tr><br>
              <tr>
                <td>Price</td>
                <td>:</td>
                <td data-label="price"><?= rupiah($adm["price"]); ?></td>
                <!--Data harga-->
              </tr>
              <?php if ($level == 'user') { ?>
                <tr>
                  <td><a href="../beli/?id=<?= $adm['id'] ?>"><button>Beli</button></a></td>
                  <td></td>
                  <td></td>
                </tr>
              <?php } ?>
            </table>
          </li>

          <?php $i++; ?>
        <?php } ?>
      </div>

    </div>

  </article>
  <!-- <script>
    var keyword = document.getElementById('keyword');
    var tombolcari = document.getElementById('keyword');
    var container = document.getElementById('container');

    keyword.addEventListener('keyup', function() {







    });
  </script> -->
</body>

</html>