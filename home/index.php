<?php
session_start();
// $id = $_GET['d'];
$level = $_SESSION['level'];

// echo var_dump($level);

?>



<!DOCTYPE html>
<html>

<head>
    <title>Beranda</title>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link icon -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no ">
    <link rel="icon" href="../gambar2/asmr.png">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="home.css">
    <!-- Link CSS -->
</head>

<body>
    <!--Sintaks HTML-->
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h1>Elektronik, Part Komputer, Aksesoris</h1>
        <!-- Slogan -->
        <h3><i class="fas fa-home" style="color: white;"></i> Home</h3>
        <!--Keterangan halaman-->

        <label for="check" class="mobile-menu" id="mobile-menu">
            <!-- Tampilan menu mobile -->
            <i class="fas fa-bars fa-3x" style="color: white;"></i>
            <!-- Menu bar -->
        </label>

        <label for="check2" class="mobile-menu2">
            <!-- Tampilan Log in mobile -->
            <a href="../Login/index.php">
                <i class="fas fa-user-circle fa-3x" style="color: white"></i>
                <!-- Menu Log in mobile-->
            </a>
        </label>
    </header>

    <!-- Side bar -->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <h2>MENU</h2>
        <ul><br><br>
            <li class="active">&ensp;<i class="fas fa-home" style="color: white;"> <a href="../home/">Beranda</a></i></li>
            <li>&ensp;<i class="fas fa-shopping-cart" style="color: white;"> <a href="../produk/">Produk</a></i></li>
            <li>&ensp;<i class="fas fa-database" style="color: white;"> <a href="../data/">Data Produk</a></i></li>
            <li>&ensp;<i class="fas fa-address-card" style="color: white;"><a href="../laporan/">&nbsp;Laporan</a></i></li>
            <li>&ensp;<i class="far fa-address-card" style="color: white;"> <a href="../profile/">Profile</a></i></li>
            <li>&ensp;<a href="../logout/">Log out</a></a></li>
        </ul>
    </div>
    <input type="checkbox2" id="check2">

    <article>
        <div class="menu">
            <span>
                <ul id="menu1">
                    <?php if ($level == 'user') { ?>
                        <li class="active"><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
                        <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
                        <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;transaksi</a></li>
                        <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
                        <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
                        <!-- Tombol edit data -->
                    <?php } elseif ($level == 'admin') { ?>
                        <li class="active"><a href="../home/"><i class="fas fa-home" style="color: white;"></i>&nbsp;Beranda</a></li>
                        <li><a href="../produk/"><i class="fas fa-box-open" style="color: white;"></i>&nbsp;Produk</a></li>
                        <li><a href="../data/"><i class="fas fa-server" style="color: white;"></i>&nbsp;Data Produk</a></li>
                        <li><a href="../laporan/"><i class="fas fa-file" style="color: white;"></i>&nbsp;Laporan</a></li>
                        <li><a href="../profile/"><i class="fas fa-address-card" style="color: white;"></i>&nbsp;Profile</a></li>
                        <li><a href="../logout/" class="logout" onclick="return confirm('Yakin ingin keluar ?')">Log out</a></li>
                    <?php } ?>

                    <!-- Menu Navigasi-->


                    <ul class="dropdown">
                        <li class="dropbtn1">Tentang</li>
                        <!-- Kolom tentang web -->
                        <div class="dropdown-content1">
                            <p>Aplikasi Inventori ini memudahkan user sekaligus admin untuk mengelola produk yang ingin di distribusikan dalam bentuk etalase digital, yang menggunakan sistem Database.</p>
                        </div>
                    </ul>

                    <ul class="dropdown2">
                        <li class="dropbtn2">Bantuan ?</li>
                        <!-- Kolom bantuan/chat admin -->
                        <div class="dropdown-content2">
                            <li><a href="https://wa.me/0881024141438">Admin 1</a></li>
                            <li><a href="https://wa.me/085710316668">Admin 2</a></li>
                        </div>
                    </ul>
                </ul>
            </span>
        </div>

        <br><br><br><br>

        <div class="slideshow-container">
            <!-- Gambar bergerak -->

            <div class="mySlides fade">
                <img src="../gambar2/monitor.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="../gambar2/keyboard.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="../gambar2/hornet.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="../gambar2/monitor 2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="../gambar2/mouse.jpg" style="width:100%">
            </div>
            <!-- Urutan gambar-->
        </div>

        <br>

        <div style="text-align:center; margin-top: -60px;">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <!-- Lingkaran urutan gambar-->
        </div>

        <script>
            // JS Slideshow gambar
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 4000); // berubah setiap 4 detik
            }
        </script>


        <div class="gambar">
            <!-- Gambar menu beranda -->
            <img src="../gambar2/wfh.jpg">
            <img src="../gambar2/monitor.jpg" class="img2">
            <img src="../gambar2/keyboard.jpg" class="img2">
            <img src="../gambar2/laptop geforce.jpg">
            <img src="../gambar2/ssd vgen.jpg" class="img3">
            <img src="../gambar2/corei9.jpg" class="img3">
            <img src="../gambar2/rtx.jpg" class="img3">
        </div>
    </article>

    <footer>
        <h1>ASMR</h1>

        <h2>Hubungi kami</h2>
        <div class="icon">
            <!-- Logo + media sosial -->
            <ul>
                <li><a class="icon" href="https://whatsapp.com/"><img src="https://liupurnomo.github.io/resume/icons/WhatsApp.png" alt="" width="30px"> WhatsApp</a></li><br>

                <li><a class="icon" href="https://www.instagram.com/"><img src="https://liupurnomo.github.io/resume/icons/Instagram.png" alt="" width="30px"> Instagram</a></li><br>

                <li><a class="icon" href="https://facebook.com/"><img src="https://liupurnomo.github.io/resume/icons/Facebook.png" alt="" width="30px"> Facebook</a></li><br>

                <li><a class="icon" href="https://twitter.com/"><img src="https://liupurnomo.github.io/resume/icons/Twitter.png" alt="" width="30px"> Twitter</a></li><br>

                <li> <a class="icon" href="https://www.youtube.com/"><img src="https://liupurnomo.github.io/resume/icons/YouTube.png" alt="" width="30px"> You Tube</a></li>
            </ul>
        </div>

        <h2 class="iklan">Sponsor</h2>
        <!-- Gambar sponsor -->
        <div class="brand">
            <ul>
                <li><img src="../sponsor/armaggeddon.jpg"></li><br>
                <li><img src="../sponsor/intel.jpg"></li><br>
                <li><img src="../sponsor/rexus.jpg" class="kotak"></li>
            </ul>
            <ul class="baris2">
                <li><img src="../sponsor/vgen.jpg"></li><br>
                <li><img src="../sponsor/logitech.jpg" style="margin-top: 5px;"></li><br>
                <li><img src="../sponsor/fantech.jpg" style="  margin-top: 4px;" class="kotak"></li>
            </ul>
            <ul class="baris3">
                <li><img src="../sponsor/geforce.jpg"></li><br>
                <li><img src="../sponsor/samsung.jpg" style="margin-top: 5px;"></li><br>
                <li><img src="../sponsor/microsoft.jpg" style="  margin-top: 6px;" class="kotak"></li>
            </ul>
            <ul class="kotakbawah">
                <li><img src="../sponsor/msi.jpg"></li><br>
                <li class="kotak2"><img src="../sponsor/nyk.jpg"></li><br>
            </ul>
        </div>

        <!--Copyright-->
        <h3>&copy; ASMR <script>
                document.write(new Date().getFullYear())
            </script>
        </h3>
        <h4><i>Richal Zacky | Mada Dwi | Syahril Syifa</i></h4>
    </footer>
</body>

</html>