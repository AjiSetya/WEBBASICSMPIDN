<?php 
	
	$nama = array('ali' => '80', 'said' => '90');
	// assigment
	$nama['ammar'] = '100';
	$nama['zidan'] = '20';

	// menampilkan jumlah data array
	echo "Total data " . count($nama) . "<br>";
	// memanggil data
	echo "Nilai said " . $nama['said'] . "<br>";

	// mengurutkan data value dari yang terkecil
	// sort($nama);
	// mengurutkn data key dari yang terkecil
	// ksort($nama);
	//engurutkan data value dari yang terbesar
	// arsort($nama);
	// mengurutkan data key dari data terbesar
	krsort($nama);
	// menampilkan seluruh data
	foreach ($nama as $key => $value) {
		echo "Nilai data dengan kunci " . $key . " adalah " . $value . "<br>";
		// jika sistem sudha menampilkan data sampai angka 100 maka sistem berhenti
		// if ($value == '100') {
		// 	break;
		// } 
	}

	$hewan = array('kuda', 'harimau', 'ayam', 'bebek');
	// mengurutkan data dari terkecil ke terbesar (asc)
	// sort($hewan);
	// mengurutkan data dari terbesar ke terkecil
	rsort($hewan);
	for ($i=0; $i < count($hewan); $i++) { 
		echo $hewan[$i] . "<br>";
	}

?>