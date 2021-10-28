<?php
session_start();
include "../functions/connect.php";
$data = mysqli_query($connect, "SELECT * FROM login ORDER BY username ASC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Produk</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link icon -->
    <link rel="stylesheet" type="text/css" href="data user.css">
    <!-- Link CSS -->
    <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
    <!--Sintaks HTML-->
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h3><i class="fas fa-server" style="color: white;"></i> Data User</h3>
        <!-- Keterangan halaman -->
    </header>

    <article>
        <div class="back">
            <a href="../laporan/">&#8656;Kembali</a>
        </div>

        <div class="header">
            <h2>DATA USER</h2>
            <!-- Tambahkan barang -->
        </div>

        <div class="table-container">
            <!-- List data produk -->
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id</th>
                        <th>username</th>
                        <th>level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Pemanggilan data -->
                    <?php $i = 1; ?>
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td data-label="No"><?= $i; ?></td>
                            <td data-label="id"><?= $d["id"]; ?></td>
                            <td data-label="username"><?= $d["username"]; ?></td>
                            <td data-label="level"><?= $d["level"]; ?></td>
                            <td data-label="aksi">

                                <a class="tombol-edit" href="edit/?id=<?= $d["id"]; ?>">Edit</a>
                                <!-- Tombol edit data -->
                                <a class="tombol-baru" href="hapus/?id=<?= $d["id"]; ?>" onclick="return confirm('Yakin data user akan dihapus ?')"><i class="fas fa-trash" style="color: white;"></i></a>
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