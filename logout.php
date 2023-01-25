<?php 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:lukmannurhakim/index.php?pesan=logout");
?>