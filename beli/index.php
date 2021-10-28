<?php
session_start();
include '../functions/connect.php';
$id = $_GET['id'];
$data = mysqli_query($connect, "SELECT * FROM data WHERE id=$id");
$level = $_SESSION['level'];
$user = $_SESSION['user'];

if (isset($_POST['bayar'])) {
    foreach ($data as $d) {
        $stocklama = $d['stock'];
    }
    $beli = $_POST['pcs'];
    $uang = $_POST['duit'];
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $stockbaru = $stocklama - $beli;
    $harga = $_POST['price'];
    $hargaakhir = $harga * $beli;
    $tanggal = tanggal(date("Y-m-d"));


    if ($uang < $hargaakhir) {
        echo "<script>
            alert('Uang anda kurang !!!');
            document.location.href = '../beli/?id=$id';
        </script>";
    } else {
        if ($uang > $hargaakhir) {
            $kembali = $uang - $hargaakhir;
        } else {
            $kembali = 0;
        }
        mysqli_query($connect, "UPDATE data SET stock = $stockbaru WHERE id = $id");
        mysqli_query($connect, "INSERT INTO `laporan`(`id`, `tanggal`, `barang`, `kode`, `aksi`, `user`, `harga`, `jumlah`, `total`, `bayar`, `kembali`, `sisa`) VALUES ('', '$tanggal', '$nama', '$kode', 'beli', '$user', '$harga', '$beli','$hargaakhir','$uang','$kembali', '$stockbaru')");
        echo "<script>
            alert('Terimakasih sudah membeli !!!');
            document.location.href = '../produk/';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Produk</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Link untuk menambahkan logo icon-->
    <link rel="icon" href="../gambar2/asmr.png">
    <link rel="stylesheet" type="text/css" href="menu buy.css">
    <!--Link CSS-->
</head>

<body>
    <!--Sintaks HTML-->
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h3><i class="far fa-money-bill-alt" style="color: white;"></i> Pembayaran</h3>
        <!--Keterangan halaman-->
    </header>
    <form method="post" action="">
        <article>
            <div class="back">
                <a href="../produk/">&#8656;Kembali</a>
            </div>
            <?php foreach ($data as $d) { ?>
                <div class="pict">
                    <!-- <img src="../gambar/"> -->
                    <img width="100%" height="100%" src="../gambar/<?= $d['gambar'] ?>">
                </div>

                <h1><?= $d['name']; ?></h1>

                <div class="info">
                    <tr>
                        <td>
                            <h2><?= rupiah($d['price']); ?></h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Stok : <?= $d['stock']; ?> pcs
                        </td>
                    </tr>
                </div>
                <input type="hidden" name="price" id="harga" value="<?= $d['price'] ?>" min="0" class="pcs">
                <input type="hidden" name="nama" id="harga" value="<?= $d['name'] ?>" min="0" class="pcs">
                <input type="hidden" name="kode" id="harga" value="<?= $d['code'] ?>" min="0" class="pcs">
                <div class="kuantitas">
                    <tr>
                        <td>Kuantitas</td>
                        <td>:</td>
                        <td><input type="number" name="pcs" id="jumlah" max="<?= $d['stock'] ?>" min="0" class="pcs"></td>
                    </tr>
                </div>
                <div class="kuantitas">
                    <tr>
                        <td>Bayar</td>
                        <td>:</td>
                        <td><input type="number" name="duit" id="uang" min="0" class="pcs"></td>
                    </tr>
                </div>
            <?php } ?>
            <div class="buy">
                <input type="submit" name="bayar" value="Bayar">
            </div>
        </article>
    </form>
    <footer>
        <!--Copyright-->
        <h3>&copy; ASMR <script>
                document.write(new Date().getFullYear())
            </script>
        </h3>
        <h4><i>Richal Zacky | Mada Dwi | Syahril Syifa</i></h4>
    </footer>
</body>

</html>