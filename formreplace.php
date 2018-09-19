<!DOCTYPE html>
<html>
<head>
	<title>Form Replace</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<td>Teks</td><td><textarea name="teks" cols="30" rows="3"></textarea><br></td>
		</tr>
		<tr>
			<td>Find</td><td><input type="text" name="cari"><br></td>
		</tr>
		<tr>
			<td>Replace</td><td><input type="text" name="ganti"><br></td>
		</tr>
		<tr>
			<td><input type="submit" value="Replace"></td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$teks  = $_POST['teks'];
		$cari  = $_POST['cari'];
		$ganti = $_POST['ganti'];

		if (empty($teks) && empty($cari) && empty($ganti)) {
			echo "<script>alert('Lengkapi form !');</script>";
		} else {
			echo "<center><h1>" . replaceTeks($cari, $ganti, $teks) . "</h1></center>";
		}
	}		
	
	function replaceTeks($find, $replace, $subject)
	{
		$hasil = str_replace($find, $replace, $subject, $total);

		if ($total == 0) {
			echo "<script>alert('Tidak ada kata yng diganti');</script>";
		} else {
			echo "<script>alert('Berhasil mengubah sebanyak " . $total . " kata');</script>";	
		}
		
		return $hasil;
	}

?>