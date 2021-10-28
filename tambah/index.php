<?php
session_start();
require '../functions/connect.php';

$level = $_SESSION['level'];
$user = $_SESSION['user'];

if (isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $kode = $_POST['codee'];
    $stok = $_POST['stock'];
    $harga = $_POST['price'];
    $tanggal = tanggal(date("Y-m-d"));

    // Cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        mysqli_query($connect, "INSERT INTO `laporan`(`id`, `tanggal`, `barang`, `kode`, `aksi`, `user`, `harga`, `jumlah`, `total`, `bayar`, `kembali`, `sisa`) VALUES ('', '$tanggal', '$nama', '$kode', 'tambah', '$user', '$harga', '$stok','0','0','0','0')");
        echo "
        <script>
            alert('Data produk bertambah !!!');
            document.location.href = '../data/';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menambahkan data !!!');
            document.location.href = '../tambah/';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no ">
    <link rel="stylesheet" type="text/css" href="tambah.css">
    <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h1>Elektronik, Part Komputer, Aksesoris</h1>
        <!--Slogan-->
        <h3>Data Produk</h3>
    </header>

    <br><br><br><br><br>

    <content>
        <div class="back">
            <a href="data.php?d=<?= $id; ?>">&#8656;Kembali</a>
        </div>
        <center>
            <div class="halaman">

                <form method="post" action="" enctype="multipart/form-data">

                    <table>
                        <tr>
                            <th colspan="3" class="judul2" align="center">Tambah Data Produk</th>
                        </tr>
                        <tr>
                            <td class="data"><b>Gambar</b></td>
                            <td>:</td>
                            <td class="pilih"><input type="file" name="cover"></td>
                        </tr>
                        <tr>
                            <td class="data"><b>Nama</b></td>
                            <td>:</td>
                            <td><input required type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td class="data"><b>Kode</b></td>
                            <td>:</td>
                            <td><input required type="text" name="codee"></td>
                        </tr>
                        <tr>
                            <td class="data"><b>Stock</b></td>
                            <td>:</td>
                            <td><input required type="number" name="stock"></td>
                        </tr>
                        <tr>
                            <td class="data"><b>Harga</b></td>
                            <td>:</td>
                            <td><input required type="number" name="price"></td>
                        </tr>


                        <tr>
                            <td colspan="3" align="center"><button name="submit">Tambah Data</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </center>
    </content>

    <footer>
        <h3>&copy; ASMR <script>
                document.write(new Date().getFullYear())
            </script>
        </h3>
        <h4><i>Richal Zacky | Mada Dwi | Syahril Syifa</i></h4>
    </footer>
</body>
</body>

</html>