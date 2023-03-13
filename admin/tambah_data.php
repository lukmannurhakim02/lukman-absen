<?php
include "../bot.php";
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $add = "INSERT INTO siswa (nis, nama, jenis_kelamin, tanggal_lahir) VALUES ('$nis','$nama', '$jenis_kelamin','$tanggal_lahir')";
    $insert = mysqli_query($conn, $add);
    
    header('location:index.php?page=siswa');
} 
?>
<link rel="stylesheet" href="../patch/style.css">

<body>
<div class="tambah_data">
    <form class="mx-5 py-3" method="post" action="">
        <div class="mb-2">
            <label for="nis" class="form-label">Nis Siswa</label>
            <input type="text" class="form-control" id="nis" name="nis" required>
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-2">
            <h6 class="form-label">Jenis Kelamin</h6>
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
            </select> 
        </div>
        <div class="mb-2">
            <label for="tg" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tg" name="tanggal_lahir">
        </div>
        <input type="submit" name="add" value="tambah" class="btn btn-success ">
        <a href="?page=siswa" class="btn btn-primary my-3"><i class='bx bx-arrow-back'></i></a>
    </form>
</div>
</body>
<?php
include "../footer.php";
?>