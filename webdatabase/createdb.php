<?php 
	// konek ke server 
	include 'koneksi.php';

	// membuat database baru
	$sql = "CREATE DATABASE db_appsiswa";

	// eksekusi dan tampilkan error jika proses gagal
	// if (mysqli_query($koneksi, $sql)) {
	// 	echo "Berhasil membuat database baru";
	// } else {
	// 	echo "Gagal membuat database baru. Pesan error : " . mysqli_error($koneksi);
	// }
	
	// mysqli_close($koneksi);

	// oop
	
	if ($koneksi->query($sql) === TRUE) {
		echo "Berhasil membuat database baru";
	} else {
		echo "Gagal membuat database baru. Pesan error : " . $koneksi->error;
	}
	
	$koneksi->close();
?>