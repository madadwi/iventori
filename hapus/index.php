<?php
session_start();
require '../functions/connect.php';

$id = $_GET['id'];
$user = $_SESSION['user'];

$data = mysqli_query($connect, "SELECT * FROM data WHERE id=$id");

foreach ($data as $d) {
  $nama = $d['name'];
  $kode = $d['code'];
  $stok = $d['stock'];
  $harga = $d['price'];
}

$tanggal = tanggal(date("Y-m-d"));

mysqli_query($connect, "INSERT INTO `laporan`(`id`, `tanggal`, `barang`, `kode`, `aksi`, `user`, `harga`, `jumlah`, `total`, `bayar`, `kembali`, `sisa`) VALUES ('', '$tanggal', '$nama', '$kode', 'hapus', '$user', '$harga', '$stok','0','0','0','0')");

mysqli_query($connect, "DELETE FROM data WHERE id='$id'");

header("location: ../data/");
