<?php
session_start();
include '../../functions/connect.php';

$user = $_GET['user'];
$tanggal = $_GET['tanggal'];
$id = $_GET['id'];

$data = mysqli_query($connect, "SELECT * FROM laporan WHERE id = $id AND tanggal = '$tanggal' AND user = '$user' ORDER BY id DESC");

$i = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struk Pembelian</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../../gambar2/asmr.png">
</head>

<body>
  <div class="struk">
    <table border="1" cellpadding="10" cellspacing="0">
      <?php foreach ($data as $d) { ?>
        <h2>IVENTORI ASMR</h2>
        <h4>Website Inventori (penyimpanan barang) bebasis data untuk karyawan</h4>
        <p>Laporan Pembelian user <strong><?= $d['user']; ?></strong></p>
        <tr>
          <th>No</th>
          <th>Barang</th>
          <th>Jumlah</th>
          <th>Harga</th>
        </tr>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $d['barang']; ?></td>
          <td><?= $d['jumlah']; ?></td>
          <td><?= rupiah($d['harga']); ?></td>
        </tr>
        <tr>
          <th colspan="3">Total Pembayaran</th>
          <td><?= rupiah($d['total']); ?></td>
        </tr>
        <tr>
          <th colspan="3">Uang</th>
          <td><?= rupiah($d['bayar']); ?></td>
        </tr>
        <tr>
          <th colspan="3">Kembali</th>
          <td><?= rupiah($d['kembali']); ?></td>
        </tr>
        <?php $i++ ?>
      <?php } ?>
    </table>
    <h4 class="p">Dikeluarkan oleh ASMR pada</h4>
    <h3 class="tanggal">12 Januari 2021</h3>
    <br>
  </div>
  <a href="#" class="no-print" onclick="window.print();">Cetak</a>
</body>

</html>