<?php

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai

$sql = "SELECT username='$username', nama_lengkap='$nama_lengkap', password=md5('$password') FROM tb_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		if ($row['level'] = "admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] == "admin";
			header("location:admin/index.php");
		}elseif ($row['level'] == "petugas") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "Petugas";
			header("location:petugas/index.php");
		} 
	}
}else {
	header("location:../index.php?pesan=gagal");
}
$conn->close();
?>