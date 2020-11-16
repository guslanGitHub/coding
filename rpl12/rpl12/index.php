<?php 
//connection
$conn = mysqli_connect("localhost", "root", "", "biodatasiswa");
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>biodata siswa</title>
</head>
<body>
<h1>BIODATA SISWA SMK N2 KAIMANA</h1>
<a href="tambah.php">Tambah Data Siswa</a>
<br>
<br>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($result as $data): ?>
		<tr>
			<td>1</td>
			<td><img src=""></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nis']; ?></td>
			<td>
				<a href="detail.php?id=<?php echo $data['id']; ?>">Detail</a> | 
				<a href="">Edit</a> |
				<a href="">Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>