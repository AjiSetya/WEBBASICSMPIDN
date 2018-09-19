<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
</head>
<body>

	<?php 
		require 'koneksi.php';

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			
			$id_siswa = $_GET['id'];

			$sql = "SELECT * FROM tb_siswa WHERE id_siswa = $id_siswa";

			$ambil_data = $koneksi->query($sql);
			// jika berhasil menjalankan query
			if ($ambil_data) {
				// cek apakah data ada
				if ($ambil_data->num_rows > 0) {
					// masukkan data ke dalam variable data
					$data = $ambil_data->fetch_assoc();
				} else {
					echo "Data tidak ditemukan";
					die();
				}
				
			} else {
				echo "Gagal menjalankan query. Error :" . $koneksi->error;
			}
			
		}
		
	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="id" value="<?= $data['id_siswa'] ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?= $data['nama_siswa'] ?>" placeholder="Nama siswa"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" cols="30" rows="10" placeholder="Alamat siswa" required><?= $data['alamat_siswa'] ?></textarea></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="idkelas" value="<?= $data['id_kelas'] ?>" placeholder="Kelas" required></td>
			</tr>
			<tr>
				<td><input type="submit" value="SIMPAN"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
	// jika dapat request
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// cek data apakah sudah didefinisikan atau belum
		if (!isset($_POST['nama']) && !isset($_POST['alamat']) && !isset($_POST['idkelas'])) {

			echo "Data belum didefinisikan";	
		}
		// cek apakah data kosong
		if (empty($_POST['nama']) && empty($_POST['alamat']) && empty($_POST['idkelas'])) {

			echo "Lengkapi data";
		} else {
			
			// data untuk disimpan
			$nama    = $_POST['nama'];
			$alamat  = $_POST['alamat'];
			$idkelas = $_POST['idkelas'];
			$idsiswa = $_POST['id'];
		}

		$sql = "UPDATE tb_siswa SET nama_siswa = '$nama', alamat_siswa = '$alamat', id_kelas = '$idkelas' WHERE id_siswa = '$idsiswa'";

		echo ($koneksi->query($sql) === TRUE) ? header("location:tampilsiswa.php") : "Gagal memperbarui data. Error message : " . $koneksi->error;

		$koneksi->close();
	}

?>