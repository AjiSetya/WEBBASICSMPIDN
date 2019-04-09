<?php 
	include 'koneksi.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$email    = $_POST['email'];
		$password = $_POST['password'];
		// enkripsi password dengan md5
		$enkrip_pass = md5($password);

		$query_cari = "SELECT * FROM tb_users WHERE email = '$email' AND password = '$enkrip_pass'";

		$cari_user = $koneksi->query($query_cari);

		if ($cari_user->num_rows > 0) {
			
			while ($row = $cari_user->fetch_assoc()) {
				$data['user'][] = $row;
			}

			$data['pesan'] = '';
			$data['hasil'] = 'true';
		} else {
			$data['pesan'] = 'User not found';
			$data['hasil'] = 'false';
		}

		echo json_encode($data);
	}
?>