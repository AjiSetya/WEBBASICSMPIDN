<?php 
	// file untuk konek ke database
	
	$username = "id8837739_root";
	$password = "serverajisetya8080";
	$server   = "localhost";
	$database = "id8837739_ajiserverdb";

	// PDO (php data object)
	// mysqli
	
	// buat koneksi
	// prosedural
	//$koneksi = mysqli_connect($server, $username, $password);

	// cek apakah konek atau tidak
	// if (!$koneksi) {
	// 	die('Kita tidak konek ke server karena : ' . mysqli_connect_error());
	// } 

	// sistem object oriented
	// mysqli (server, username, password, database)
	$koneksi = new mysqli($server, $username, $password, $database);

	// cek error
	if ($koneksi->connect_error) {
		die('Gagal koneksi karena : ' . $koneksi->connect_error);
	}
	
	// echo "Koneksi berhasil";

	// memutuskan koneksi
	//$koneksi->close();
?>