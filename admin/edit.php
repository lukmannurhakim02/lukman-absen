<?php
include "../koneksi.php";
$nis = $_GET['nis'];
$edit = $conn->query("SELECT * FROM siswa WHERE nis='$nis'");
?>
<form action="" method="post" enctype="multipart/form-data">
<?php
while ($data = mysqli_fetch_array($edit)) {
?>
<div class="edit mt-5">
    <form action="" method="post" enctype="multipart/form-data">
        <section class="base mt-4">
            <div class="my-4">
                <label>Nis</label>
                <input type="text" class="form-control" name="nis">
            </div>
            <div class="my-4">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="my-4">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin">
            </div>
            <div class="my-4">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir">
            </div>
            <button type="submit" name="edit" class="btn btn-succes">Edit</button>
        </section>
    </form>
</div>
<?php
}

if (isset($_POST['edit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $update = $conn->query("UPDATE siswa_rpl3
    SET nis = '$nis', nama = '$nama', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir' WHERE nis = '$nis';");
    if ($update) {
        header('location:index.php?edit_nama_siswa');
    }
}
?>
</form>
<?php
include "../footer.php";
?>