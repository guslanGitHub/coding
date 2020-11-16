<?php
$conn = mysqli_connect("localhost", "root", "", "menu");
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$gambar = $_POST['gambar'];

	$query = "INSERT INTO data VALUES('', '$nama', '$harga', '$gambar')";

	mysqli_query($conn, $query);
	$cek = mysqli_affected_rows($conn);
	if ($cek > 0) {
		echo "<script>
				alert('Data berhasil di tambahkan');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
		alert('Data gagal di tambahkan');
		document.location.href = 'index.php';
		</script>";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<h1>TAMBAH DATA</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama Makanan :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="harga">Harga Makanan :</label>
				<input type="text" name="harga" id="harga" required>
			</li>
			<li>
				<label for="gambar">Gambar Makanan :</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Kirim</button>
			</li>
		</ul>
	</form>
</body>

</html>