<?php
include "../koneksi.php";

$id = $_GET['username'];

$delete = $conn->query("DELETE FROM tb_user WHERE id = '$id'");

if($delete){
header('location:index.php?page=user');
}
?>