<?php 
$conn = mysqli_connect('localhost', 'root', '', 'menu');
$id = $_GET['id'];
$query = "DELETE FROM data WHERE id = $id";

mysqli_query($conn, $query);
$cek = mysqli_affected_rows($conn);
	if ($cek > 0) {
		echo "<script>
				alert('Data berhasil di hapus');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
		alert('Data gagal di hapus');
		document.location.href = 'index.php';
		</script>";
	}





 ?>