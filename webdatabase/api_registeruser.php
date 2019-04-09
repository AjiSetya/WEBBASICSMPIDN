<?php 
	include 'koneksi.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$email    = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama     = $_POST['nama'];
		$pp       = $_POST['pimg'];
		// enkripsi password dengan md5
		$enkrip_pass = md5($password);

		// 1 user 1 email
		// cek apakah ada user yang menggunakan email yang sama
		// jika email ditemukan, maka akan muncul pesan errot
		
		$query_nyari_email = "SELECT * FROM tb_users WHERE email = '$email'";

		$cari_email = $koneksi->query($query_nyari_email);

		if ($cari_email->num_rows > 0) {
			$data['pesan'] = 'Email telah dipakai';
			$data['hasil'] = 'false';
		} else {
			$query = "INSERT INTO tb_users (nama, username, email, password, p_image) VALUES ('$nama', '$username', '$email', '$enkrip_pass', '$pp')";

			$simpan = $koneksi->query($query);

			if ($simpan) {
				$data['pesan'] = 'Berhasil mendaftarkan';
				$data['hasil'] = 'true';
			} else {
				$data['pesan'] = 'Gagal mendaftar';
				$data['hasil'] = 'false';
				//echo("Error description: " . mysqli_error($koneksi));
			}
		}
		
		echo json_encode($data);
	}
?>