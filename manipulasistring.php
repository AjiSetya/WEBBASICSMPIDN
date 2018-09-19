<?php 
	// menghitung jumlah karakter
	// menggunakan fungsi strlen(string)
	// string lenght
	
	$password = "1234";

	if (strlen($password) < 6) {
		echo "minimal karakter adalah 6 <br>";
	} else {
		echo "boleh login <br>";
	}

	// unutk membandingkan antara dua string, kita bisa menggunakan fungsi strcmp(str1, str2) / string compare
	
	$username1 = "zidan.ed";
	$username2 = "afiq.ok";

	echo "Hasil perbandingan adalah " . strcmp($username1, $username2) . "<br>";

	// hasil :
	// jika hasilnya adalah 0, maka jumlah kedua string tsb sama
	// jika hasilnya adalah < 0 (minus), maka jumlah string ke 1 kurang dari string ke 2
	// jika hasilnya adalah 0 > (plus), maka jumlah string ke 1 lebih dari string ke 2
	
	// Kapitalisasi / mengubah huruf menjadi besar
	echo strtoupper($username1);
	// Pengecilan
	echo strtolower($username1);

	echo "<br>";

	$berita = "Ini hanya berita biasa\ntidak perlu terlalu serius ketika mambacanya\ndijamin pasti akan kecewa";

	echo nl2br($berita);

	// menfilter tag html agar boleh atau tidak diekseuksi oleh sistem
	echo "Tulisan ini akan menjadi <b>tebal</b><br>";
	echo strip_tags("Tulisan ini akan menjadi <b>tebal</b><br>", "<br>");

	// mengubah string menjadi array
	$buah = "apel, durian, mangga, pepaya";
	// definisikan variable array
	$array_buah = explode(",", $buah);
	// $array_buah = array("apel", "durian", "mangga", "pepaya")

	for ($i=0; $i < count($array_buah); $i++) { 
		echo $array_buah[$i] . "<br>";
	}

	echo implode("--", $array_buah) . "<br>";

	// menemukan posisi karakter pada string 
	
	$kata = "kata di dalam sebuah kalimat";

	echo strpos($kata, "kata") . "<br>";
	echo strrpos($kata, "kata") . "<br>";
	echo stripos($kata, "kata") . "<br>";
	echo strripos($kata, "kata") . "<br>";

	$hasil = strrpos($kata, "sebuah");
	if ($hasil === false) {
		echo "kata 'sebuah' tidak bisa ditemukan dalam variable $kata pada posisi ke $hasil <br>";
	} else {
		echo "kata 'sebuah' bisa ditemukan dalam variable $kata pada posisi ke $hasil <br>";
	}

	// menampilkan sebagian isi string
	$first_name = "Aji";
	$last_name = "Setya";

	echo "Inisial nama adalah : " . substr($first_name, -2, 1) . "" . substr($last_name, 0, 1) . "<br>";

	// mengganti karakter pada string
	$judul = "Laskar pelangi, adalah sebuah film dari Indonesia yang terisnpirasi dari anak-anak desa yang suka melihat pelangi dan berusaha mencari ujung pelangi. Mitosnya adalah, jika anak-anak tersebut dapat menemukan ujung pelangi, maka mereka akan mendapatkan harta karun.";

	echo str_replace("pelangi", "Cinta", $judul, $total_replace) . "<br>";
	
	echo "<script>alert('Berhasil mengubah sebanyak " . $total_replace . " kata');</script>";
	
?>

