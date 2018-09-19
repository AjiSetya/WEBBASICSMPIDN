<!DOCTYPE html>
<html>
<head>
	<title>Perulangan</title>

	<style type="text/css">
		.card {
			box-shadow   : 0 4px 8px 0 rgba(0,0,0,0.2);
			transition   : 0.3s;
			max-width    : 60%;
			border-radius: 5px;
			padding      : 8px 16px;
			margin-left  : auto;
			margin-right : auto;
		}

		.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

	</style>
</head>
<body>
	<h2>Perulangan</h2>
	<p>Perulangan (<i>Looping</i>) merupakan kode untuk melakukan perintah secara berulang. Contohnya, ketika kita ingin menampilkan angka secara urut dari 1 sampai dengan 10, biasanya kita menampilkannya dengan menggunakan echo berkali-kali, dengan menggunakan perulangan, maka kita tinggal melakukannya sekali.</p>
	
	<?=1?>
	<?=2?>
	<?=3?>
	<?=4?>
	<?=5?>
	<?=6?>
	<?=7?>
	<?=8?>
	<?=9?>
	<?=10?>

	<!-- while -->
	<p>While digunakan untuk melakukan perintah berkali-kali jika suatu kondisi adalah benar / true</p>

	<?php
		$kecepatan = 1;

		// kondisi
		while ($kecepatan <= 5) {
			// perintah
			if ($kecepatan == 5) {
				// jika kecepatan mencapai angka 5, maka buat line baru
				echo $kecepatan . "<br>";
			} else {
				echo $kecepatan;
			}
			// peningkatan / penurunan
			$kecepatan++;		
		}

		echo "line baru <br>";
	?>

	<p>Do while adlaah kode untuk melakukan perintah berulang, sampai suatu kondisi terpenuhi</p>

	<!-- do while -->
	<?php
		$nyawa = 1;

		do {
			// perintah
			echo $nyawa++;

		// kondisi
		} while ($nyawa <= 5);
	?>

	<p>For adalah kode untuk melakukan perintah berulang ketika masih di dalam kondisi yang ditentukan</p>

	<!-- for -->
	<?php
		// count($buah) = total data
		// buah.lenght
		$buah = array("apel", "duku", "durian");

		// i (index/position)
		// kita mulai dari 0
		// kita ulangi sampai total data
		// tambahkan datanya menggunakan ++
		for ($i=0; $i < count($buah); $i++) { 
			echo "<div class='card'><center>" . $buah[$i] . "</center></div>";
		}
	?>

	<p>For each digunakan untuk data array dan ufngsinya sama dengan kode for, hanya saja kode foreach akan memberikan kunci/index di masing-masing data array</p>

	<!-- foreach -->
	<?php
		$serangga = array("Semut", "Kecoa", "Jangkrik");

		foreach ($serangga as $value) {
			echo "<div class='card'><center>" . $value . "</center></div>";
		}
	?>


</body>
</html>