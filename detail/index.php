<?php
include '../functions/connect.php';
$id = $_GET['id'];
$sql = mysqli_query($connect, "SELECT * FROM data WHERE id = $id")

?>
<!DOCTYPE html>
<html>

<head>
    <title>Produk</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Link untuk menambahkan logo icon-->
    <link rel="stylesheet" type="text/css" href="detail.css">
    <!--Link CSS-->
    <link rel="icon" href="../gambar2/asmr.png">
</head>

<body>
    <!--Sintaks HTML-->

    <article>

        <div class="back">
            <a href="../produk/">&times;</a>
        </div>

        <div class="pict" align="center">
            <?php foreach ($sql as $d) { ?>
                <img src="../gambar/<?= $d['gambar'] ?>">
                <h1><?= $d['name']; ?></h1>
            <?php } ?>
        </div>


    </article>
</body>

</html>