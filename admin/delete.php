<?php
include "koneksi.php";
$NIS = $_GET['NIS'];
$delete = mysqli_query($koneksi, "DELETE FROM siswa_rpl3 WHERE NIS = 'NIS'");

if($delete)
header('location:dashboard.php');
?>