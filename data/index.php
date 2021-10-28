<?php
session_start();
require '../functions/connect.php';

$data = mysqli_query($connect, 'SELECT * FROM data');
if (isset($_POST['cari'])) {
    $data = cari($_POST['keyword']);
}

$level = $_SESSION['level'];

?>
<!--Pengambilan data-->

<!DOCTYPE html>
<html>

<head>
    <title>Data Produk</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link icon -->
    <link rel="stylesheet" type="text/css" href="data.css">
    <!-- Link CSS -->
    <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
    <!--Sintaks HTML-->
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h3><i class="fas fa-server" style="color: white;"></i> Data</h3>
        <!-- Keterangan halaman -->
    </header>

    <article>
        <div class="menu">
            <!-- Kolom navbar -->
            <span>
                <ul id="menu1">
                    <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
                    <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
                    <li class="active"><a href="../data/"><i class="fas fa-server" style="color: white;"></i>&nbsp;Data Produk</a></li>
                    <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;Laporan</a></li>
                    <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
                    <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
                </ul>
            </span>

            <form method="post" action="">
                <!--kolom search-->
                <input class="search" type="text" placeholder="Search..." name="keyword">
                <input class="button" type="submit" value="Search" name="cari">
            </form>
        </div>

        <br><br><br>

        <div class="header">
            <h2>DATA PRODUK</h2>
            <a class="tombol" href="../tambah/">+ Tambah barang</a>
            <!-- Tambahkan barang -->
        </div>

        <div class="table-container">
            <!-- List data produk -->
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Pemanggilan data -->
                    <?php $i = 1; ?>
                    <?php foreach ($data as $adm) { ?>
                        <tr>
                            <td data-label="No"><?= $i; ?></td>
                            <td data-label="gambar">
                                <!-- pengambilan gambar -->
                                <img src="../gambar/<?= $adm["gambar"]; ?>" alt="<?= $adm["name"]; ?>">
                            </td>

                            <td data-label="name"><?= $adm["name"]; ?></td>
                            <td data-label="code"><?= $adm["code"]; ?></td>
                            <td data-label="stock"><?= $adm["stock"]; ?></td>
                            <td data-label="price"><?= rupiah($adm["price"]); ?></td>
                            <td data-label="aksi">

                                <a class="tombol-edit" href="../edit/?id=<?= $adm["id"]; ?>">Edit</a>
                                <!-- Tombol edit data -->
                                <a class="tombol-baru" href="../hapus/?id=<?= $adm["id"]; ?>" onclick="return confirm('Yakin data produk akan dihapus ?')"><i class="fas fa-trash" style="color: white;"></i></a>
                                <!-- Tombol hapus -->
                            </td>
                        </tr>

                        <?php $i++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </article>

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