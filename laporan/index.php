<?php
session_start();
include '../functions/connect.php';
$level = $_SESSION['level'];

$data = mysqli_query($connect, "SELECT * FROM laporan ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Produk</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--Link untuk menambahkan logo icon-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--Link CSS-->
  <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
  <!--Sintaks HTML-->
  <header>
    <img src="../gambar2/asmr.png">
    <!--Logo-->
    <h3><i class="fas fa-file" style="color: white;"></i> Laporan</h3>
    <!--Keterangan halaman-->
  </header>

  <article>
    <div class="menu">
      <!--Bilah navigasi-->
      <span>
        <ul id="menu1">
          <?php if ($level == 'user') { ?>
            <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
            <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>

            <li class="active"><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;transaksi</a></li>
            <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
            <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>

          <?php } else { ?>
            <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
            <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
            <li><a href="../data/"><i class="fas fa-server" style="color: white;"></i>&nbsp;Data Produk</a></li>
            <li class="active"><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;Laporan</a></li>
            <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
            <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
            <li style="margin-left: 43%;"><a href="../data-user/" style="color: orangered;"><i class="fas fa-users" style="color: orangered;"></i>&nbsp;User</a></li>
          <?php } ?>
        </ul>

      </span>
    </div>
  </article>
  <br><br><br><br><br><br><br>
  <div class="container-struk">
    <div class="laporan">
      <?php if ($level == 'user') { ?>
        <?php foreach ($data as $d) { ?>
          <?php if ($d['aksi'] == 'beli') { ?>
            <div class="beli">
              <div class="anne">
                <p>User <?= $d['user']; ?> telah membeli barang <strong><?= $d['barang']; ?></strong> dengan kode <strong><?= $d['kode']; ?></strong> sebanyak <strong><?= $d['jumlah']; ?> pcs</strong>, stok barang <strong><?= $d['barang']; ?></strong> saat ini tersisa <strong><?= $d['sisa']; ?> stok</strong>. Klik <a href="struk/?tanggal=<?= $d['tanggal']; ?>&id=<?= $d['id']; ?>&user=<?= $d['user']; ?>" target="_blank">disini</a> untuk melihat struk. (<?= $d['tanggal']; ?>)</p>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } else { ?>
        <?php foreach ($data as $d) { ?>
          <?php if ($d['aksi'] == 'tambah') { ?>

            <div class="tambah">
              <div class="ann">
                <p>User <?= $d['user']; ?> menambahkan produk <strong><?= $d['barang']; ?></strong> dengan kode <strong><?= $d['kode']; ?></strong> sebanyak <strong><?= $d['jumlah']; ?> stock</strong>, seharga <strong><?= rupiah($d['harga']); ?>/pcs</strong>. Klik <a href="../data/">disini</a> untuk melihat. (<?= $d['tanggal']; ?>)</p>

              </div>
            </div>
          <?php } elseif ($d['aksi'] == 'edit') { ?>
            <div class="edit">
              <div class="anne">
                <p>User <?= $d['user']; ?> telah mengedit data dari produk <strong><?= $d['barang']; ?></strong>. Klik <a href="../data/">disini</a> untuk melihat. (<?= $d['tanggal']; ?>)</p>
              </div>
            </div>
          <?php } elseif ($d['aksi'] == 'hapus') { ?>
            <div class="hapus">
              <div class="anne">
                <p>User <?= $d['user']; ?> telah menghapus produk <strong><?= $d['barang']; ?></strong> dengan kode <strong><?= $d['kode']; ?></strong> dari aplikasi. (<?= $d['tanggal']; ?>)</p>
              </div>
            </div>
          <?php } elseif ($d['aksi'] == 'beli') { ?>
            <div class="beli">
              <div class="anne">
                <p>User <?= $d['user']; ?> telah membeli barang <strong><?= $d['barang']; ?></strong> dengan kode <strong><?= $d['kode']; ?></strong> sebanyak <strong><?= $d['jumlah']; ?> pcs</strong>, stok barang <strong><?= $d['barang']; ?></strong> saat ini tersisa <strong><?= $d['sisa']; ?> stok</strong>. Klik <a href="struk/?tanggal=<?= $d['tanggal']; ?>&id=<?= $d['id']; ?>&user=<?= $d['user']; ?>" target="_blank">disini</a> untuk melihat struk. (<?= $d['tanggal']; ?>)</p>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</body>

</html>