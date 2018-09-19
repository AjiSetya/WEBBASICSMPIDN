<?php
	$a = 5;
	$b = 4;
	$c = '';

	// operator aritmatika
	$c = $a * $b - $a + $a / $b;
	echo $c . "<br>";

	// operator penugasan (assignment)
	$a += 2; // $a = $a + 2
	echo $a . "<br>";
	$a *= 2; // $a = $a * 2
	echo $a . "<br>";

	// operator perbandingan
	if ($a > $b) {
		echo "variable a > variable b<br>";
	} else {
		echo "variable a < variable b<br>";
	}

	if ($a == $b) {
		echo "variable a == variable b<br>";
	} else {
		echo "variable a != variable b<br>";
	}

	if ($a >= $b) {
		echo "variable a >= variable b<br>";
	} else {
		echo "variable a <= variable b<br>";
	}

	// operator penaikan atau penurunan
	$d = 2;
	echo ++$d . ", sekarang d = " . $d . "<br>";
	echo "ditambah lalu ditampilkan <br>";

	$d = 2;
	echo $d++ . ", sekarang d = " . $d . "<br>";
	echo "ditampilkan lalu ditambah <br>";

	$f = 9;
	echo --$f . ", sekarnag f = " . $f . "<br>";
	echo "dikurang lalu ditampilkan <br>";

	$f = 9;
	echo $f-- . ", sekarnag f = " . $f . "<br>";
	echo "ditampilkan lalu ditambah <br>";

	for ($i=0; $i <= 10; $i++) { 
		echo $i;
	}

	// operator logika
	// and, or, not, xor
	// and = kedua syarat harus terpenuhi
	// or = salah satu syarat harus terpenuhi
	// not = kedua syarat tidak terpenuhi
	// xor = syarat terpenuhi apabila salah satu syaratnya tepenuhi
	
	echo("<br>");

	$nilai1 = 3;
	$nilai2 = 5;

	// and
	// jika nalai1 sama dengan 3 dan nilai2 sama dengan 5
	// jika kedua kondisi tepenuhi maka hasilnya true
	if ($nilai1 == 3 and $nilai2 == 5) {
		echo "kedua syarat terpenuhi <br>";
	} else {
		echo "kedua syarat tidak terpenuhi <br>";
	}

	// jika salah satu kondisi tidak terpenuhi maka hasilnya false
	// true and false = false
	if ($nilai1 == 4 and $nilai2 == 5) {
		echo "kedua syarat terpenuhi <br>";
	} else {
		echo "kedua syarat tidak terpenuhi <br>";
	}

	// jika punya banyak kondisi
	// true and true and true = false
	if ($nilai1 == 4 and $nilai2 == 5 and $nilai2 > $nilai1) {
		echo "ketiga syarat terpenuhi <br>";
	} else {
		echo "ketiga syarat tidak terpenuhi <br>";
	}

	$username = "admin";
	$password = "123456";

	if ($username == "ngadimin" and $password == "123456") {
		echo "kamu bisa login <br>";
	} else {
		echo "gagal login, coba lagi <br>";
	}

	// operator or
	// jika salah satu kondisi adalah true maka hasilnya true
	
	if ($username == "ngadimin" or $password == "123456") {
		echo "kamu bisa login <br>";
	} else {
		echo "gagal login, coba lagi <br>";
	}

	// jika username kosong atau password kosong maka tampil pesan error
	if (empty($username) or empty($password)) {
		echo "username atau password kosong <br>";
	} else {
		echo "username atau password terisi semua <br>";
	}

	// not (!)
	// akan menghasilkan kebalikan dari kondisi
	// jika kondisi = true maka hasilnya false
	// begitu juga kebalikannya
	
	$glass_is_filled = true;
	// jika not gelas terisi
	// false
	if (!$glass_is_filled) {
		echo "please fill the glass <br>";
	} else {
		echo "the glass was filled <br>";
	}

	$lulus = true;

	if ($lulus == true) {
		echo "kamu lulus <br>";
	} else {
		echo "kamu gak lulus <br>";
	}
	
	if (!$lulus) {
		echo "kamu gak lulus <br>";
	} else {
		echo "kamu lulus <br>";
	}
	
	$username2 = "admin";
	$password2 = "admin";

	if (!$username2 == "admin" and !$password2 == "admin") {
		echo "invalid username or password <br>";
	} else {
		echo "login success <br>";
	}
	
	
	
?>