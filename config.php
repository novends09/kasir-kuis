
<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= '10.0.0.201'; // host server
	$user 	= 'novends';  // username server
	$pass 	= 'Novend1*'; // password server, kalau pakai xampp kosongin saja
	$dbname = 'db_toko'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
?>