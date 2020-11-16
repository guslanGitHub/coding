<?php
$conn = mysqli_connect('localhost', 'root', '', 'menu');
$query = "SELECT * FROM data";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>RPL B</title>
</head>

<body>
	<div class="container">
		<header>
			<h1>RESTORAN KEBAHAGIAN</h1>
			<h2>SMK NEGERI 2 KAIMANA</h2>
			<a href="tambah.php">Tambah Daftar Menu</a>
		</header>
		<div class="main">
			<?php foreach ($result as $row) : ?>
				<div class="card">
					<img src="img/<?= $row['gambar']; ?>">
					<div class="title">
						<h3><?= $row['nama']; ?></h3>
						<h3>Rp, <?= $row['harga']; ?></h3>
					</div>
					<div class="link">
						<a href="hapus.php?id=<?= $row['id']; ?>" class="hapus" onclick="return confirm('Anda yakin mau hapus file ini?');">Hapus</a>
						<a href="" class="edit">Edit</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>

</html>