<?php
	include 'koneksi.php';

	// get id data from client
	$id_user = $_POST['id'];

	// query database tampil data
	$qtampil = "SELECT * FROM tb_users WHERE id_user = '$id_user'";
	// eksekusi query dan hasilnya disimpan di variable tampil
	$tampil = $koneksi->query($qtampil);
	// jika datanya ditemukan atau lebih dari 0
	if ($tampil->num_rows > 0) {
		// masukan masing2 data per row ke dalam variable array data[siswa]
		while ($row = $tampil->fetch_assoc()) {
			$data['user'][] = $row;
		}
		
		$data['pesan'] = "";
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = "Data kosong";
		$data['hasil'] = "false";
	}
	echo json_encode($data);
	
?>