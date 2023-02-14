<?php
include "../koneksi.php";

$nis = $_GET['nis'];

$delete = $conn->query("DELETE FROM absen WHERE NIS = '$nis'");

if($delete){
header('location:../admin/absen.php');
}
?>