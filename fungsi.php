<?php 
	
	function showText($nama, $kota='Bogor')
	{
		echo "Nama saya $nama, saya tinggal di $kota";
	}

	showText('Aji', 'Kendal');
	echo "<br>";
	showText('Ali');
?>