<?php
    include "../koneksi.php";
        $idkelas = $_GET['id_kelas'];
        $result = $conn->query("DELETE FROM kelas WHERE id_kelas='$idkelas'");
        if ($result) {
            header("location:index.php?page=kelas");
            }if ($sql) {

        }
?>
<?php
include "../footer.php";
?>