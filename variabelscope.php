<?php
	// variable scope / ruang lingkup variable
	
	// global scope
	// variabe global dapat diakses dimana saja kecuali di dalam fungsi
	// untuk mengakses variable global, kita bisa menggunakan perintah global
	
	// variable global
	$alas = 6;
	$tinggi = 5;

	function hitungSegitiga($a, $b)
	{
		echo $a*$b/2;
		echo "<br>";

		// untuk mengakses variable global
		global $alas, $tinggi;

		// ini akan menghasilkan error
		echo $alas * $tinggi / 2;
		echo "<br>";

		// atau kita bisa menggunakan perintah global array, dimana indexnya adalah variable yang ingin dipanggil
		echo $GLOBALS['alas'] * $GLOBALS['tinggi'] / 2;
	}

	hitungSegitiga(3,6);

	// local variable
	// variable ini berada di local atau di dalam fungsi
	// tidak bisa digunakan di luar fungsi atau lingkupnya
	
	function tampilNilai()
	{
		// local variable
		$nilai_siswa = 88;
		echo "Nilai minimal siswa SMP adalah ".$nilai_siswa;
	}

	echo "<br>";
	tampilNilai();

	echo "Di sini akan ada error".$nilai_siswa;

	// global variable
	$merk = "VW";
	$jumlah_roda = 4;
	echo "<br>";

	function tampilkanMobil()
	{
		// akan menghasilkan error karena memanggil global variable tanpa perintah global/$GLOBALS[]
		echo "Mobil kodok merk ".$merk." memiliki ".$jumlah_roda." roda";

		echo "<br>";

		// tidak error karena memanggil variable global dengan perintah $GLOBAL[]
		echo "Mobil kodok merk ".$GLOBALS['merk']." memiliki ".$GLOBALS['jumlah_roda']." roda";
	}

	tampilkanMobil();

	// static variable
	// data atau isi di variable akan digantikan dengan isi atau data yang baru
	// agar tidak digantikan, maka kita menggunakan perintah static
	
	echo "<br>";

	function tampilkanNomor()
	{
		$sisi_kanan = 4;
		echo $sisi_kanan . "<br>";
		$sisi_kanan++;
		echo "kita tambah 1 = ".$sisi_kanan."<br>";
	}

	function tampilkanNomorStatic()
	{
		static $sisi_kanan = 4;
		echo $sisi_kanan . "<br>";
		$sisi_kanan++;
		echo "kita tambah 1 = ".$sisi_kanan."<br>";
	}

	function hitungSisi($a, $b)
	{
		static $hasil = $a*$b;
		echo $hasil."<br>";
	}

	tampilkanNomor(); // 5 dihapus
	tampilkanNomor(); // 5 dihapus
	tampilkanNomor(); // 5 dihapus

	echo "<br>";

	tampilkanNomorStatic(); // 4
	tampilkanNomorStatic(); // 4 + 1 = 5
	tampilkanNomorStatic(); // 5 + 1 = 6

	hitungSisi(2, 2);
	hitungSisi(3, 2);
?>