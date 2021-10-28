<?php
session_start();
include '../functions/connect.php';

$level = $_SESSION['level'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Beranda</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link icon -->
    <link rel="stylesheet" type="text/css" href="profile.css">
    <!-- Link CSS -->
    <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
    <!--Sintaks HTML-->
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h3><i class="fas fa-address-card" style="color: white;"></i> Profile</h3>
        <!-- Keterngan halaman-->
    </header>

    <article>
        <div class="menu">
            <!-- Kolom Navbar -->
            <span>
                <!-- Pilihan menu navbar -->
                <ul id="menu1">
                    <?php if ($level == 'user') { ?>
                        <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
                        <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
                        <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;transaksi</a></li>
                        <li class="active"><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
                        <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
                        <!-- Tombol edit data -->
                    <?php } else { ?>
                        <li><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
                        <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
                        <li><a href="../data/"><i class="fas fa-server" style="color: white;"></i>&nbsp;Data Produk</a></li>
                        <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;Laporan</a></li>
                        <li class="active"><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
                        <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
                    <?php } ?>
                </ul>
            </span>
        </div>
    </article>

    <br><br><br><br><br><br>

    <center>
        <div class="wrap">
            <h1 align="center">Profile ASMR</h1>
            <!-- Profile ASMR -->

            <table>
                <tr>
                    <td rowspan="8" width="100px"> <img src="../gambar2/asmr2.png" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:20px" border="2px"></td>
                    <!-- Gambar profil -->
                </tr>
                <tr>
                    <td><b>Develover</b></td>
                    <td>:</td>
                    <td> Richal Zacky Aflacha, Mada Dwi Saputra</td>
                </tr>
                <tr>
                    <td><b>Launcing</b></td>
                    <td>:</td>
                    <td> 18 / Juni / 2021</td>
                </tr>
                <tr>
                    <td><b>Website</b></td>
                    <td>:</td>
                    <td><a> Website Inventori (penyimpanan barang) bebasis data untuk karyawan</a></td>
                </tr>
                <tr>
                    <td><b>Kantor</b></td>
                    <td>:</td>
                    <td> Kota Bogor</td>
                </tr>
            </table>
        </div>

        <div class="wrap" align="center">
            <h1 align="center">Profile Developer</h1>
            <!-- Profil delevoper -->
            <table>
                <tr>
                    <td rowspan="8" width="100px"> <img src="../gambar2/ical.jpg" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:20px" border="2px"></td>
                    <!-- Gambar profil -->
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>:</td>
                    <td> Richal Zacky Aflacha</td>
                </tr>
                <tr>
                    <td><b>Posisi</b></td>
                    <td>:</td>
                    <td> Front End, Web Designer</td>
                </tr>
                <tr>
                    <td><b>Sekolah</b></td>
                    <td>:</td>
                    <td> SMK WIKRAMA Bogor</td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td> Laki-Laki</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>:</td>
                    <td><a href="richalzackyaflacha@smkwikrama.sch.id"> richalzackyaflacha@smkwikrama.sch.id</a></td>
                </tr>
                <tr>
                    <td><b>WhatsApp</b></td>
                    <td>:</td>
                    <td><a href="https://wa.me/0881024141438"> 0881024141438</a></td>
                </tr>
            </table>
        </div>

        <div class="wrap">
            <h1 align="center">Profil Developer</h1>
            <!-- Profil developer -->
            <table>
                <tr>
                    <td rowspan="8" width="100px"> <img src="../gambar2/mada.jpg" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:20px" border="2px"></td>
                    <!-- Gambar profil -->
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>:</td>
                    <td> Mada Dwi Saputra</td>
                </tr>
                <tr>
                    <td><b>Posisi</b></td>
                    <td>:</td>
                    <td> Back End, Database</td>
                </tr>
                <tr>
                    <td><b>Sekolah</b></td>
                    <td>:</td>
                    <td> SMK WIKRAMA Bogor</td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td> Laki-Laki</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>:</td>
                    <td><a href="mailto:madadwisaputra@smkwikrama.sch.id"> madadwisaputra@smkwikrama.sch.id</a></td>
                </tr>
                <tr>
                    <td><b>WhatsApp</b></td>
                    <td>:</td>
                    <td><a href="https://wa.me/085710316668"> 085710316668</a></td>
                </tr>
            </table>
        </div>

        <div class="wrap">
            <h1 align="center">Profil Developer</h1>
            <!-- Profil developer -->
            <table>
                <tr>
                    <td rowspan="8" width="100px"> <img src="../gambar2/syahril.jpeg" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:20px" border="2px"></td>
                    <!-- Gambar profil -->
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>:</td>
                    <td> Syahril Syifa Putra</td>
                </tr>
                <tr>
                    <td><b>Posisi</b></td>
                    <td>:</td>
                    <td> -</td>
                </tr>
                <tr>
                    <td><b>Sekolah</b></td>
                    <td>:</td>
                    <td> SMK WIKRAMA Bogor</td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td> Laki-Laki</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>:</td>
                    <td><a href="mailto:syahrilsyifaputra@smkwikrama.sch.id"> syahrilsyifaputra@smkwikrama.sch.id</a></td>
                </tr>
            </table>
        </div>
    </center>

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