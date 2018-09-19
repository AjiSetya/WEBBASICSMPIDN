<?php 
	date_default_timezone_set("Asia/Jakarta");
	// menampilkan tanggal sekarang
	echo date("Y/m/d-h:i a") . "<br>";

	// jam, menit, detik tanggal bulan tahun
	$format = mktime(11, 12, 0, 11, 8, 2018);
	echo date("Y/m/d-h:i a", $format);

	echo "<br>";

	// mengubah string menjadi waktu
	$waktu = "2 weeks";
	$sekarang = strtotime("Now");
	// mencari tanggal besok
	$tanggal_besok = strtotime($waktu, $sekarang);

	echo "Besok adalah " . date("Y/m/d", $tanggal_besok);
?>