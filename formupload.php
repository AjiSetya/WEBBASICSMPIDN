<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table>
			<tr>
				<td>Pilih File</td><td><input type="File" name="userfile"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Upload"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 

	date_default_timezone_set("Asia/Jakarta");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// kita tentukan folder penyimpanan file
		$folder = "uploaded_file";

		// mengambil nama file yang dipilih user
		$filename = $_FILES['userfile']['name'];
		// mengambil nama file tanpa ekstensinya
		$filebasename = substr($filename, 0, strripos($filename, '.'));
		// mengambil ekstensi file
		$fileekstensi = substr($filename, strripos($filename, '.'));
		// membuat nama file baru
		// nama file + waktu sekarang + file ekstensi
		$newfilename = $filebasename . " " . date('Ymdhis') . $fileekstensi;

		// kita tentukan file yang akan kita upload
		$file_to_upload = $folder . "/" . $filename;
		// cek apakah file sudah ada atau belum
		// if (file_exists($file_to_upload)) {

		// 	echo "<script>alert('File ". $file_to_upload ." sudah ada di server');</script>";
		// } else {
			
			// pindah file ke folder server
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder . "/" . $newfilename)) {

				echo "<script>alert('Berhasil mengunggah file ". $file_to_upload."');</script>";
			} else {
				echo "<script>alert('Gagal mengunggah file ". $file_to_upload."');</script>";
			}
			
		//}
	}
	
?>