<?php 
$conn = mysqli_connect("localhost", "root", "", "biodatasiswa");
$id = $_GET['id'];


$query = "SELECT * FROM siswa WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);


 ?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.container{
			width: 600px;
			margin: auto;
		}
		.container-1{
			display: flex;
		}
		.conten{
			margin-left: 20px;
			margin-top: -20px;
		}
		h1{
			text-align: center;
		}
	</style>
	<title>detail data siswa</title>

</head>
<body>
<div class="container">
	<h1>DATA LENGKAP SISWA</h1>
	<div class="container-1">
		<div class="gambar">
			<img src="img/foto.jpg" width="350">
		</div>
		<div class="conten">
			<h3>Nama : <?= $row['nama']; ?></h3>
			<p>NIS : <?= $row['nis']; ?></p>
			<p>TGL: <?= $row['tempat_lahir']; ?>, <?= $row['tanggal_lahir']; ?></p>
			<p>Agama : <?= $row['agama']; ?></p>
			<p>Email : <?= $row['email']; ?></p>
			<p>Alamat : <?= $row['alamat']; ?></p>
			<p>No.Hp : <?= $row['no_hp']; ?></p>
			<p>Jenis Kelamin : <?= $row['gender']; ?></p>
			<p>Jurusan : <?= $row['jurusan']; ?></p>
			<p>Kelas : <?= $row['kelas']; ?></p>
			<p>Angkatan : <?= $row['angkatan']; ?></p>
		</div>
	</div>
	<a href="index.php">Kembali</a>
</div>
</body>
</html>