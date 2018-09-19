<?php
	// String
	$nama = "Furqon Afuwwu Hakim";

	// menghitung umlah karakter di dalam String
	echo strlen($nama)  . "<br>";

	// menghitung kata dalam String
	echo str_word_count($nama) . "<br>";

	// mengganti kata
	echo str_replace("Afuwwu", "dan", $nama) . "<br>";
?>