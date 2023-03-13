<?php
include "../bot.php";
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $id_kelas = $_POST['id_kelas'];
    $nm_kelas = $_POST['nm_kelas'];
    $wali_kelas = $_POST['wali_kelas'];

    $add = "INSERT INTO kelas (id_kelas, nm_kelas, wali_kelas) VALUES ('$id_kelas','$nm_kelas', '$wali_keals')";
    $insert = mysqli_query($conn, $add);
    
    header('location:index.php?page=kelas');
}
?>
<link rel="stylesheet" href="../patch/style.css">

<body>
<div class="tambah_data">
    <form class="mx-5 py-3" method="post" action="">
        <div class="mb-2">
            <label for="id_kelas" class="form-label">Id Kelas</label>
            <input type="text" class="form-control" id="id_kelas" name="id_kelas" required>
        </div>
        <div class="mb-2">
        <label for="nm_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" id="nm_kelas" name="nm_kelas" required>
        </div>
        <div class="mb-2">
            <label for="id_kelas" class="form-label">Wali Kelas</label>
            <input type="text" class="form-control" id="wali_kelas" name="wali_kelas">
        </div>
        <input type="submit" name="add" value="tambah" class="btn btn-success ">
        <a href="?page=kelas" class="btn btn-primary my-3"><i class='bx bx-arrow-back'></i></a>
    </form>
</div>
</body>
<?php
include "../footer.php";
?>