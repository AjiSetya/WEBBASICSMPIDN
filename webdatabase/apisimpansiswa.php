<?php
	include 'koneksi.php';

	// menerima data dari user
	$nama    = $_POST['innama'];
	$alamat  = $_POST['inalamat'];
	$idkelas = $_POST['inidkelas'];

	// query database simpan data
	$qsimpan = "INSERT INTO tb_siswa (nama_siswa, alamat_siswa, id_kelas) VALUES ('$nama', '$alamat', '$idkelas')";
	// eksekusi query
	$simpan = $koneksi->query($qsimpan);

	if ($simpan) {
		$data['pesan'] = 'Data berhasil disimpan';
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = 'Data gagal disimpan';
		$data['hasil'] = "false";
	}

	echo json_encode($data);
	
?>