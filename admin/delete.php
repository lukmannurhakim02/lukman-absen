<?php
    include "../koneksi.php";
        $nis = $_GET['nis'];
        $result = $conn->query("DELETE FROM siswa WHERE nis='$nis'");
        if ($result) {
            header("location:index.php?page=siswa");
            }if ($sql) {

        }
?>
<?php
include "../footer.php";
?>