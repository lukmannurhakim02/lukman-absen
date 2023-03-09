<?php

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai

$sql = "SELECT * FROM tb_user WHERE username='$username' AND password=md5('$password')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		if ($row['level'] == "Admin") {
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $username;
			$_SESSION['level'] == "admin";
			header("location:admin/index.php");
		}elseif ($row['level'] == "Petugas") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "Petugas";
			header("location:petugas/index.php");
		} 
	}
}else {
	header("location:../login.php?pesan=gagal");
}
$conn->close();//
?>