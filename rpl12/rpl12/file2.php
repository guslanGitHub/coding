<?php 

$angka = $_POST["angka"];
if($angka < 0){
	$str = "Negatif"
}elseif($angka == 0){
	$str = "NOL";
}else{
	$str = "Positif";	
}
echo "$angka adalah bilangan $str";

 ?>