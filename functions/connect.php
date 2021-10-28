<?php
$connect = mysqli_connect("localhost", "root", "", "iventory");


function editdata($data)
{
	global $connect;
	$id = $_GET['id'];
	$name = $data['name'];
	$code = $data['code'];
	$stock = $data['stock'];
	$price = $data['price'];

	$result = mysqli_query($connect, "update data SET name='$name', code='$code', stock='$stock', price='$price' where id=$id");

	return mysqli_affected_rows($connect);
}

function edituser($data)
{
	global $connect;
	$id = $_GET['id'];
	$username = $data['username'];
	$password = md5($data['password']);
	$level = $data['level'];

	$result = mysqli_query($connect, "UPDATE login SET username='$username', password='$password', level='$level' WHERE id=$id");

	return mysqli_affected_rows($connect);
}

function tambah($data)
{
	global $connect;
	// Ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$codee = htmlspecialchars($data["codee"]);
	$stock = htmlspecialchars($data["stock"]);
	$price = htmlspecialchars($data["price"]);

	// Upload gambar
	$cover = upload();
	if (!$cover) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO data
				VALUES
				('', '$nama', '$codee', '$stock', '$price', '$cover')
				";
	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
}

function upload()
{
	$nama = $_FILES["cover"]["name"];
	$ukuran = $_FILES["cover"]["size"];
	$error = $_FILES["cover"]["error"];
	$tmpName = $_FILES["cover"]["tmp_name"];

	if ($error === 4) {
		echo "<script>
            alert ('Silakan upload dahulu !!')
				</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode(".", $nama);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
            alert ('Silakan upload gambar dengan ekstensi jpg, jpeg atau png!')
        </script>";
		return false;
	}

	if ($ukuran > 1000000000) {
		echo "<script>
            alert ('Ukuran gambar terlalu besar!')
        </script>";
		return false;
	}

	$namaBaru = uniqid();
	$namaBaru .= ".";
	$namaBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../gambar/' . $namaBaru);
	return $namaBaru;
}

function query($query)
{
	global $connect;
	$result = mysqli_query($connect, $query);
	$stories = [];
	while ($story = mysqli_fetch_assoc($result)) {
		$stories[] = $story;
	}
	return $stories;
}

function cari($keyword)
{
	$query = "SELECT * FROM data WHERE name LIKE '%$keyword%' OR code LIKE '%$keyword%'";
	return query($query);
}

function rupiah($angka)
{
	$hasil = "Rp " . number_format($angka, 0, ',', '.');
	return $hasil;
}

function bulan($bulan)
{
	switch ($bulan) {
		case '1':
			$bulan = 'Januari';
			break;
		case '2':
			$bulan = 'Februari';
			break;
		case '3':
			$bulan = 'Maret';
			break;
		case '4':
			$bulan = 'April';
			break;
		case '5':
			$bulan = 'Mei';
			break;
		case '6':
			$bulan = 'Juni';
			break;
		case '7':
			$bulan = 'Juli';
			break;
		case '8':
			$bulan = 'Agustus';
			break;
		case '9':
			$bulan = 'September';
			break;
		case '10':
			$bulan = 'Oktober';
			break;
		case '11':
			$bulan = 'November';
			break;
		case '12':
			$bulan = 'Desember';
			break;
	}

	return $bulan;
}

function tanggal($date)
{
	$tanggal = substr($date, 8, 2);
	$bulan = bulan(substr($date, 5, 2));
	$tahun = substr($date, 0, 4);

	$tanggal = $tanggal . " " . $bulan . " " . $tahun;

	return $tanggal;
}
