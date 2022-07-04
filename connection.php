<?php 

	// membuat variabel
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "day13_project01";

	// membuat coneksi
	$connection = new mysqli(
		$hostname,
		$username,
		$password,
		$database
	);

	// periksa koneksi

	if($connection->connect_error){
		echo "koneksi gagal";
	}else{
		echo "koneksi berhasil";
	}



 ?>