<?php
include "../koneksi.php";
$nis = $_GET['nis'];
$edit = $conn->query("SELECT * FROM siswa WHERE nis='$nis'");
?>

<?php
while ($data = mysqli_fetch_array($edit)) {
?>
<link rel="stylesheet" href="../patch/style.css">
    <div class="edit">
        <form action="" method="post">
        <section class="base mt-4">
            <div class="my-3">
                <label>Nis</label>
                <input type="text" class="form-control" name="nis"  value="<?php echo $data['nis'];?>">
            </div>
            <div class="my-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama"  value="<?php echo $data['nama'];?>">
            </div>
            <div class="my-3">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin"  value="<?php echo $data['jenis_kelamin'];?>">
            </div>
            <div class="my-3">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir"  value="<?php echo $data['tanggal_lahir'];?>">
            </div>
            <button type="submit" name="edit" class="btn btn-success">Edit</button>
        </section>
<?php
}

if (isset($_POST['edit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $update = $conn->query("UPDATE siswa
    SET nis = '$nis', nama = '$nama', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir' WHERE nis = '$nis';");
    if ($update) {
        header('location:index.php?page=siswa');
    }
}
?>
    </form>
</div>
<?php
include "../footer.php";
?>