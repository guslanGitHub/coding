<?php 

if(isset($_POST["submit"])){
	$data = $_POST;
	if($data["harga_lauk"] == "ikanrica-rica" && $data["harga_minuman"] == "tehjus"){
		$nama = "Ikan rica-rica";
		$harga = 25000;
		$minuman = "Teh Jus";
		$harga_m = 5000;
		$total = $harga + $harga_m;
	}
}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Menu Makanan</title>
</head>
<body>
<div class="container">
	<h1>Menu Makanan RPL</h1>
	<form action="" method="post">
		<label>Lauk :</label>
		<select name="harga_lauk">
			<option value="ikanrica-rica">Ikan Rica-Rica</option>
			<option value="ikanbakarsaos">Ikan Bakar Saos</option>
			<option value="ayamlalapan">Ayam Lalapan</option>
			<option value="ayamrica-rica">Ayam Rica-Rica</option>
			<option value="baksotelur">Bakso Telur</option>
			<option value="nasigorengspesial">Nasi Goreng Spesial</option>
		</select>
		
		<br>
		<label>Minuman :</label>
		<select name="harga_minuman">
			<option value="tehjus">Teh Jus</option>
			<option value="extrajossusu">Extrajos Susu</option>
			<option value="airmineral">Air Mineral</option>
			<option value="tehsusu">Teh Susu</option>
			<option value="saraba">Saraba</option>
			<option value="kopisenang">Kopi Senang</option>
		</select>
		
		<br>
		<button type="submit" name="submit">Pesan</button>
	</form>
</div>

<div class="container">
	<h2>Pesanan Anda</h2>
	<label>Nama Pesanan :</label>
	<input type="text" name="" value="<?= $nama; ?>" disabled>
	<label>Harga :</label>
	<input type="text" name="" value="<?= $harga; ?>" disabled>
	<br>
	<label>Nama Pesanan :</label>
	<input type="text" name="" value="" disabled>
	<label>Harga :</label>
	<input type="text" name="" value="" disabled>
	<br>
	<label>Total Harga :</label>
	<input type="text" name="" value="" disabled>
</div>
</body>
</html>