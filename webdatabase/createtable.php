<?php 
	// konek ke server
	include 'koneksi.php';	

	// menentukan nama database
	$database = 'db_appsiswa';

	// kita masukkan database ke koneksi
	$koneksi = new mysqli($server, $username, $password, $database);

	// query untuk membuat table baru
	$sql = "CREATE TABLE tb_siswa (
		id_siswa INT AUTO_INCREMENT PRIMARY KEY,
		nama_siswa VARCHAR(20) NOT NULL,
		alamat_siswa TEXT NOT NULL,
		id_kelas INT NOT NULL
	)";

	// eksekusi query
	if ($koneksi->query($sql) === TRUE) {
		echo "Berhasil membuat table baru";
	} else {
		echo "Gagal membuat table baru. Pesan error :" . $koneksi->error;
	}
	
	$koneksi->close();
?>