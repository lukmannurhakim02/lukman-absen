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
        <h2 class="text-center py-3">Edit Data Siswa</h2>
        <form action="" method="post">
        <section class="base mb-4 mx-5 py-2">
            <div class="my-3 ">
                <label class="fs-4">Nis</label>
                <input type="text" class="form-control" name="nis"  value="<?php echo $data['nis'];?>">
            </div>
            <div class="my-3">
                <label class="fs-4">Nama</label>
                <input type="text" class="form-control" name="nama"  value="<?php echo $data['nama'];?>">
            </div>
            <div class="mb-2">
            <h6 class="form-label">Jenis Kelamin</h6>
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
            </select> 
        </div>
            <div class="my-3">
                <label class="fs-4">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir"  value="<?php echo $data['tanggal_lahir'];?>">
            </div>
            <div class=" py-3"><button type="submit" name="edit" class="btn btn-success btn-lg">Update</button></div>
            <a href="?page=siswa" class="btn btn-primary"><i class='bx bx-arrow-back'></i></a>
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