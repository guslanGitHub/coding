<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>film</title>
</head>
<body>
<div class="conatiner">
	<header>
		<h1>WELLCOME TO MY WEB</h1>
		<h5>By Guslan &copy; 2020</h5>
		<hr>
	</header>
	<div class="main">
		<?php for($i = 0; $i < 1000; $i++): ?>
		<div class="card">
			<img src="img/simanis.jpg" alt="gambar">
			<div class="title-card">
				<h3>Simanis Jembatan Ancol</h3>
				<p>Tahun : 2020</p>
			</div>
			<div class="tombol">
				<a href="">Detail</a>
				<a href="">Edit</a>
				<a href="">Hapus</a>
			</div>
		</div>
	<?php endfor; ?>
	</div>
</div>
</body>
</html>