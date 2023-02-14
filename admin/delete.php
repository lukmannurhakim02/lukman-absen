<?php
include "../koneksi.php";

$nis = $_GET['nis'];

$delete = $conn->query("DELETE FROM siswa_rpl3 WHERE NIS = '$nis'");

if($delete){
header('location:../admin/index.php');
}
?>