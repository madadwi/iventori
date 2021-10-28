<?php //Sintaks PHP
//Koneksi database
session_start();
if (isset($_POST['login'])) {
    include "../functions/connect.php";

    //Menangkap data yang di kirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $cariid = mysqli_query($connect, "SELECT level FROM login WHERE username = '$username'");
    foreach ($cariid as $d) {
        $_SESSION['level'] = $d['level'];
    }
    $_SESSION['user'] = $username;


    if (!empty($username) && !empty($password)) {
        $sql = mysqli_query($connect, "SELECT * FROM login WHERE username ='$username' AND password ='$password' ");
        $result = mysqli_num_rows($sql);


        if ($result) {
            echo "<script language='javascript'>document.location='../home/'; alert('Anda berhasil Login');</script>"; //notifikasi berhasil
        } else {
            echo "<script language ='javascript'>alert('Username atau Password anda salah!! atau Daftar dahulu!'); document.location='../login/';</script>"; //notifikasi gagal
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <meta charset="utf-8">
    <!--Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Link CSS-->
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="../gambar2/asmr.png">
    <!--Link font awesome (icon gambar)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!--Sintaks HTML-->
    <header>
        <img src="../gambar2/asmr.png">
        <!--Logo-->
        <h1>Elektronik, Part Komputer, Aksesoris</h1>
        <!--Slogan-->
        <h2>Log in</h2>
        <!--Keterangan Halaman-->
    </header>

    <br><br><br><br>

    <content>
        <img src="../gambar2/pc.jpg">
        <div class="login">
            <!--Perintah Log in-->
            <h2 style="text-align: center;">Silahkan Log in</h2>


            <form method="POST">
                <!--Tabel Log in-->
                <table>
                    <tr>
                        <!--Kolom username-->
                        <td><b>Username</b></td>
                        <td>:</td>
                        <td><input required type="text" name="username" placeholder="Masukan Username" style="width:200px;"></td>
                    </tr>
                    <tr>
                        <!--Kolom Password-->
                        <td><b>Password</b></td>
                        <td>:</td>
                        <td><input required type="password" name="password" id="password" placeholder="Masukan Password" style="width:200px;">
                            <span class="eye" onclick="executePassword()">
                                <!--Icon mata-->
                                <i class="fas fa-eye" id="show"></i>
                                <i class="fas fa-eye-slash" id="hide"></i>
                            </span>
                        </td>
                    </tr>
                </table>

                <table align="center">
                    <tr>
                        <!--Tombol Login-->
                        <td><button name="login">Login</button></td>


                    </tr>
                </table>

                <!--Tombol login/daftar-->
                <h4 align="center"><a href="../login/" class="tbl1">Login</a> / <a href="../daftar/" class="tbl2">Daftar</a></h4>
            </form>
        </div>

        <script>
            //JS animasi mata pada password
            function executePassword() {
                var x = document.getElementById('password');
                var y = document.getElementById('show');
                var z = document.getElementById('hide');

                if (x.type === 'password') {
                    x.type = "text";
                    y.style.display = "block";
                    z.style.display = "none";
                } else {
                    x.type = "password";
                    y.style.display = "none";
                    z.style.display = "block";
                }
            }
        </script>
    </content>

    <footer>
        <h3>&copy; ASMR <script>
                document.write(new Date().getFullYear())
            </script>
        </h3>
        <h4><i>Richal Zacky | Mada Dwi | Syahril Syifa</i></h4>
    </footer>
</body>

</html>

<!-------------------------------------------------------------------------------------------------------------------------->