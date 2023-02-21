<?php
include "../koneksi.php";

$nis = $_GET['nis'];

$delete = $conn->query("DELETE FROM siswa WHERE NIS = '$nis'");

if($delete){
header('location:index.php?page=siswa');
}
?>