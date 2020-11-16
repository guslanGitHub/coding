<?php 
$conn = mysqli_connect("localhost", "root", "", "biodatasiswa");
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$nis = $_POST['nis'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$agama = $_POST['agama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$gender = $_POST['gender'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$angkatan = $_POST['angkatan'];
	$foto = $_POST['foto'];

	$query = "INSERT INTO siswa 
			VALUES
			('', '$nama', '$nis', '$tempat_lahir', '$tanggal_lahir', '$agama', '$email', '$alamat', '$no_hp', '$gender', '$jurusan', '$kelas', '$angkatan', '$foto')
			";
	mysqli_query($conn, $query);
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
</head>
<body>
	<h1>FORM TAMBAH DATA SISWA</h1>
<form action="" method="post">
	<label>Nama :</label>
	<input type="text" name="nama">
	<br>
	<label>NIS :</label>
	<input type="text" name="nis">
	<br>
	<label>TTG :</label>
	<input type="text" name="tempat_lahir">
	<input type="date" name="tanggal_lahir">
	<br>
	<label>Agama :</label>
	<select name="agama">
		<option value="Islam">Islam</option>
		<option value="Protestan">Kristen Protestan</option>
		<option value="Katolik">Katolik</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		<option value="Konghucu">Konghucu</option>
	</select>
	<br>
	<label>Email :</label>
	<input type="email" name="email">
	<br>
	<label>Alamat :</label>
	<input type="text" name="alamat">
	<br>
	<label>No.Hp :</label>
	<input type="text" name="no_hp">
	<br>
	<label>Jenis Kelamin :</label>
	<input type="radio" name="gender">Laki-laki | 
	<input type="radio" name="gender">Perempuan
	<br>
	<label>Jurusan</label>
	<select name="jurusan">
		<option value="RPL">RPL</option>
		<option value="AKL">AKL</option>
		<option value="TBSM">TBSM</option>
		<option value="TPTL">TPTL</option>
		<option value="TPM">TPM</option>
		<option value="OTKP">OTKP</option>
		<option value="DPIB">DPIB</option>
	</select>
	<br>
	<label>Kelas :</label>
	<input type="text" name="kelas">
	<br>
	<label>Angkatan Tahun :</label>
	<input type="text" name="angkatan"> Contoh: 2020
	<br>
	<label>Foto :</label>
	<input type="text" name="foto">
	<br>
	<button type="submit" name="submit">Kirim Data</button>
</form>
</body>
</html>