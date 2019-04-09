<?php
	include 'koneksi.php';
	// query database tampil data
	$qtampil = "SELECT a.id_post, a.waktu, a.caption, a.gambar, a.id_user, b.username, b.p_image FROM tb_post as a, tb_users as b WHERE a.id_user = b.id_user ORDER BY a.id_post DESC";
	// eksekusi query dan hasilnya disimpan di variable tampil
	$tampil = $koneksi->query($qtampil);
	// jika datanya ditemukan atau lebih dari 0
	if ($tampil->num_rows > 0) {
		// masukan masing2 data per row ke dalam variable array data[siswa]
		while ($row = $tampil->fetch_assoc()) {
			$data['post'][] = $row;
		}
		
		$data['pesan'] = "";
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = "Data kosong";
		$data['hasil'] = "false";
	}
	echo json_encode($data);
	
?>