# php1-day13-project01
# Learn MySQL in PHP


# Config
	Database name : day13_project01

# CREAT DATABASE "day13_project01"
	CREATE DATABASE day13_project01

# CREAT TABLE "pengguna"
	CREATE TABLE pengguna(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NULL,
    nama_tengah VARCHAR(30) NULL,
    nama_belakang VARCHAR(30) NULL,
    tempat_lahir VARCHAR(30) NULL,
    tanggal_lahir Varchar(2) NULL,
    bulan_lahir VARCHAR(10) NULL,
    tahun_lahir VARCHAR(4) NULL
)

# CREATE CONNECTION
connection.php
	
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