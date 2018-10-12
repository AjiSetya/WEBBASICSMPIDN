<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
	<div class="container">
		<h1 class="text-center">Edit <?= $data['nama_siswa'] ?> </h1>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="hidden" name="id" value="<?= $data['id_siswa'] ?>">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" value="<?= $data['nama_siswa'] ?>" placeholder="Nama siswa" class="form-control">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" rows="5" class="form-control" required><?= $data['alamat_siswa'] ?></textarea>
			</div>
			<div class="form-group">
				<label>Kelas</label>
				<input type="text" name="idkelas" value="<?= $data['id_kelas'] ?>" class="form-control" required>
			</div>
			<input type="submit" class="btn btn-primary" value="SIMPAN"></td>
		</form>
	</div>
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- bootstrap script -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php 
session_start();
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


		if ($koneksi->query($sql) === TRUE) {
			// masukkan data pesan dan hasil di session
			$_SESSION["pesan"]  = "Berhasil mengupdate data";
			$_SESSION["result"] = "sukses";
			header("location:tampilsiswa.php");
		} else {
			$_SESSION["pesan"]  = "Gagal mengupdate data dengan pesan error : " . $koneksi->error;
			$_SESSION["result"] = "gagal";
			header("location:tampilsiswa.php");
		} 

		$koneksi->close();
	}

?>