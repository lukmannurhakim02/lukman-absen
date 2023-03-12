<?php
    include "../koneksi.php";
        $username = $_GET['username'];
        $result = $conn->query("DELETE FROM tb_user WHERE username='$username'");
        if ($result) {
            header("location:index.php?page=user");
            }if ($sql) {

        }
?>
<?php
include "../footer.php";
?>
