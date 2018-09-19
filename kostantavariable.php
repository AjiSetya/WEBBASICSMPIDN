<?php
	echo("di sini kita akan manampilkan variable dan konstanta <br>");
	echo("ini<br>");

	// konstanta menggunkaan fungsi define(namakonstanta, nilai/value)
	define("nama_siswa", "zidan");
	echo("Nama siswa ".nama_siswa."<br>");

	// variable di php diawali dgn $
	$kelas = "RPL 2 <br>";
	echo $kelas;

	$nama = "zidan";
	$nilaipertama = 70;
	echo "nilai ".$nama." = ".$nilaipertama;

?>