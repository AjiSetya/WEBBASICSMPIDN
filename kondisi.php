<?php
	
	$nama = "Thalhah";

	if (strlen($nama) < 20) {
		echo "karakter kurang dari 20 <br>";
	} else {
		echo "karakter lebih dari 20 <br>";
	}

	// ternary operation (?:)
	echo (strlen($nama) < 20) ? "karakter kurang dari 20 <br>" : "karakter lebih dari 20 <br>";

	$ali_lulus = false;

	// if ($ali_lulus) {
	// 	$pesan = "selamat Ali <br>";
	// } else {
	// 	$pesan = "tetap semangat Ali <br>";
	// }

	$pesan = ($ali_lulus) ? "selamat Ali <br>" : "tetap semangat Ali <br>";
	
	echo $pesan;

	// switch
	
	$nilai_sultan = 40;

	switch ($nilai_sultan) {
		case $nilai_sultan <= 60 :
			echo "sayangnya kamu harus remidi <br>";
			break;
		case $nilai_sultan > 60 :
			echo "kamu berhak melakukan pengayaan <br>";
			break;
	}

	$activity = "berenang";

	switch ($activity) {
		case 'berenang':
			echo "kamu sedang berenang <br>";
			break;
		case 'bermain':
			echo "kamu sedang bermain <br>";
			break;
		default:
			echo "kamu tidak melakukan aktifitas apapun <br>";
			break;
	}

	$score = 10;
	$age   = 20;

	// ternary Operation
	echo 'Taking into account your age and score, you are: ',($age > 10 ? ($score < 80 ? 'behind' : 'above average') : ($score < 50 ? 'behind' : 'above average')); // returns 'You are behind'

	echo "<br>";

	if ($age > 10) {
		if ($score < 80) {
			echo "behind";
		} else {
			echo "above average";
		}
	} else if ($score < 50) {
		echo "behind";
	} else {
		echo "above average";
	}

	echo "<br>";

	echo ($age <= 10) ? "kamu anak" : (($age <=20) ? "kamu remaja" : (($age > 20) ? "kamu dewasa" : "kamu eek"));
	

?>