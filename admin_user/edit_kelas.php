<?php
include "../koneksi.php";
$id_kelas = $_GET['id_kelas'];
$edit = $conn->query("SELECT * FROM kelas WHERE id_kelas='$id_kelas'");
?>

<?php
while ($data = mysqli_fetch_array($edit)) {
?>
<link rel="stylesheet" href="../patch/style.css">
    <div class="edit">
        <h2 class="text-center py-2">Edit Data Kelas</h2>
        <form action="" method="post">
        <section class="base mb-4 mx-5">
            <div class="my-3">
                <label for="nm_kelas" class="fs-6">Nama Kelas</label>
                <input type="text" class="form-control" name="nm_kelas"  value="<?php echo $data['nm_kelas'];?>">
            </div>
            <div class="mb-2">
        </div>
            <div class="my-3">
                <label for="wali_kelas" class="fs-6">Wali Kelas</label>
                <input type="text" class="form-control" name="wali_kelas" value="<?php echo $data['wali_kelas'];?>">
            </div>
            <div class=" py-3">
                <button type="submit" name="edit" class="btn btn-success btn-lg">Update</button>
                <a href="?page=kelas" class="btn btn-primary my-3"><i class='bx bx-arrow-back'></i></a>
            </div>
            
        </section>
<?php
}

if (isset($_POST['edit'])) {
    $nm_kelas = $_POST['nm_kelas'];
    $wali_kelas = $_POST['wali_kelas'];
    $update = $conn->query("UPDATE kelas SET nm_kelas = '$nm_kelas', wali_kelas = '$wali_kelas' WHERE id_kelas = '$id_kelas';");
    if ($update) {
        header('location:index.php?page=kelas');
    }
}
?>
    </form>
</div>
<?php
include "../footer.php";
?>